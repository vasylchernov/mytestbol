<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mySendMail(string $t = '', string $c = '') {
        $title =  $t ?? 'def_title';
        $content = $c ?? 'def_content';
        $address = 'testaddress@test.com';

        Mail::to($address)->send(new TestMail($title, $content));

        return "Email sent successfully!";
    }
}
