<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\Auth\Password\ForgotPasswordController;
use App\Http\Controllers\Dashboard\Auth\Password\ResetPasswordController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\WelcomeController;
use App\Http\Controllers\Dashboard\WorldController;
use Illuminate\Support\Facades\Route;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/dashboard',
        'as' => 'dashboard.',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
#################### Authentication Routes #################
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    #################### Reset password Routes #################
    Route::group(['prefix' => 'password', 'as' => 'password.'

    ], function () {

        Route::controller(ForgotPasswordController::class)->group(function () {
            Route::get('email', 'showEmailForm')->name('email');
            Route::post('email', 'sendOtp')->name('email.post');
            Route::get('verify/{email}', 'showOtpForm')->name('verify');
            Route::post('/verify', 'verifyOtp')->name('verify.post');
            Route::get('resend/{email}', 'resendOtp')->name('resend');

        });

        Route::controller(ResetPasswordController::class)->group(function () {
            Route::get('reset/{email}', 'showResetForm')->name('reset');
            Route::post('reset', 'resetPassword')->name('reset.post');
        });

    });


    #################### Protected Routes #################

    Route::group(['middleware' => 'auth:admin'], function () {

        #################### Welcome Routes #################

        Route::get('welcome', [WelcomeController::class, 'index'])->name('welcome');


        #################### Roles Routes #################

        Route::resource('roles', RoleController::class)->middleware(['can:roles']);

        #################### Admin Routes #################

        Route::group(['middleware' => 'can:admins'], function () {

            Route::resource('admins', AdminController::class);
            Route::get('admins/{id}/status', [AdminController::class, 'changeStatus'])->name('admins.status');
        });

        #################### World Routes #################
        Route::group(['middleware' => 'can:settings'], function () {
            Route::get('/countries', [WorldController::class, 'getAllCountries'])->name('countries');
            Route::get('/countries/{id}/status', [WorldController::class, 'changeStatus'])->name('countries.status');
            Route::get('/governorates/{id}/status', [WorldController::class, 'changeGovernorateStatus'])->name('governorates.status');
            Route::get('/governorates/{id}', [WorldController::class, 'getAllGovernorates'])->name('governorates');
            Route::get('/cities/{id}', [WorldController::class, 'getAllCities'])->name('cities');

            Route::post('/shipping-charges/update', [WorldController::class, 'updateSingleShippingCharge'])->name('shipping-charges.update-single');
        });

    });
});



