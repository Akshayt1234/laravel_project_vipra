<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:20',
            'msg' => 'required|max:1000',
        ]);

        // Create a new instance of the Contact model
        $contacts = new Contact();
        $contacts->name = $validatedData['name'];
        $contacts->email = $validatedData['email'];
        $contacts->phone = $validatedData['phone'];
        $contacts->msg = $validatedData['msg'];

        // Save the contacts data
        $contacts->save();

        // Redirect the user or return a response
        return redirect('/')->with('success', 'Contact data saved successfully!');
    }
}
