<?php

namespace App\Repositories\Dashboard;

use App\Models\Category;
use App\Models\Coupon;

class CouponRepository
{
    public function getCouponById(int $id)
    {
        $coupon = Coupon::find($id);
        return $coupon;
    }

    public function getAllCoupons()
    {
        return $coupons = Coupon::get();

    }


    public function createCoupon($data)
    {
        $coupon = Coupon::create($data);
        return $coupon;
    }

    public function updateCoupon($coupon, $data)
    {
        if (!$coupon instanceof Coupon) {
            $coupon = $this->getCouponById($coupon);
        }
        $coupon->update($data);
        return $coupon;
    }

    public function deleteCoupon($coupon)
    {
        if (!$coupon instanceof Coupon) {
            $coupon = $this->getCouponById($coupon);
        }
        $coupon->delete();
        return $coupon;
    }

}
