<?php

namespace App\Services\Dashboard;

use App\Models\Country;
use App\Models\Governorate;
use App\Repositories\Dashboard\WorldRepository;
use phpDocumentor\Reflection\Types\Self_;

class WorldService
{
    protected $worldRepository;

    public function __construct(WorldRepository $worldRepository)
    {
        $this->worldRepository = $worldRepository;

    }

    public function getCountryById($id)
    {

        $country = $this->worldRepository->getCountriesById($id);
        if (!$country) {
            abort(404);
        }
        return $country;
    }
    public function getGovernorateById($id)
    {

        $governorate = $this->worldRepository->getGovernorateById($id);
        if (!$governorate) {
            abort(404);
        }
        return $governorate;
    }

    public function getAllCountries()
    {
        return $this->worldRepository->getAllCountries();
    }

    public function getAllCountriesWithCount()
    {
        return Country::withCount(['governorates', 'users'])->get();
    }

    public function getAllGovernoratesByCountryId($id)
    {
        $country = $this->getCountryById($id);
        return Governorate::where('country_id', $id)->withCount('cities')->get();
    }

    public function changeGovernorateStatus($id)
    {
        $governorate = $this->getGovernorateById($id);
        return $this->worldRepository->changeGovernorateStatus($governorate);
    }

    public function getAllCitiesByGovernorateId($id)
    {
        $governorate = $this->getGovernorateById($id);
        return $this->worldRepository->getAllCitiesByGovernorateId($governorate);
    }


    public function changeStatus($country_id)
    {
        $country = $this->getCountryById($country_id);
        $this->worldRepository->changeStatus($country);

        if (!$country) {
            return false;
        }
        return true;
    }

    public function updateSingleShippingCharge($governorate_id, $price)
    {
        return $this->worldRepository->updateShippingCharge($governorate_id, $price);
    }

}
