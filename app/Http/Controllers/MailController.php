<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mySendMail() {
        $title = 'test_title';
        $content = 'test_content';
        $address = 'testaddress@test.com';

        Mail::to($address)
        ->send(new TestMail($title, $content));

        return "Email sent successfully!";
    }
}
