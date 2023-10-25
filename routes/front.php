<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeFrontController;
use App\Http\Controllers\Front\FeatureFrontController;
use App\Http\Controllers\Front\AboutUsFrontController;
use App\Http\Controllers\Front\ContactUsFrontController;
/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeFrontController::class)->group(function () {
    Route::get('/', 'showIndex')->name('front.home');
});

Route::controller(FeatureFrontController::class)->group(function () {
    Route::get('/features', 'showIndex')->name('front.features');
});

Route::controller(AboutUsFrontController::class)->group(function () {
    Route::get('/about-us', 'showIndex')->name('front.aboutus');
});

 Route::controller(ContactUsFrontController::class)->group(function () {
    Route::get('/contact-us', 'showIndex')->name('front.contactus');
    Route::post('/contact-us', 'store')->name('store.front.contactus');

 });
//Route::get('/contact-us', [ContactUsFrontController::class, 'showIndex'])->name('front.contactus');
//Route::post('/contact-us', [ContactUsFrontController::class, 'submit'])->name('front.contactus');

// Route::get('/', function () {
//     return view('front.home');
// });




