<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\AccountSettingController;
use App\Http\Controllers\Admin\ContactUsListController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ChallengeController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\ContactListController;
use App\Http\Controllers\Admin\ContactTableController;
use App\Http\Controllers\Admin\NoteApplicationController;

use App\Http\Controllers\Admin\UserController;




use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->as('admin.')->group(function () {

    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
Route::resource('banner',BannerController::class);
Route::resource('advantage',AdvantageController::class);
Route::resource('challenge', ChallengeController::class);
Route::resource('faqs', FaqController::class);
Route::resource('account-setting', AccountSettingController::class);
Route::resource('calendar', CalendarController::class);
Route::resource('events', EventController::class);
Route::resource('notes', NoteController::class);
Route::resource('contact-lists', ContactListController::class);
Route::resource('contact-tables', ContactTableController::class);
Route::resource('note-applications', NoteApplicationController::class);

Route::controller(UserController::class)->group(function () {
    Route::get('user', 'showIndex')->name('admin.login');
});




Route::resource('services', ServiceController::class);


Route::resource('contact-us', ContactUsListController::class);
 
Route::resource('about-us', AboutUsController::class);

Route::controller(SiteSettingController::class)->group(function () {
    Route::get('site-setting', 'index')->name('site-setting');
    Route::post('site-setting', 'store')->name('store.site-setting');


});

});



