<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\model\MailContact;

class ContactController extends Controller
{

    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactRequest $request)
    {
        $mailC=MailContact::create([
            'name'=> $request['name'],
            'email'=> $request['email'],
            'mess'=> $request['mess'],
        ]);

        $mail = new ContactMail($mailC);;
        Mail::to('maximeamini1@gmail.com')->send($mail);

        return redirect(route('home'));
    }
}
