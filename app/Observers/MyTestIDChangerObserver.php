<?php

namespace App\Observers;

use App\Mail\TestMail;
use App\Models\MyTest;
use Illuminate\Support\Facades\Mail;

class MyTestIDChangerObserver
{
    /**
     * Handle the MyTest "created" event.
     */
    public function creating(MyTest $myTest)
    {
        // set the id to follow this years number sequence (only if the id was not specifically provided)
        if(empty($myTest->id)) {
            $time = time();
            $myTest->id = $time;
        }
    }
}
