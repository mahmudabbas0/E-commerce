<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => [
                    'ar' => 'نايك',
                    'en' => 'Nike',
                ],
                'slug' => 'nike',
                'logo' => 'brands/nike.png',
                'status' => 1,
            ],
            [
                'name' => [
                    'ar' => 'أديداس',
                    'en' => 'Adidas',
                ],
                'slug' => 'adidas',
                'logo' => 'brands/adidas.png',
                'status' => 1,
            ],
            [
                'name' => [
                    'ar' => 'أبل',
                    'en' => 'Apple',
                ],
                'slug' => 'apple',
                'logo' => 'brands/apple.png',
                'status' => 1,
            ],
            [
                'name' => [
                    'ar' => 'سامسونج',
                    'en' => 'Samsung',
                ],
                'slug' => 'samsung',
                'logo' => 'brands/samsung.png',
                'status' => 1,
            ],
            [
                'name' => [
                    'ar' => 'سوني',
                    'en' => 'Sony',
                ],
                'slug' => 'sony',
                'logo' => 'brands/sony.png',
                'status' => 1,
            ],
            [
                'name' => [
                    'ar' => 'إل جي',
                    'en' => 'LG',
                ],
                'slug' => 'lg',
                'logo' => 'brands/lg.png',
                'status' => 1,
            ],
            [
                'name' => [
                    'ar' => 'بوما',
                    'en' => 'Puma',
                ],
                'slug' => 'puma',
                'logo' => 'brands/puma.png',
                'status' => 1,
            ],
            [
                'name' => [
                    'ar' => 'ديل',
                    'en' => 'Dell',
                ],
                'slug' => 'dell',
                'logo' => 'brands/dell.png',
                'status' => 1,
            ],
            [
                'name' => [
                    'ar' => 'إتش بي',
                    'en' => 'HP',
                ],
                'slug' => 'hp',
                'logo' => 'brands/hp.png',
                'status' => 1,
            ],
            [
                'name' => [
                    'ar' => 'كانون',
                    'en' => 'Canon',
                ],
                'slug' => 'canon',
                'logo' => 'brands/canon.png',
                'status' => 1,
            ],
        ];

        foreach ($data as $brand) {
            Brand::create($brand);
        }
    }
}
