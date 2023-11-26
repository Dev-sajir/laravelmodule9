<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('pages.contactus');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form data (e.g., send an email)

        return redirect()->route('contact.show')->with('success', 'Thank you for contacting us!');
    }
}
