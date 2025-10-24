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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BrochureController;
use App\Http\Controllers\PromotionalVideoController;
use App\Http\Controllers\InternationalFormController;
use App\Http\Controllers\MeetingCalendarController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MinisterMessageController;
use App\Http\Controllers\PressReleaseController;
use App\Http\Controllers\TourReportController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\Backend\UnitOfficeController;
use Laravel\Fortify\Features;

Route::get('/tour-reports/importpview', [TourReportController::class, 'view']);
Route::post('/tour-reports/import', [TourReportController::class, 'import'])->name('tour-reports.import');


Route::get('/qrp/download-excel', [\App\Http\Controllers\QrpGenerationController::class, 'downloadExcel'])
->name('qrp.downloadExcel');


Route::get('/master-sheet/export/{id}/{format}', [\App\Http\Controllers\MasterSheetController::class, 'export'])
    ->name('master-sheet.export');


////  TEST CONTROLLER ////
Route::get('upload-csv', [TestController::class, 'uploadcsv'])->name('uploadcsv');
Route::post('upload-csv', [TestController::class, 'importCsv'])->name('importCsv');
////  Officers list update ////
Route::post('/qrps/bulk-submit', [App\Http\Controllers\QrpFormController::class, 'bulkSubmit'])->name('qrps.bulkSubmit');
////  Dropdowns ////
Route::get('/api/unit-offices', [UnitController::class, 'getOffices'])->name('api.unit.offices');
Route::get('/api/unit-office-divisions', [UnitController::class, 'getDivisions'])->name('api.unitoffice.divisions');
Route::get('/api/division-designations', [UnitController::class, 'getDesignations'])->name('api.division.designations');


////  PROFILE GENERATION ROUTES ////
Route::get('/profiles/search', [App\Http\Controllers\ProfileController::class, 'search'])->name('profiles.search');
Route::get('/profiles/complete', [App\Http\Controllers\ProfileController::class, 'profileForm'])->name('profile.complete');
Route::PUT('/profiles/update', [App\Http\Controllers\ProfileController::class, 'updateForm'])->name('profile.update');


////  FRONTEND ////
 Route::get('/', [HomeController::class, 'index'])->name('home');
 Route::get('promotional-videos', [HomeController::class, 'videos'])->name('videos');
 Route::get('brouches', [HomeController::class, 'brouches'])->name('brouches');
 Route::get('pressrelease', [HomeController::class, 'pressrelease'])->name('pressrelease');
 Route::get('social-media', [HomeController::class, 'tweets'])->name('tweets');
 Route::get('orms', [HomeController::class, 'orms'])->name('orms');
 Route::get('achivements', [HomeController::class, 'achivements'])->name('achivements');
 Route::get('internation-forums/{id}', [HomeController::class, 'internationForums'])->name('internationForums');
 Route::get('message/{id}', [HomeController::class, 'message'])->name('message');
 Route::get('role-ir', [HomeController::class, 'roleir'])->name('role-ir');
 Route::get('structure', [HomeController::class, 'structure'])->name('structure');
 Route::get('contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.submit');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

////  BACKEND ////

