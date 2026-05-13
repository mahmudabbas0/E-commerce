<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Services\Dashboard\BrandService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $brandService;
    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }
    public function getAllBrands()
    {
        $brands = $this->brandService->getAllBrands();
        return $brands;
    }

    public function index()
    {
        return view('dashboard.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        $data = $request->validated();
        $brand = $this->brandService->createBrand($data);
        if($brand){
            return redirect()->route('dashboard.brands.index')->with('success', __('dashboard.brand_created'));

        }
        return redirect()->route('dashboard.brands.create')->withErrors(__('dashboard.brand_could_not_create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = $this->brandService->getBrandById($id);
        return view('dashboard.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
       // dd($data);
        $brand = $this->brandService->updateBrand($id,$data);
        return redirect()->route('dashboard.brands.index')->with('success', __('dashboard.brand_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($brand = $this->brandService->deleteBrand($id)){
            return redirect()->route('dashboard.brands.index')->with('success', __('dashboard.brand_deleted'));
        }
        return redirect()->route('dashboard.brands.index')->with('error', __('dashboard.brand_could_not_delete'));
    }

    public function changeStatus(string $id)
    {
        $brand = $this->brandService->changeStatus($id);
        return redirect()->route('dashboard.brands.index')->with('success', __('dashboard.brand_status_changed'));

    }
}
