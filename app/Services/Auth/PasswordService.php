<?php

namespace App\Services\Auth;

use App\Models\Admin;
use App\Notifications\Dashboard\SendOtpNotify;
use App\Repositories\Auth\PasswordRepository;

class PasswordService
{
    protected $passwordRepository;

    public function __construct(PasswordRepository $passwordRepository)
    {
        $this->passwordRepository = $passwordRepository;
    }

    public function sendOtp($email)
    {

        $admin = $this->passwordRepository->getAdminByEmail($email);
        if (!$admin) {
            return false;
        }
        $admin->notify(new SendOtpNotify());
        return $admin;

    }

    public function verifyOtp($email, $token)
    {

        $otp = $this->passwordRepository->verifyOtp($email, $token);
        return $otp;
    }

    public function resetPassword($email, $password)
    {
        return $this->passwordRepository->resetPassword($email, $password);

    }

}
