<?php

namespace App\Http\Controllers\Dashboard\Auth\Password;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;
use App\Models\Admin;
use App\Notifications\Dashboard\SendOtpNotify;
use App\Repositories\Auth\PasswordRepository;
use App\Services\Auth\PasswordService;
use Ichtrojan\Otp\Otp;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    protected $passwordService;

    public function __construct(PasswordService $passwordService)
    {
        $this->passwordService = $passwordService;
    }

    public function showEmailForm()
    {
        return view('dashboard.auth.password.email');
    }

    public function sendOtp(ForgotPasswordRequest $request)
    {
        $request->validated();
        $admin=$this->passwordService->sendOtp($request->email);

        if (!$admin) {
            return back()->withErrors(['email' => __('auth.email_not_found')]);
        }
        return redirect()->route('dashboard.password.verify', ['email' => $admin->email])->with('status', __('auth.otp_sent'));
    }

    public function showOtpForm(Request $request)
    {
        return view('dashboard.auth.password.confirm', ['email' => $request->email]);
    }

    public function verifyOtp(ForgotPasswordRequest $request)
    {
        $request->validated();
        $otp = $this->passwordService->verifyOtp($request->email, $request->token);
        if ($otp->status == false) {
            return redirect()->back()->withErrors(['error' => __('auth.invalid_otp')]);
        }

        return redirect()->route('dashboard.password.reset', ['email' => $request->email]);
    }

    public function resendOtp($email)
    {
        $admin = $this->passwordService->sendOtp($email);
        if (!$admin) {
            return back()->withErrors(['email' => __('auth.email_not_found')]);
        }
        return redirect()->back()->with('status', __('auth.otp_sent'));
    }
}
