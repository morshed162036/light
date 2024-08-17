<?php

use App\Http\Controllers\backend\AcademicCalenderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HeroSectionController;
use App\Http\Controllers\backend\AchievementController;
use App\Http\Controllers\backend\KeyInformationController;
use App\Http\Controllers\frontend\FormController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index'])->name('home.index');
Route::get('/vision', [FrontendController::class, 'vision'])->name('about.vision');
Route::get('/principale_message', [FrontendController::class, 'message'])->name('about.principle_message');
Route::get('/choose-us', [FrontendController::class, 'choose'])->name('about.choose');
Route::get('/team', [FrontendController::class, 'team'])->name('about.team');
Route::get('/curriculam', [FrontendController::class, 'curriculam'])->name('curriculam');
Route::get('/calender', [FrontendController::class, 'calender'])->name('calender');
Route::get('/campus', [FrontendController::class, 'campus'])->name('campus');
Route::get('/event', [FrontendController::class, 'event'])->name('event');
Route::get('/details/{id}', [FrontendController::class, 'eventDetails'])->name('event.details');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/addmission_procedure', [FrontendController::class, 'addmission_procedure'])->name('addmission_procedure');
Route::get('/school-fees', [FrontendController::class, 'fees'])->name('fees');
Route::get('/how-to-apply', [FrontendController::class, 'how_to_apply'])->name('how_to_apply');
Route::get('/addmission_procedure', [FrontendController::class, 'addmission_procedure'])->name('addmission_procedure');
Route::get('/apply-online', [FrontendController::class, 'applay_online'])->name('applay_online');
Route::get('/online-payment', [FrontendController::class, 'online_payment'])->name('online_payment');

Route::get('/notice', [FrontendController::class, 'notice'])->name('notice');
Route::get('/transport', [FrontendController::class, 'transport'])->name('transport');
Route::get('/cafeteria', [FrontendController::class, 'cafeteria'])->name('cafeteria');
Route::get('/book', [FrontendController::class, 'book'])->name('book');
Route::get('/ielts', [FrontendController::class, 'ielts'])->name('ielts');
Route::get('/summer-camp', [FrontendController::class, 'summer_camp'])->name('summer_camp');
Route::get('/winter-camp', [FrontendController::class, 'winter_camp'])->name('winter_camp');

Route::get('/contuct-us', [FrontendController::class, 'contuct'])->name('contuct');
Route::get('/achivement', [FrontendController::class, 'achivement'])->name('achivement');
Route::get('/polices', [FrontendController::class, 'polices'])->name('polices');
Route::get('/facilities', [FrontendController::class, 'facilities'])->name('facilities');
Route::get('/tour-request', [FrontendController::class, 'tour_request'])->name('tour_request');
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::post('/admission_queries', [FormController::class, 'store'])->name('admission_queries.store');
Route::get('/admission-queries', [FormController::class, 'index'])->name('admission_query');
Route::post('/tour', [FormController::class, 'tour_store'])->name('tour.store');
Route::get('/tour', [FormController::class, 'tour'])->name('tour');

Route::prefix('/admin')->group(function () {
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->name('admin.login');
    Route::group(['middleware' => ['user']], function () {

        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::match(['get', 'post'], 'herosection', [HeroSectionController::class, 'heroSection'])->name('heroSection');
        Route::match(['get', 'post'], 'school-timing', [HeroSectionController::class, 'schoolTiming'])->name('schoolTiming');
        Route::match(['get', 'post'], 'counter', [HeroSectionController::class, 'counter'])->name('counter');
        Route::match(['get', 'post'], 'about-us', [HeroSectionController::class, 'homeAboutUs'])->name('homeAboutUs');
        Route::match(['get', 'post'], 'age-specific/{id?}', [HeroSectionController::class, 'homeAgeSpecific'])->name('homeAgeSpecific');
        Route::match(['get', 'post'], 'achievement/{id?}', [AchievementController::class, 'achievement'])->name('achievement');
        Route::match(['get', 'post'], 'branch/{id?}', [AchievementController::class, 'branch'])->name('branch');
        Route::match(['get', 'post'], 'facilities', [AchievementController::class, 'facility'])->name('facility');
        Route::match(['get', 'post'], 'polices', [AchievementController::class, 'policy'])->name('policy');
        Route::post('policy-upload', [KeyInformationController::class, 'policyUpload'])->name('policy.upload');
        Route::match(['get', 'post'], 'camps/{id?}', [KeyInformationController::class, 'camps'])->name('camps');
        Route::post('camp-upload', [KeyInformationController::class, 'campUpload'])->name('camp.upload');
        Route::match(['get', 'post'], 'event-notice-news/{id?}', [KeyInformationController::class, 'eventNoticeNews'])->name('eventNoticeNews');
        Route::post('event-upload', [KeyInformationController::class, 'eventUpload'])->name('event.upload');
        Route::match(['get', 'post'], 'transport-cafeteria-book/{id?}', [KeyInformationController::class, 'transportCafeteriaBook'])->name('transportCafeteriaBook');
        Route::match(['get', 'post'], 'setting', [HeroSectionController::class, 'setting'])->name('setting');
        Route::match(['get', 'post'], 'slot/{id?}', [FormController::class, 'slot'])->name('slot');
        Route::get('/academic-calenders', [AcademicCalenderController::class, 'index'])->name('academic_calenders');
        Route::get('/academic-calenders/create', [AcademicCalenderController::class, 'create'])->name('academic_calender.create');
        Route::post('/academic-calenders', [AcademicCalenderController::class, 'store'])->name('academic_calender.store');
        Route::get('/academic-calenders/edit{id}', [AcademicCalenderController::class, 'edit'])->name('academic_calender.edit');
        Route::put('/academic-calenders/update{id}', [AcademicCalenderController::class, 'update'])->name('academic_calender.update');
        Route::delete('/academic-calenders/{id}', [AcademicCalenderController::class, 'destroy'])->name('academic_calender.destroy');

        // Route::delete('/academic-calenders/delete{id}', [AcademicCalenderController::class, 'delete'])->name('academic_calender.destroy');
    });
});
