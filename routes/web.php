<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CaremanagerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::resource('client', ClientController::class);
// Route::resource('schedule', ScheduleController::class);
// Route::resource('hospital', DoctorController::class);
// Route::resource('carestation', CaremanagerController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users', 'verified'])->name('dashboard');

// Route::get('/', [TimeController::class, 'index'])->name('admin.destination.index');
// Route::get('/create', [TimeController::class, 'create'])->name('admin.destination.create');
// Route::post('/store', [TimeController::class, 'store'])->name('admin.destination.store');

// Route::middleware('auth:users')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
