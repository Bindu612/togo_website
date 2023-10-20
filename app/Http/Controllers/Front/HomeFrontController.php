<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
class HomeFrontController extends Controller
{
    public function showIndex()
    {
        $banners = Banner::where('status','active')->get();
        return view('front.home',compact('banners'));
    }
}
