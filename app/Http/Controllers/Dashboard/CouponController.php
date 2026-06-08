<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Services\Dashboard\CouponService;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $couponService;

    public function __construct(CouponService $couponService)
    {
        $this->couponService = $couponService;

    }


    public function index()
    {
        return view('dashboard.coupons.index');
    }

    public function getAllCoupons()
    {
        return $this->couponService->getAllCoupons();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CouponRequest $request)
    {
        $data = $request->except('_token');
        $coupon = $this->couponService->createCoupon($data);
        if (!$coupon) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.coupons.index')->with('success', __('dashboard.coupon_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coupon = $this->couponService->getCouponById($id);
        return view('dashboard.coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CouponRequest $request, string $id)
    {
        $data = $request->except('_token');
        $coupon = $this->couponService->updateCoupon($data);
        if (!$coupon) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.coupons.index')->with('success', __('dashboard.coupon_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coupon = $this->couponService->deleteCoupon($id);
        if (!$coupon) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.coupons.index')->with('success', __('dashboard.coupon_deleted'));
    }

    public function changeStatus(string $id)
    {
        $coupon = $this->couponService->changeStatus($id);
        if (!$coupon) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.coupons.index')->with('success', __('dashboard.coupon_status_changed'));

    }
}
