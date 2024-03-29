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
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\CaremanagerController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\Admin\DestinationTreatmentController;
use App\Http\Controllers\Admin\EmergencyhospitalController;
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
    return view('welcome');
});


// schedule
Route::prefix('schedule')->
    middleware('auth:admin')->group(function(){
        Route::get('/', [ScheduleController::class, 'index'])->name('schedule.index');
});

Route::get('client/{client}/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::post('client/{client}/schedule', [ScheduleController::class, 'store'])->name('schedule.store');
Route::get('client/{client}/schedule', [ScheduleController::class, 'edit'])->name('schedule.edit');
Route::put('client/{client}/schedule', [ScheduleController::class, 'update'])->name('schedule.update');



// treatment
Route::resource('client/{client}/treatment', TreatmentController::class) ->only(['index','show','create','store']);
Route::get('treatment/{treatment}/edit', [TreatmentController::class, 'edit'])->name('treatment.edit');
Route::put('treatment/{treatment}', [TreatmentController::class, 'update'])->name('treatment.update');
Route::delete('treatment/{treatment}', [TreatmentController::class, 'destroy'])->name('treatment.destroy');




// destination
Route::get('schedule/{schedule}/destination', [DestinationController::class, 'index'])->name('destination.index')->middleware('auth:admin');
Route::get('schedule/{schedule}/destination/create', [DestinationController::class, 'create'])->name('destination.create')->middleware('auth:admin');
Route::post('schedule/{schedule}/destination', [DestinationController::class, 'store'])->name('destination.store')->middleware('auth:admin');

Route::get('destination/{destination}', [DestinationController::class, 'show'])->name('destination.show')->middleware('auth:admin');
Route::get('destination/{destination}/edit', [DestinationController::class, 'edit'])->name('destination.edit')->middleware('auth:admin');
Route::put('destination/{destination}', [DestinationController::class, 'update'])->name('destination.update');

Route::delete('destination/{destination}/{img}', [DestinationController::class, 'deleteimg'])->name('destination.deleteimg');



//Emergencyhospital
Route::resource('schedule/{schedule}/emergencyhospital', EmergencyhospitalController::class)
->middleware('auth:admin');



//DestinationTreatment
Route::resource('schedule/{schedule}/destination/{destination}/destinationtreatment', DestinationTreatmentController::class)
->middleware('auth:admin');



// risk
// Route::prefix('risk')->
//     middleware('auth:admin')->group(function(){
//         Route::get('/', [RiskController::class, 'index'])->name('risk.index');
// });
// Route::get('destination/{destination}/risk', [RiskController::class, 'create'])->name('risk.create');
// Route::post('destination/{destination}/risk', [RiskController::class, 'store'])->name('risk.store');


// user
Route::resource('user', UserController::class)
->middleware('auth:admin');

// client
Route::resource('client', ClientController::class)
->middleware('auth:admin');

// doctor
Route::resource('doctor', DoctorController::class)
->middleware('auth:admin');

// caremanager
Route::resource('caremanager', CaremanagerController::class)
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
