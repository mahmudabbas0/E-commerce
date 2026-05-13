<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\CategoryRepository;
use Illuminate\Support\Facades\Cache;
use Yajra\DataTables\DataTables;

class CategoryService
{
    protected $categoryrepository;

    public function __construct(CategoryRepository $categoryrepository)
    {
        $this->categoryRepository = $categoryrepository;
    }

    public function getAllCategories()
    {
        $categories = $this->categoryRepository->getAllCategories();
        return DataTables::of($categories)
            ->addColumn('name', function ($category) {
                return $category->name;
            })
            ->editColumn('type', function ($category) {
                if ($category->parent == null) {
                    return '<span class="badge badge-primary" style="min-width: 100px; padding: 7px;">' . __('dashboard.main_category') . '</span>';
                }
                $parentName = $category->parentCategory->name ?? '';
                return '<span class="badge badge-warning" style="min-width: 100px; padding: 7px;">' . __('dashboard.sub_category') . '</span>' .
                       '<div class="mt-1" style="font-size: 11px; color: #666;">' .
                       '<i class="ft-arrow-left"></i> ' . __('dashboard.parent_category') . ': <b style="color: #333;">' . $parentName . '</b></div>';
            })
            ->addIndexColumn()
            ->addColumn('actions', function ($category) {
                return view('dashboard.categories.actions', compact('category'))->render();
            })
            ->editColumn('status', function ($category) {
                return $category->status == 1
                    ? '<span class="badge badge-success">' . __('dashboard.active') . '</span>'
                    : '<span class="badge badge-danger">' . __('dashboard.inactive') . '</span>';
            })
            ->addColumn('products_count', function ($category) {
                return '<span class="badge badge-pill badge-info" style="font-weight: 600; font-size: 13px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">' . $category->products_count . '</span>';
            })
            ->rawColumns(['actions', 'status','type', 'products_count'])
            ->make(true);

    }

    public function getCategoryById($id){
        $category = $this->categoryRepository->getCategoryById($id);
        return $category;
    }
    public function createCategory($data){
        $category = $this->categoryRepository->createCategory($data);
        $this->categoryCache();
        return $category;
    }
    public function updateCategory($data){
        $category = $this->getCategoryById($data['id']);
        return $this->categoryRepository->updateCategory($category,$data);
    }

    public function deleteCategory($id){
        $category = $this->getCategoryById($id);
        $this->categoryCache();
        return $this->categoryRepository->deleteCategory($category);
    }
    public function getCategoriesExceptParent(){

        return $this->categoryRepository->getCategoriesExceptParent();;
    }

    public function getCategoriesExceptChildren($id){
        return $this->categoryRepository->getCategoriesExceptChildren($id);
    }

    public function changeStatus($id)
    {
        $category = $this->categoryRepository->getCategoryById($id);
        if ($category) {
            $category->status = $category->status == 1 ? 0 : 1;
            $category->save();
            return true;
        }
        return false;
    }
    public function categoryCache(){
        Cache::forget('categories_count');

    }
}
