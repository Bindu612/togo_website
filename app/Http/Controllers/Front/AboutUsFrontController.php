<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsFrontController extends Controller
{
    public function showIndex()
    {
       
        $aboutuss = AboutUs::all();      
        return view('front.aboutus', ['aboutuss' => $aboutuss]); 
    }
 
}
