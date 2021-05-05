<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSave;
use App\Models\Contact;
use Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(ContactSave $request)
    {
        Contact::create($request->validated() + ['user_id' => auth()->id()]);
        Session::flash('success', 'Message Recorded');

        return redirect()->route('home');
    }
}
