<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // مسح البيانات القديمة لضمان عدم حدوث تكرار في الأكواد الفريدة
        DB::table('coupons')->truncate();

        $data = [
            [
                'code' => 'SUMMER30',
                'discount_percentage' => 30,
                'start_date' => '2026-06-01',
                'end_date' => '2026-08-31',
                'limit' => 500,
                'time_used' => 124,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'EID2026',
                'discount_percentage' => 25,
                'start_date' => '2026-10-01',
                'end_date' => '2026-10-10',
                'limit' => 1000,
                'time_used' => 0,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'WELCOME10',
                'discount_percentage' => 10,
                'start_date' => '2026-01-01',
                'end_date' => '2026-12-31',
                'limit' => 9999,
                'time_used' => 842,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'EXPIRED15',
                'discount_percentage' => 15,
                'start_date' => '2025-01-01',
                'end_date' => '2025-12-31',
                'limit' => 100,
                'time_used' => 100,
                'is_active' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('coupons')->insert($data);
    }
}
