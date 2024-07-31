<?php

namespace App\Http\Controllers;

use App\Models\MyTest;
use App\Jobs\ProcessSomething;

class TestController extends Controller
{
    public function process()
    {
        // Dispatch the job to the queue
        ProcessSomething::dispatch();

        // Return a response
        return response()->json(['status' => 'Job dispatched']);
    }

    public function run() {
        $p1 = 'p1_val';

        $m = new MyTest();
        $m->example = 't1_' . time();
        $m->save();
        $data = $m::all()->values();

        return view('test.test', compact('p1', 'data'));
    }
}
