<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PaymentReceived;
class PaymentController extends Controller
{
    public function create()
    {
        return view('payment.create');
    }

    public function store()
    {
        Notification::send(request()->user(), new PaymentReceived(1313));
        return redirect('home');
    }

    // public function handle(Request $request)
    // {
    //     $payload = $request->all();

    //     if($payload['type'] == 'charge.succeeded'){
    //        Notification::route('nexmo', config('services.nexmo.sms_to'))
    //                     ->notify(new PaymentReceived($payload));
    //     }

    //     return response('Webhook received');
    // }
}
