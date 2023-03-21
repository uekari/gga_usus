<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\TimeController;
use App\Http\Controllers\Admin\CarestationController;
use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\Admin\RiskController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('admin.welcome');
});


// schedule
Route::prefix('schedule')->
    middleware('auth:admin')->group(function(){
        Route::get('/', [ScheduleController::class, 'index'])->name('schedule.index');
});
Route::get('client/{client}/schedule', [ScheduleController::class, 'create'])->name('schedule.create');
Route::post('client/{client}/schedule', [ScheduleController::class, 'store'])->name('schedule.store');



// treatment
Route::resource('client/{client}/treatment', TreatmentController::class)
->middleware('auth:admin');

// time
Route::prefix('time')->
    middleware('auth:admin')->group(function(){
        Route::get('/', [TimeController::class, 'index'])->name('time.index');
});
Route::get('schedule/{schedule}/time', [TimeController::class, 'create'])->name('time.create');
Route::post('schedule/{schedule}/time', [TimeController::class, 'store'])->name('time.store');




// risk
Route::prefix('risk')->
    middleware('auth:admin')->group(function(){
        Route::get('/', [RiskController::class, 'index'])->name('risk.index');
});
Route::get('time/{time}/risk', [RiskController::class, 'create'])->name('risk.create');
Route::post('time/{time}/risk', [RiskController::class, 'store'])->name('risk.store');


// user
Route::resource('user', UserController::class)
->middleware('auth:admin');

// client
Route::resource('client', ClientController::class)
->middleware('auth:admin');

// hospital
Route::resource('hospital', HospitalController::class)
->middleware('auth:admin');

// carestation
Route::resource('carestation', CarestationController::class)
->middleware('auth:admin');





Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('dashboard');


Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth:admin')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth:admin', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth:admin', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth:admin')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth:admin');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth:admin')
                ->name('logout');