// Route::middleware(['role:admin'])->group(function () {
    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
        // ROLE //
        Route::resource('roles', RoleController::class);
        Route::post('/switch-role', [RoleController::class, 'switchRole'])->name('switch.role')->middleware('auth');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

        Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class)->except(['create', 'show']);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->except(['create', 'show']);


        Route::get('/tour-reports', [TourReportController::class, 'index'])
            ->name('tour-reports.index');

        // Show form to create a new tour report
        Route::get('/tour-reports/create', [TourReportController::class, 'create'])
            ->name('tour-reports.create');

        // Store the submitted tour report
        Route::post('/tour-reports', [TourReportController::class, 'store'])
            ->name('tour-reports.store');
        Route::get('/get-meeting-dates/{id}', [TourReportController::class, 'getMeetingDates']);


        // ROLE //
        Route::resource('qrp', \App\Http\Controllers\QrpFormController::class);
        Route::get('/qrp-download/{id}', [\App\Http\Controllers\QrpFormController::class, 'downloadPdf'])->name('qrp.download');
        Route::put('/forms/{id}/status', [\App\Http\Controllers\QrpFormController::class, 'updateStatus'])->name('forms.updateStatus');
        Route::resource('qrp-generation', \App\Http\Controllers\QrpGenerationController::class);
        Route::get('qrp-generation-index/{id}', [\App\Http\Controllers\QrpGenerationController::class, 'qrpIndex'])->name('qrp.qrpIndex');
        Route::post('/qrp-generation/bulk-update-status', [\App\Http\Controllers\QrpGenerationController::class, 'bulkUpdateStatus'])->name('qrp-generation.bulk-update-status');



        Route::get('/tour-tracker', [\App\Http\Controllers\TourTrackerController::class, 'index'])->name('tourTracker.index');
        Route::post('/qrp-generation/update-field', [App\Http\Controllers\TourTrackerController::class, 'updateField'])
            ->name('qrp-generation.update-field');


        Route::get('/master-sheet', [\App\Http\Controllers\MasterSheetController::class, 'index'])->name('masterSheet.index');
        Route::post('/qrp-generation/update-expenditure', [\App\Http\Controllers\MasterSheetController::class, 'updateExpenditure'])
    ->name('qrp-generation.update-expenditure');

        Route::get('qrp-generation/export/{id}/{format}', [\App\Http\Controllers\MasterSheetController::class, 'export'])->name('qrp-generation.export');




        Route::resource('personal-performa', \App\Http\Controllers\PersonalPerformaController::class);
        Route::get('personal-performa-excel', [App\Http\Controllers\PersonalPerformaController::class, 'exportExcel'])->name('personal-performa.export.excel');
        Route::resource('personal-performa-generation', \App\Http\Controllers\PersonalPerformaGenerationController::class);
        Route::put('/PPforms/{id}/status', [\App\Http\Controllers\PersonalPerformaGenerationController::class, 'updateStatus'])->name('PPforms.updateStatus');
        Route::get('/personal-performa/{id}/download', [\App\Http\Controllers\PersonalPerformaGenerationController::class, 'downloadPdf'])->name('personal-performa.download');

        ////  CRM  ////
        Route::resource('orm-data', App\Http\Controllers\OrmController::class);
        Route::put('/ormupdate/{id}', [App\Http\Controllers\OrmController::class, 'update'])->name('ormupdate.update');

        Route::resource('brochures', BrochureController::class);
        Route::resource('promotional_videos', PromotionalVideoController::class);
        Route::resource('international_forms', InternationalFormController::class);
        Route::resource('meeting-calendars', MeetingCalendarController::class);
        Route::resource('sliders', SliderController::class);
        Route::resource('minister-messages', MinisterMessageController::class);
        Route::resource('press-releases', PressReleaseController::class);
        Route::resource('achievements', AchievementController::class);
        Route::resource('engagements', App\Http\Controllers\EngagementController::class);

        Route::resource('ambitions', App\Http\Controllers\AmbitionController::class);



        Route::resource('countries', CountryController::class);
            Route::resource('site_settings', App\Http\Controllers\Admin\SiteSettingController::class);
        Route::resource('agencies', AgencyController::class);
        Route::prefix('admin')->name('admin.')->group(function () {
            Route::resource('units', \App\Http\Controllers\Backend\UnitController::class);
            Route::resource('unit-offices', UnitOfficeController::class);
            Route::resource('social_media', App\Http\Controllers\Admin\SocialMediaController::class);
            Route::resource('site_settings', App\Http\Controllers\Admin\SiteSettingController::class);
        });


    });
// });


Route::get('/pdf-view/{filename}', function ($filename) {
    $path = public_path('assets/pdfs/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
})->name('pdf.view');
