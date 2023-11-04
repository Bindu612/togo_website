<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showIndex()
    {
       
        $users = User::all(); 
        return view('admin.pages.account_setting.index', compact('users'));
    }
 
}
