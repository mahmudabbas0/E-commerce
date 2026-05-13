<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\BrandRepository;
use App\utils\ImageManger;
use Illuminate\Support\Facades\Cache;
use Yajra\DataTables\DataTables;

class BrandService
{
    protected $brandRepository,$imageManager;
    public function __construct(BrandRepository $brandRepository,ImageManger $imageManager)
    {
        $this->brandRepository = $brandRepository;
        $this->imageManager = $imageManager;
    }
    public function getAllBrands()
    {
        $brands = $this->brandRepository->getAllBrands();
        return Datatables::of($brands)
            ->addIndexColumn()
            ->addColumn('name', function ($brand) {
                return $brand->name;
            })
            ->editColumn('status', function ($brand) {
                return $brand->status == 1
                    ? '<span class="badge badge-success">' . __('dashboard.active') . '</span>'
                    : '<span class="badge badge-danger">' . __('dashboard.inactive') . '</span>';
            })
            ->editColumn('logo', function ($brand) {
                return view('dashboard.brands.datatables.logo', compact('brand'))->render();
            })
            ->addColumn('actions', function ($brand) {
                return view('dashboard.brands.datatables.actions', compact('brand'))->render();
            })
            ->addColumn('products_count', function ($brand) {
                return '<span class="badge badge-pill badge-info" style="font-weight: 600; font-size: 13px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">' . $brand->products_count . '</span>';
            })
            ->rawColumns(['actions', 'status','logo', 'products_count'])
            ->make(true);
    }
    public function getBrandById($id){
        $brand = $this->brandRepository->getBrandById($id);
        if(!$brand){
            abort(404);
        }
        return $brand;
    }

    public function createBrand($data){
        if(request()->hasFile('logo')){
           $file_name = $this->imageManager->uploadSingleImage('/',$data['logo'], 'brands');
           $data['logo'] = $file_name;
        }

        $brand = $this->brandRepository->createBrand($data);
        $this->brandCache();
        return $brand;
    }

    public function updateBrand($id,$data){
        $brand = $this->getBrandById($id);
        if(request()->hasFile('logo')){
            $this->imageManager->deleteImagesFromLocal($brand->logo);
            $file_name = $this->imageManager->uploadSingleImage('/',$data['logo'], 'brands');
            $data['logo'] = $file_name;
        }
        $brand = $this->brandRepository->updateBrand($data, $data['id']);
        return $brand;
    }

    public function deleteBrand($id){
        $brand = $this->getBrandById($id);
        if($brand){
            $this->imageManager->deleteImagesFromLocal($brand->logo);
        }


        $brand = $this->brandRepository->deleteBrand($brand);
        $this->brandCache();
        return $brand;
    }

    public function changeStatus($id){
        $brand = $this->getBrandById($id);
        $brand->status = !$brand->status;
        $brand->save();
        return $brand;
    }

    public function brandCache(){
        Cache::forget('brands_count');
    }


}
