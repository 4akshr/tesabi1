<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Providers\FortifyServiceProvider;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function login(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'email', 'password']);
        return view('login', compact('contact'));
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'password', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
