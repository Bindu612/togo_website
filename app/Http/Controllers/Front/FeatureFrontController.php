<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class FeatureFrontController extends Controller
{
    public function showIndex()
    {
        $services = Service::where('status','active')->get();
        return view('front.features',compact('services'));
     
    }

}
