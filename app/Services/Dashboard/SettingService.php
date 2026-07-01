<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\SettingRepository;
use App\utils\ImageManger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingService
{
    protected $settingRepository, $imageManger;

    public function __construct(SettingRepository $settingRepository, ImageManger $imageManger)
    {
        $this->settingRepository = $settingRepository;
        $this->imageManger = $imageManger;
    }

    public function getSettings()
    {
        return $this->settingRepository->getSettings() ?? abort(404);
    }


    public function updateSetting($data)
    {
        $setting = $this->settingRepository->getSettings();

        if (request()->hasFile('logo')) {
            if ($setting->logo) {
                $this->imageManger->deleteImagesFromLocal($setting->logo);
            }
            $file_name = $this->imageManger->uploadSingleImage('/', $data['logo'], 'settings');
            $data['logo'] = $file_name;
        } else {
            unset($data['logo']);
        }

        if (request()->hasFile('favicon')) {
            if ($setting->favicon) {
                $this->imageManger->deleteImagesFromLocal($setting->favicon);
            }

            $file_name = $this->imageManger->uploadSingleImage('/', $data['favicon'], 'settings');
            $data['favicon'] = $file_name;
        } else {
            unset($data['favicon']);
        }

        $setting = $this->settingRepository->updateSetting($data, $setting);
        return $setting;
    }


}
