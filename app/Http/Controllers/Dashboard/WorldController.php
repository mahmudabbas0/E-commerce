<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Services\Dashboard\WorldService;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    protected $worldService;
    public function __construct(WorldService $worldService)
    {
        $this->worldService = $worldService;
    }
    public function getAllCountries(){
        $countries = $this->worldService->getAllCountriesWithCount();
        return view('dashboard.world.countries', compact('countries'));
    }
    public function getAllGovernorates($id){
     $governorates =$this->worldService->getAllGovernoratesByCountryId($id);
     return view('dashboard.world.governorates', compact('governorates'));
    }
    public function getAllCities($id){
       $cities = $this->worldService->getAllCitiesByGovernorateId($id);
       return view('dashboard.world.cities', compact('cities'));

    }


    public function changeStatus($country_id)
    {
        $country = $this->worldService->changeStatus($country_id);

        if (!$country) {
            return back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->back()->with('success', __('dashboard.updated-successfully'));
    }

    public function changeGovernorateStatus($id)
    {
        $governorate = $this->worldService->changeGovernorateStatus($id);

        if (!$governorate) {
            return back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->back()->with('success', __('dashboard.updated-successfully'));
    }

    public function updateSingleShippingCharge(Request $request)
    {
        try {
            $this->worldService->updateSingleShippingCharge($request->governorate_id, $request->price);
            return redirect()->back()->with('success', __('dashboard.updated-successfully'));
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }
    }
}
