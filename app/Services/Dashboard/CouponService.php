<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\CategoryRepository;
use App\Repositories\Dashboard\CouponRepository;
use Illuminate\Support\Facades\Cache;
use Yajra\DataTables\DataTables;

class CouponService
{
    protected $couponRepository;

    public function __construct(CouponRepository $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }

    public function getCouponById($id)
    {
        $coupon = $this->couponRepository->getCouponById($id);
        return $coupon ?? abort(404, 'Coupon Not Found');
    }

    public function getAllCoupons()
    {
        $coupons = $this->couponRepository->getAllCoupons();
        return DataTables::of($coupons)
            ->editColumn('code', function ($coupon) {
                return '<span class="coupon-badge">' . e($coupon->code) . '</span>';
            })
            ->editColumn('discount_percentage', function ($coupon) {
                return '<span class="discount-highlight">' . e($coupon->discount_percentage) . '%</span>';
            })
            ->addIndexColumn()
            ->addColumn('actions', function ($coupon) {
                return view('dashboard.coupons.datatables.actions', compact('coupon'))->render();
            })
            ->editColumn('status', function ($coupon) {
                if ($coupon->is_active == 1) {
                    return '<span class="status-dot status-active"></span> <span class="text-success">' . __('dashboard.active') . '</span>';
                }
                return '<span class="status-dot status-inactive"></span> <span class="text-danger">' . __('dashboard.inactive') . '</span>';
            })
            ->rawColumns(['code', 'discount_percentage', 'actions', 'status'])
            ->make(true);

    }


    public function createCoupon($data)
    {
        $coupon = $this->couponRepository->createCoupon($data);
        $this->couponCache();
        return $coupon;
    }

    public function updateCoupon($data)
    {
        $coupon = $this->getCouponById($data['id']);
        return $this->couponRepository->updateCoupon($coupon, $data);
    }

    public function deleteCoupon($id)
    {
        $coupon = $this->getCouponById($id);
        $this->couponCache();
        return $this->couponRepository->deleteCoupon($coupon);
    }


    public function changeStatus($id)
    {
        $coupon = $this->couponRepository->getCouponById($id);
        if ($coupon) {
            $coupon->is_active = $coupon->is_active == 1 ? 0 : 1;
            $coupon->save();
            return true;
        }
        return false;
    }

    public function couponCache()
    {
        Cache::forget('coupon_count');

    }
}
