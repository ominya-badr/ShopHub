<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactMessage(Request $request, Contact $contact) {
        $request->validate([
            'name' => 'required|string' ,
            'email' => 'required|string' ,
            'phone' => 'required|string' ,
            'subject' => 'required|string' ,
            'message' => 'required|string' ,
        ]);
        $contact->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        session()->flash('success', 'We Recieved Your Message successfully 😊.');
        return redirect()->route('home-contact');
    }
}
