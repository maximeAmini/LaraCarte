<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactRequest $request)
    {
        $mail = new ContactMail($request['name'],$request['email'],$request['mess']);;
        Mail::to('maximeamini1@gmail.com')->send($mail);
        return redirect(route('home'));
    }
}
