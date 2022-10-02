<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterviewNameListController;
use App\Http\Controllers\OverseasAgentController;
use App\Http\Controllers\PreInterviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('country', CountryController::class);
    Route::resource('overseas_agent', OverseasAgentController::class);
    Route::resource('demand', DemandController::class);
    Route::resource('pre_intervies', PreInterviewController::class);
    Route::resource('interview_name_list', InterviewNameListController::class);
    Route::get('interview_name_list_details/{id}', [InterviewNameListController::class, 'interviewNameListDetails'])->name('interview_name_list_details');
    Route::get('interview_name_list_import/{id}', [InterviewNameListController::class, 'interviewNameListImport'])->name('interview_name_list_import');
});
