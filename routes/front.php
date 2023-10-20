<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeFrontController;
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

// Route::get('/', function () {
//     return view('front.home');
// });
Route::view('/about-us', 'front.aboutus');
Route::view('/features', 'front.features');
Route::view('/contact-us', 'front.contactus');

