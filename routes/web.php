<?php

use App\Http\Controllers\SurveyController;
use App\Http\Controllers\SurveyerController;
use App\Http\Controllers\SurveyerDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['surveyer'])->group(function () {
    Route::get('/surveyer/dashboard', [SurveyerDashboardController::class, 'index'])->name('surveyer.dashboard');
    Route::post('/surveyer/logout', [SurveyerDashboardController::class, 'logout'])->name('surveyer.logout');
    Route::get('/surveyer/survey/{id}', [SurveyerDashboardController::class, 'surveyDetails'])->name('surveyer.survey.details');
    Route::post('/surveyer/survey/{id}/submit-amount', [SurveyerDashboardController::class, 'submitAmount'])->name('surveyer.submit_amount'); // Include the survey id
    Route::post('/surveyer/survey/{id}/upload-client-file', [SurveyerDashboardController::class, 'uploadClientFile'])->name('surveyer.upload_client_file'); // Include the survey id
    Route::post('surveyer/survey/{survey}/complete-module/{module}', [SurveyerDashboardController::class, 'completeModule'])->name('surveyer.completeModule');

});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard',            [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/pending-approvals', [DashboardController::class, 'pendingApprovals'])->name('pending_approvals');
    Route::get('/dashboard/view-file/{id}', [DashboardController::class, 'viewFile'])->name('viewFile');

    Route::get('/dashboard/approve/{id}', [DashboardController::class, 'approve'])->name('approve');
    Route::get('/dashboard/reject/{id}', [DashboardController::class, 'reject'])->name('reject');

    Route::get('/category/add',         [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/new',        [CategoryController::class, 'create'])->name('category.new');
    Route::get('/category/manage',      [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}',   [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category/{id}/files', [CategoryController::class, 'showFiles'])->name('category.files');


    Route::resource('surveyer', SurveyerController::class);
    Route::resource('survey', SurveyController::class);

});


