<?php

namespace App\Repositories\Dashboard;

use App\Models\Brand;

class BrandRepository
{
    public function getAllBrands()
    {
        return Brand::withCount('products')->get();
    }

    public function getBrandById(int $id){
        $brand = Brand::find($id);
        return $brand;
    }

    public function createBrand($data){
        $brand = Brand::create($data);
        return $brand;
    }
    public function updateBrand($data, $id){
        $brand = $this->getBrandById($id);
        $brand->update($data);
        return $brand;
    }
    public function deleteBrand($brand){
        $brand->delete();
        return $brand;
    }


}
