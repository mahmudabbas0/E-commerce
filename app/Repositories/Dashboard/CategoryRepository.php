<?php

namespace App\Repositories\Dashboard;

use App\Models\Category;

class CategoryRepository
{
    public function getAllCategories()
    {
       return $categories = Category::withCount('products')->get();

    }

    public function getCategoryById(int $id){
        $category = Category::find($id);
        return $category;
    }
    public function createCategory($data){
        $category = Category::create($data);
        return $category;
    }

    public function updateCategory($category, $data){
        if (!$category instanceof Category) {
            $category = $this->getCategoryById($category);
        }
        $category->update($data);
        return $category;
    }

    public function deleteCategory($category){
        if (!$category instanceof Category) {
            $category = $this->getCategoryById($category);
        }
        $category->delete();
        return $category;
    }
    public function getCategoriesExceptParent(){
        $categories = Category::whereNull('parent')->get();
        return $categories;
    }
    public function getCategoriesExceptChildren($id){
        return Category::where('id', '!=', $id)
            ->whereNull('parent')
            ->get();
    }


}
