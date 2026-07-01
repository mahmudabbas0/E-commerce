<?php

namespace App\Repositories\Dashboard;


use App\Models\Setting;

class SettingRepository
{

    public function getSettings(){
        $settings = Setting::find(1);
        return $settings;
    }


    public function updateSetting($data,$setting){
        $setting->update($data);
        return $setting;
    }




}
