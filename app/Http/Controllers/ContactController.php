<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save or process the contact message here.
        // Example: Mail::to('admin@example.com')->send(new ContactMessage($validated));

        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
    }
}

