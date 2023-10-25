<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
class ContactUsFrontController extends Controller
{
    public function showIndex()
  
    {
      
        $contactuss = ContactUs::all();      
        return view('front.contactus', ['contactuss' => $contactuss]); 
     
    }

}
