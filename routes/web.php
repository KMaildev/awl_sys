<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\OverseasAgentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('country', CountryController::class);
    Route::resource('overseas_agent', OverseasAgentController::class);
});