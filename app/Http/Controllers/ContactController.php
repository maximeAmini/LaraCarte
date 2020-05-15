<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;

class ContactController extends Controller
{

    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactRequest $request)
    {
        return new ContactMail($request['name'],$request['email'],$request['mess']);
    }
}
