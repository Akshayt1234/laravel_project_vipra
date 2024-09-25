<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
     public function userdashboard()
     {
         return view('userdashboard.userdashboard');
     }
 
     public function user_contact()
     {
         return view('userdashboard.user_contact');
     }
 
     public function user_profile()
     {
         return view('userdashboard.user_profile');
     }

}
