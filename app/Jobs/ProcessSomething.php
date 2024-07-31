<?php

namespace App\Jobs;

use App\Models\MyTest;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessSomething implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $m = new MyTest();
        $m->example = 'from_queue_' . time();
        $m->save();
    }
}
