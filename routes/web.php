<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\ContactUsListController;
use App\Http\Controllers\Admin\AboutUsController;

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

Route::resource('services', ServiceController::class);


Route::resource('contact-us', ContactUsListController::class);
 
Route::resource('about-us', AboutUsController::class);

Route::controller(SiteSettingController::class)->group(function () {
    Route::get('site-setting', 'index')->name('site-setting');
    Route::post('site-setting', 'store')->name('store.site-setting');


});

});



