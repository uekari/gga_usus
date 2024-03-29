<?php

use App\Http\Controllers\User\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\Auth\ConfirmablePasswordController;
use App\Http\Controllers\User\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\User\Auth\EmailVerificationPromptController;
use App\Http\Controllers\User\Auth\NewPasswordController;
use App\Http\Controllers\User\Auth\PasswordController;
use App\Http\Controllers\User\Auth\PasswordResetLinkController;
use App\Http\Controllers\User\Auth\RegisteredUserController;
use App\Http\Controllers\User\Auth\VerifyEmailController;
use App\Http\Controllers\User\U_ClientController;
use App\Http\Controllers\User\U_ScheduleController;
use App\Http\Controllers\User\U_DestinationController;
use App\Http\Controllers\User\U_EmergencyController;
use App\Http\Controllers\User\U_MapController;
use App\Http\Controllers\User\U_TreatmentController;
use Illuminate\Support\Facades\Route;


// Route::resource('client', U_ClientController::class);


// client
Route::middleware('auth:users')->group(function () {

    Route::resource('client', U_ClientController::class)
        ->only(['index']);
});

// emergency
Route::middleware('auth:users')->group(function () {

    Route::get('/user/emergency', [U_EmergencyController::class, 'index'])
        ->name('emergency.index');

    Route::resource('emergency', U_EmergencyController::class)
        ->only(['index']);
});

// treatment
Route::resource('treatment', U_TreatmentController::class);

// Route::middleware('auth:users') ->group(function(){
//     Route::get('/user/treatment', [U_TreatmentController::class, 'index'])
//     ->name('treatment.index');
//     Route::resource('treatment', U_TreatmentController::class)
//     ->only(['index']);
//     Route::get('client/{client}/treatment', [U_ClientController::class, 'show'])
//     ->name('client.show');
// });




// schedule
Route::middleware('auth:users')->group(function () {

    Route::resource('schedule', U_ScheduleController::class)
        ->only(['show', 'index']);

    Route::resource('map', U_MapController::class)
        ->only(['show', 'index']);

    Route::get('destination/{destination}/risk', [U_DestinationController::class, 'show'])
        ->name('destination.show');
});



Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth:users')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
