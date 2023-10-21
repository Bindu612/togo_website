<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Advantage;
use App\Models\Challenge;
class HomeFrontController extends Controller
{
    public function showIndex()
  
    {
        $services = Service::where('status','active')->get();
        $banners = Banner::where('status','active')->get();
        $advantages = Advantage::where('status','active')->get();
        $challenges = Challenge::where('status','active')->get();
        return view('front.home',compact('banners','services','advantages','challenges'));

        
       
    }
 
   

}
