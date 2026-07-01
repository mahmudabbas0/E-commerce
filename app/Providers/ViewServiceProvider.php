<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('dashboard.*', function ($view) {
            if (!Cache::has('categories_count')) {
                Cache::remember('categories_count', 3600, function () {
                    return Category::count();
                });
            }
            if (!Cache::has('brands_count')) {
                Cache::remember('brands_count', 3600, function () {
                    return Brand::count();
                });
            }
            if (!Cache::has('admins_count')) {
                Cache::remember('admins_count', 3600, function () {
                    return Admin::count();
                });
            }

            if (!Cache::has('coupon_count')) {
                Cache::remember('coupon_count', 3600, function () {
                    return Coupon::count();
                });
            }

            view()->share([
                'categories_count' => Cache::get('categories_count'),
                'brands_count' => Cache::get('brands_count'),
                'admins_count' => Cache::get('admins_count'),
                'coupon_count' => Cache::get('coupon_count'),
            ]);
        });

        $settings = $this->firstOrCreateSetting();
        view()->share([
            'settings' => $settings,
        ]);


    }
    function firstOrCreateSetting()
    {
        $getSettings = Setting::firstOr(
            function () {
                return Setting::create([
                    'site_name' => [
                        'ar' => 'متجر الكتروني',
                        'en' => 'E-commerce Store'
                    ],
                    'site_desc' => [
                        'ar' => 'متجر الكتروني',
                        'en' => 'E-commerce Store'
                    ],
                    'site_address' => [
                        'ar' => 'سوريا- دمشق',
                        'en' => 'Syria - Damascus'
                    ],
                    'meta_title' => [
                        'ar' => 'متجر الكتروني',
                        'en' => 'E-commerce Store'
                    ],
                    'meta_description' => [
                        'ar' => 'متجر الكتروني',
                        'en' => 'E-commerce Store'
                    ],
                    'meta_keywords' => [
                        'ar' => 'متجر الكتروني',
                        'en' => 'E-commerce Store'
                    ],
                    'maintenance_message' => [
                        'ar' => 'الموقع تحت الصيانة، يرجى العودة لاحقاً.',
                        'en' => 'The site is under maintenance, please come back later.'
                    ],
                    'site_phone' => '+20123456789',
                    'site_email' => 'info@ecommerce.com',
                    'email_support' => 'support@ecommerce.com',
                    'facebook_url' => 'https://www.facebook.com/',
                    'twitter_url' => 'https://twitter.com/',
                    'youtube_url' => 'https://www.youtube.com/',
                    'instagram_url' => 'https://www.instagram.com/',
                    'whatsapp_number' => '+20123456789',
                    'promotion_video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                    'logo' => 'default-logo.png',
                    'favicon' => 'default-favicon.png',
                    'site_copyright' => '© ' . date('Y') . ' E-commerce Store. All rights reserved.',
                    'primary_color' => '#1e9ff2',
                    'secondary_color' => '#ff4961',
                    'default_currency' => 'SYP',
                    'maintenance_mode' => false,
                    'registration_status' => true,
                    'smtp_host' => null,
                    'smtp_port' => null,
                    'smtp_username' => null,
                    'smtp_password' => null,
                    'smtp_encryption' => null,
                ]);
            }
        );
        return $getSettings;
    }



}
