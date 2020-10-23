<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
   public function show() {
       $notification = auth()->user()->unreadNotifications;
       $notification->markAsRead();
       $allNotifications = auth()->user()->notifications;

        return view('notifications.show',[
            'notifications'=> $notification,
            'allNotifications' => $allNotifications,
        ]);
    }
}
