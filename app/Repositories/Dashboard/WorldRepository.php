<?php

namespace App\Repositories\Dashboard;

use App\Models\City;
use App\Models\Country;
use App\Models\Governorate;
use App\Models\ShippingGovernorate;

class WorldRepository
{
    public function getAllCountries()
    {
        return Country::select('id', 'name', 'phone_code', 'code', 'is_active')->get();
    }

    public function getCountriesById($id)
    {
        return Country::find($id);
    }

    public function getGovernorateById($id)
    {
        return Governorate::find($id);
    }

    public function getAllGovernoratesByCountryId($country)
    {
        return $country->governorates;
    }

    public function getAllCitiesByGovernorateId($governorate)
    {
        return $governorate->cities;
    }


    public function changeStatus($country)
    {
        $country->update([
            'is_active' => $country->is_active == 1 ? 0 : 1,
        ]);

        return $country;
    }

    public function changeGovernorateStatus($governorate)
    {
        $governorate->update([
            'is_active' => $governorate->is_active == 1 ? 0 : 1,
        ]);

        return $governorate;
    }

    public function updateShippingCharge($governorate_id, $price)
    {
        return ShippingGovernorate::updateOrCreate(
            ['governorate_id' => $governorate_id],
            ['price' => $price]
        );
    }
}
