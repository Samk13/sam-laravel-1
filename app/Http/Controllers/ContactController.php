<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email'=>'required|email']);
        $email = request('email');
        $topic = " this is a topic from the controller !! sd,ajd lö<kj😎";
        Mail::to($email)->send(new Contact($topic));

        return redirect('/contact')
            ->with('message', 'Email sent successfully!');
    }
}
