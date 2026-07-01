<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Services\Dashboard\SettingService;

class SettingController extends Controller
{
    protected $settingService;
    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }
    public function index()
    {
        return view('dashboard.settings.index');
    }

    public function update(SettingRequest $request)
    {
        $data = $request->except('_token', '_method');
        $setting = $this->settingService->updateSetting($data);
        if (!$setting) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));

        }
        return redirect()->route('dashboard.settings.index')->with('success', __('dashboard.settings_updated'));
    }
}
