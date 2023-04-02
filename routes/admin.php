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
use App\Http\Controllers\Admin\TimeController;
use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\Admin\TimeTreatmentController;
// use App\Http\Controllers\Admin\RiskController;
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

// Route::prefix('treatment')->
//     middleware('auth:admin')->group(function(){
//         Route::get('/', [TreatmentController::class, 'index'])->name('treatment.index');
// });
// Route::get('client/{client}/treatment', [TreatmentController::class, 'create'])->name('treatment.create');
// Route::post('client/{client}/treatment', [TreatmentController::class, 'store'])->name('treatment.store');
// Route::post('client/{client}/treatment', [TreatmentController::class, 'store'])->name('treatment.show');



// time
   Route::get('schedule/{schedule}/time', [TimeController::class, 'index'])->name('time.index')->middleware('auth:admin');
   Route::get('schedule/{schedule}/time/create', [TimeController::class, 'create'])->name('time.create')->middleware('auth:admin');
   Route::post('schedule/{schedule}/time', [TimeController::class, 'store'])->name('time.store')->middleware('auth:admin');

   Route::get('time/{time}', [TimeController::class, 'show'])->name('time.show')->middleware('auth:admin');
   Route::get('time/{time}/edit', [TimeController::class, 'edit'])->name('time.edit');
   Route::put('time/{time}', [TimeController::class, 'update'])->name('time.update');


//TimeTreatment
Route::resource('schedule/{schedule}/time/{time}/timetreatment', TimeTreatmentController::class)
->middleware('auth:admin');



// risk
// Route::prefix('risk')->
//     middleware('auth:admin')->group(function(){
//         Route::get('/', [RiskController::class, 'index'])->name('risk.index');
// });
// Route::get('time/{time}/risk', [RiskController::class, 'create'])->name('risk.create');
// Route::post('time/{time}/risk', [RiskController::class, 'store'])->name('risk.store');


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
