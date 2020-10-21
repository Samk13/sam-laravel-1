<?php

namespace App\Http\Controllers;

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
        // dd($email);
        Mail::raw('It works!', function ($message)
        {
            $message->to(request('email'))
            ->sender('hello@example.com', 'Example')
            ->subject('a subject for this email is to see a subject !');
        });

        return redirect('/contact')->with('message', 'Email sent successfully!');
    }
}
