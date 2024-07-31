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

        MyTest::create(['example' => 'manually_' . time()]);
        $data = MyTest::all()->values();
        $tmp = [];

        foreach ($data as $value) {
            array_push($tmp, $value->example);
        }

        return print_r($tmp, 1);

        return view('test.test', compact('p1', 'data'));
    }
}
