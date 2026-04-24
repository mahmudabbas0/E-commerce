<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // DB::table('countries')->truncate();

        $countries = [
            [
                'id' => 1,
                'name' => ['en' => 'Syria', 'ar' => 'سوريا'],
                'phone_code' => '+963',
                'code' => 'SY',
            ],

            [
                'id' => 2,
                'name' => ['en' => 'Turkey', 'ar' => 'تركيا'],
                'phone_code' => '+90',
                'code' => 'TR',
            ],

        ];

        foreach ($countries as $country) {
            country::create($country);
        }
    }
}
