<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WifiAccessController;
use App\Http\Controllers\WifiUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
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

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class)->names('users');
    Route::get('/export-users', [UserController::class, 'csv'])->name('export.users.csv');
});



