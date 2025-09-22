<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UnitController;
use Laravel\Fortify\Features;

//////naman/////
Route::get('/api/unit-offices', [UnitController::class, 'getOffices'])->name('api.unit.offices');
Route::get('/api/unit-office-divisions', [UnitController::class, 'getDivisions'])->name('api.unitoffice.divisions');
Route::get('/api/division-designations', [UnitController::class, 'getDesignations'])->name('api.division.designations');



Route::post('/qrps/bulk-submit', [App\Http\Controllers\QrpFormController::class, 'bulkSubmit'])->name('qrps.bulkSubmit');

Route::get('/php-check', function () {
    phpinfo();
});
Route::get('/php-info', function() {
    dd([
        'upload_max_filesize' => ini_get('upload_max_filesize'),
        'post_max_size' => ini_get('post_max_size'),
        'max_file_uploads' => ini_get('max_file_uploads'),
    ]);
});


 Route::get('upload-csv', [TestController::class, 'uploadcsv'])->name('uploadcsv');
 Route::post('upload-csv', [TestController::class, 'importCsv'])->name('importCsv');
 Route::get('/profiles/search', [App\Http\Controllers\ProfileController::class, 'search'])->name('profiles.search');


 Route::get('/', [HomeController::class, 'index'])->name('home');
 Route::get('promotional-videos', [HomeController::class, 'videos'])->name('videos');
 Route::get('brouches', [HomeController::class, 'brouches'])->name('brouches');
 Route::get('pressrelease', [HomeController::class, 'pressrelease'])->name('pressrelease');
 Route::get('tweets', [HomeController::class, 'tweets'])->name('tweets');
 Route::get('orms', [HomeController::class, 'orms'])->name('orms');
 Route::get('achivements', [HomeController::class, 'achivements'])->name('achivements');


 Route::get('message', [HomeController::class, 'message'])->name('message');
 Route::get('role-ir', [HomeController::class, 'roleir'])->name('role-ir');
 Route::get('structure', [HomeController::class, 'structure'])->name('structure');
 Route::get('contact-us', [HomeController::class, 'contact'])->name('contact-us');
 Route::post('contact-submit', [HomeController::class, 'contact'])->name('contact.submit');

// Route::middleware(['role:admin'])->group(function () {
    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
        Route::post('/switch-role', [App\Http\Controllers\Admin\RoleController::class, 'switchRole'])
            ->name('switch.role')
            ->middleware('auth');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::resource('roles', RoleController::class);
        Route::resource('orm-data', App\Http\Controllers\OrmController::class);

        Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class)->except(['create', 'show']);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->except(['create', 'show']);
        Route::resource('personal-performa', \App\Http\Controllers\PersonalPerformaController::class);
        Route::get('personal-performa-excel', [App\Http\Controllers\PersonalPerformaController::class, 'exportExcel'])->name('personal-performa.export.excel');

        Route::resource('personal-performa-generation', \App\Http\Controllers\PersonalPerformaGenerationController::class);

        Route::resource('qrp', \App\Http\Controllers\QrpFormController::class);

        Route::resource('qrp-generation', \App\Http\Controllers\QrpGenerationController::class);
        Route::get('qrp-generation-index/{id}', [\App\Http\Controllers\QrpGenerationController::class, 'qrpIndex'])->name('qrp.qrpIndex');
        Route::get('/qrp-download/{id}', [\App\Http\Controllers\QrpFormController::class, 'downloadPdf'])->name('qrp.download');
        Route::put('/forms/{id}/status', [\App\Http\Controllers\QrpFormController::class, 'updateStatus'])->name('forms.updateStatus');
        Route::put('/PPforms/{id}/status', [\App\Http\Controllers\PersonalPerformaGenerationController::class, 'updateStatus'])->name('PPforms.updateStatus');


    });
// });


Route::get('/pdf-view/{filename}', function ($filename) {
    $path = public_path('assets/pdfs/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
})->name('pdf.view');
