<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HeroSectionController;
use App\Http\Controllers\backend\AchievementController;
use App\Http\Controllers\backend\KeyInformationController;

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

Route::prefix('/admin')->group(function(){
    Route::match(['get', 'post'], 'login',[AdminController::class,'login'])->name('admin.login');
    Route::group(['middleware'=>['user']],function(){

        Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::match(['get', 'post'], 'herosection',[HeroSectionController::class,'heroSection'])->name('heroSection');
        Route::match(['get', 'post'], 'addmissionprocedure',[AchievementController::class,'addmissionProcedure'])->name('addmissionProcedure');
        Route::match(['get', 'post'], 'school-timing',[HeroSectionController::class,'schoolTiming'])->name('schoolTiming');
        Route::match(['get', 'post'], 'counter',[HeroSectionController::class,'counter'])->name('counter');
        Route::match(['get', 'post'], 'about-us',[HeroSectionController::class,'homeAboutUs'])->name('homeAboutUs');
        Route::match(['get', 'post'], 'age-specific/{id?}',[HeroSectionController::class,'homeAgeSpecific'])->name('homeAgeSpecific');
        Route::match(['get', 'post'], 'achievement/{id?}',[AchievementController::class,'achievement'])->name('achievement');
        Route::match(['get', 'post'], 'grade/{id?}',[AchievementController::class,'grade'])->name('grade');
        Route::match(['get', 'post'], 'gallery/{id?}',[AchievementController::class,'gallery'])->name('adminGallery');
        Route::match(['get', 'post'], 'campus/{id?}',[AchievementController::class,'campus'])->name('campusGallery');
        Route::match(['get', 'post'], 'choose/{id?}',[AchievementController::class,'whyChooseUs'])->name('choose');
        Route::match(['get', 'post'], 'tab/{id?}',[AchievementController::class,'tab'])->name('tab');

        Route::match(['get', 'post'], 'branch/{id?}',[AchievementController::class,'branch'])->name('branch');
        Route::match(['get', 'post'], 'facilities',[AchievementController::class,'facility'])->name('facility');
        Route::match(['get', 'post'], 'polices',[AchievementController::class,'policy'])->name('policy');
        Route::post('policy-upload', [KeyInformationController::class,'policyUpload'])->name('policy.upload');
        Route::match(['get', 'post'], 'schoolfee',[AchievementController::class,'schoolFee'])->name('schoolFee');
        Route::post('school-upload', [AchievementController::class,'feeUpload'])->name('fee.upload');

        Route::match(['get', 'post'], 'online-payment',[AchievementController::class,'onlinePayment'])->name('onlinePayment');
        Route::post('payment-upload', [AchievementController::class,'paymentUpload'])->name('payment.upload');

        Route::match(['get', 'post'], 'camps/{id?}',[KeyInformationController::class,'camps'])->name('camps');
        Route::post('camp-upload', [KeyInformationController::class,'campUpload'])->name('camp.upload');
        Route::match(['get', 'post'], 'event-notice-news/{id?}',[KeyInformationController::class,'eventNoticeNews'])->name('eventNoticeNews');
        Route::post('event-upload', [KeyInformationController::class,'eventUpload'])->name('event.upload');
        Route::match(['get', 'post'], 'transport-cafeteria-book/{id?}',[KeyInformationController::class,'transportCafeteriaBook'])->name('transportCafeteriaBook');
        Route::match(['get', 'post'], 'setting',[HeroSectionController::class,'setting'])->name('setting');

    });

});
