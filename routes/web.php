<?php

use App\Http\Controllers\WifiAccessController;
use App\Http\Controllers\WifiUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/wifi/access', [WifiUserController::class, 'show']);
Route::view('/wifi/welcome', 'portal.welcome-wifi')->name('wifi-welcome');
