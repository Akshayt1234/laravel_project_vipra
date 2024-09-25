<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

class AdminController extends Controller
{
    public function admindashboard()
    {
        return view('admindashboard.admindashboard');
    }

    public function admin_contact(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != ""){
            // where
            $contacts = Contact::where('name', 'LIKE', "%search%")->orWhere('email', 'LIKE', "%$search%")->get();
        }else{
            $contacts = Contact::all();
        }
        $data = compact('contacts', 'search');
        return view('admindashboard.admin_contact')->with($data);

        // $contacts = Contact::all();
        // return view('admindashboard.admin_contact',['contacts' => $contacts]);
    }

    public function admin_profile()
    {
        return view('admindashboard.admin_profile');
    }

    public function admin_users(Request $request)
    {

        $search = $request['search'] ?? "";
        if ($search != ""){
            // where
            $users = User::where('name', 'LIKE', "%search%")->orWhere('email', 'LIKE', "%$search%")->get();
        }else{
            $users = User::all();
        }
        $data = compact('users', 'search');
        return view('admindashboard.admin_users')->with($data);
        // $users = User::all();
        // return view('admindashboard.admin_users',['users' => $users]);
    }

}
