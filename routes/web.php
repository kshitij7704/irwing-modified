<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Laravel\Fortify\Features;

 Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::middleware(['role:admin'])->group(function () {
    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
        Route::post('/switch-role', [App\Http\Controllers\Admin\RoleController::class, 'switchRole'])
            ->name('switch.role')
            ->middleware('auth');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class)->except(['create', 'show']);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->except(['create', 'show']);
        Route::resource('personal-performa', \App\Http\Controllers\PersonalPerformaController::class);
        Route::resource('qrp', \App\Http\Controllers\OrpController::class);

    });
// });


Route::get('/pdf-view/{filename}', function ($filename) {
    $path = public_path('assets/pdfs/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
})->name('pdf.view');
