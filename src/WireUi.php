<?php

namespace Foxws\WireUi;

use Foxws\WireUi\Auth\Controllers\LoginController;
use Foxws\WireUi\Auth\Controllers\LogoutController;
use Foxws\WireUi\Auth\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

class WireUi
{
    public static function routes(): void
    {
        Route::name('auth.')->group(function () {
            Route::get('/login', LoginController::class)->middleware('guest')->name('login');
            Route::get('/register', RegisterController::class)->middleware('guest')->name('register');
            Route::post('/logout', LogoutController::class)->name('logout');
        });
    }
}
