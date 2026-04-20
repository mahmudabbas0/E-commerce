<?php

namespace App\Http\Controllers\Dashboard\Auth\Password;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\Admin;
use App\Services\Auth\PasswordService;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    protected $PasswordService;
    public function __construct(passwordService $passwordService)
    {
        $this->PasswordService = $passwordService;
    }
    public function showResetForm($email){
        if (session('verified_otp_email') !== $email) {
            return redirect()->route('dashboard.login')->withErrors(['email' => __('auth.invalid_otp_session')]);
        }
        return view('dashboard.auth.password.reset', compact('email'));
    }

    public function resetPassword(ResetPasswordRequest $request){

        $request->validated();

        if (session('verified_otp_email') !== $request->email) {
            return redirect()->route('dashboard.login')->withErrors(['email' => __('auth.invalid_otp_session')]);
        }

        $admin = $this->PasswordService->resetPassword($request->email, $request->password);
        if (!$admin) {
            return back()->withErrors(['email' => __('auth.email_not_found')]);
        }
        
        session()->forget('verified_otp_email');
        
        return redirect()->route('dashboard.login')->with('status', __('auth.password_reset_success'));
    }
}
