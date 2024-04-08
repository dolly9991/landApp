<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        // Handle form submission logic here
        // $request->input('field_name') can be used to access form data
        return 'Form submitted successfully!';
    }
}
