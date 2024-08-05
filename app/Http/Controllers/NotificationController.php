<?php

namespace App\Http\Controllers;

use App\Notifications\UserNotification;
use App\Models\User;

class NotificationController extends Controller
{
    public function sendNotification()
    {
        // Get a user instance (you could also use a model query)
        $user = User::first();
        if (!empty($user)) {
            // Dispatch the notification
            $r =
            $user->notify(new UserNotification($user->name, 'test_notify_body'));
            return "Notification sent successfully!";
        }



        return "empty user";
    }
}
