<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => [
                    'ar' => 'ملابس',
                    'en' => 'Clothing',
                ],
                'slug' => 'clothing',
                'status' => '1',
                'parent' => null,
            ],
            [
                'name' => [
                    'ar' => 'احذية',
                    'en' => 'Shoes',
                ],
                'slug' => 'shoes',
                'status' => '1',
                'parent' => null,
            ],
            [
                'name' => [
                    'ar' => 'اكسسوارات',
                    'en' => 'Accessories',
                ],
                'slug' => 'accessories',
                'status' => '1',
                'parent' => null,
            ],
            [
                'name' => [
                    'ar' => 'حقائب',
                    'en' => 'Bags',
                ],
                'slug' => 'bags',
                'status' => '1',
                'parent' => null,
            ],
            [
                'name' => [
                    'ar' => 'مجوهرات',
                    'en' => 'Jewelry',
                ],
                'slug' => 'jewelry',
                'status' => '1',
                'parent' => null,
            ],
        ];

        foreach ($data as $category) {
            Category::create($category);
        }
    }
}
