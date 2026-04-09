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
        return view('dashboard.auth.password.reset', compact('email'));
    }

    public function resetPassword(ResetPasswordRequest $request){

        $request->validated();

           $admin = $this->PasswordService->resetPassword($request->email, $request->password);
            if (!$admin) {
                return back()->withErrors(['email' => __('auth.email_not_found')]);
            }
            return redirect()->route('dashboard.login')->with('status', __('auth.password_reset_success'));
    }
}
