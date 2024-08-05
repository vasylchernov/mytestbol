<?php

namespace App\Observers;

use App\Mail\TestMail;
use App\Models\MyTest;
use Illuminate\Support\Facades\Mail;

class MyTestObserver
{
    /**
     * Handle the MyTest "created" event.
     */
    public function created(MyTest $myTest): void
    {
//        dd(['created & observed', $myTest->example], 1);

        $title = 'from_observer_title';
        $content = 'from_observer__content - ' . $myTest->example;
        $address = 'test2address@test.com';

        Mail::to($address)
            ->send(new TestMail($title, $content));
    }

    /**
     * Handle the MyTest "updated" event.
     */
    public function updated(MyTest $myTest): void
    {
        //
    }

    /**
     * Handle the MyTest "deleted" event.
     */
    public function deleted(MyTest $myTest): void
    {
        //
    }

    /**
     * Handle the MyTest "restored" event.
     */
    public function restored(MyTest $myTest): void
    {
        //
    }

    /**
     * Handle the MyTest "force deleted" event.
     */
    public function forceDeleted(MyTest $myTest): void
    {
        //
    }
}
