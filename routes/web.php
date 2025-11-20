<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\User\UserTrainingController;
use App\Http\Controllers\User\UserOrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CertificateController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kelas', function () {
    return view('Kelas.kelas');
});
/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::post('/update-password', [LoginRegisterController::class, 'updatePassword'])
    ->name('password.update');


/*
|--------------------------------------------------------------------------
| USER TRAINING ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::get('/user/{user}/training', [UserTrainingController::class, 'index'])
        ->name('user.training.index');

    Route::get('/user/{user}/training/{training}', [UserTrainingController::class, 'show'])
        ->name('user.training.show');
});


/*
|--------------------------------------------------------------------------
| USER ORDER ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // List semua order user
    Route::get('/user/{user}/order', [UserOrderController::class, 'index'])
        ->name('user.order.index');

    // Halaman detail order
    Route::get('/user/{user}/order/{order}', [UserOrderController::class, 'show'])
        ->name('user.order.show');

    // Store order ketika user pesan training
    Route::post('/user/{user}/order/{training}', [UserOrderController::class, 'store'])
        ->name('user.order.store');

        // 🔥 Download module
    Route::get('/user/{user}/training/{training}/download-module', 
        [UserTrainingController::class, 'downloadModule'])
        ->name('user.training.download.module');
});
Route::post('/user/{user}/order/{order}/upload-payment', [UserOrderController::class, 'uploadPayment'])
    ->name('user.order.uploadPayment');



Route::middleware(['auth'])->group(function () {

    Route::get('/user/{user}', [UserController::class, 'show'])
        ->name('user.show');

    // Laporan
    Route::get('/user/{user}/laporan', [ReportController::class, 'index'])
        ->name('user.laporan.index');

    Route::get('/user/{user}/laporan/create', [ReportController::class, 'create'])
        ->name('user.laporan.create');

    Route::post('/user/{user}/laporan', [ReportController::class, 'store'])
        ->name('user.laporan.store');

    Route::get('/user/{user}/laporan/{report}', [ReportController::class, 'show'])
        ->name('user.laporan.show');

    // Download Certificate (hanya jika approved)
    Route::get('/user/{user}/certificate/{certificate}/download', [CertificateController::class, 'download'])
        ->name('user.certificate.download');
});

