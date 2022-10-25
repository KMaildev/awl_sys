<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\ContractNameListController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\EmployerInterviewController;
use App\Http\Controllers\EmployerInterviewNameListController;
use App\Http\Controllers\FailedController;
use App\Http\Controllers\GovernmentProcessContractController;
use App\Http\Controllers\GovernmentProcessSendingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterviewNameListController;
use App\Http\Controllers\NameListController;
use App\Http\Controllers\OverseasAgentController;
use App\Http\Controllers\PreInterviewController;
use App\Http\Controllers\RejectController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchNameListController;
use App\Http\Controllers\SendingController;
use App\Http\Controllers\SendingNameListController;
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
    Route::get('interview_name_list_export/{id}', [InterviewNameListController::class, 'interviewNameListExport'])->name('interview_name_list_export');


    Route::resource('employer_interview_name_list', EmployerInterviewNameListController::class);
    Route::get('all_employer_interview_name_list/{id}', [EmployerInterviewNameListController::class, 'employerInterviewNameListDetails'])->name('all_employer_interview_name_list');

    Route::resource('failed', FailedController::class);
    Route::get('thai_failed_index', [FailedController::class, 'thaiFailedIndex'])->name('thai_failed_index');
    Route::resource('government_process_contract', GovernmentProcessContractController::class);
    Route::resource('contract', ContractController::class);
    Route::resource('contract_name_list', ContractNameListController::class);
    Route::get('contract_data_ajax/{id}', [ContractNameListController::class, 'contractDataAjax'])->name('contract_data_ajax');

    Route::resource('government_process_sending', GovernmentProcessSendingController::class);

    Route::resource('sending', SendingController::class);
    Route::resource('sending_name_list', SendingNameListController::class);
    Route::resource('search_name_list', SearchNameListController::class);




    Route::get('update_remark', [NameListController::class, 'updateRemark'])->name('update_remark');
    Route::get('update_note', [NameListController::class, 'updateNote'])->name('update_note');
    Route::get('update_cancel', [NameListController::class, 'updateFailCancel'])->name('update_cancel');
    Route::get('update_medical_fail', [NameListController::class, 'updateMedicalFail'])->name('update_medical_fail');


    // No Using 
    Route::get('all_pre_interview_name_list_export/{id}', [InterviewNameListController::class, 'allPreInterviewNameListExport'])->name('all_pre_interview_name_list_export');
    Route::get('employer_interview_name_list_export/{id}', [InterviewNameListController::class, 'employerInterviewNameListExport'])->name('employer_interview_name_list_export');
    Route::get('employer_interview_name_list_details/{id}', [InterviewNameListController::class, 'employerInterviewNameListDetails'])->name('employer_interview_name_list_details');
    Route::get('update_name_list_employer_interview', [InterviewNameListController::class, 'updateNameListEmployerInterview'])->name('update_name_list_employer_interview');


    Route::resource('employer_interview', EmployerInterviewController::class);
    Route::resource('reject', RejectController::class);
    Route::view('/file_manager', 'file_manager.index')->name('file_manager.index');
});
