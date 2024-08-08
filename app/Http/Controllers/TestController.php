<?php

namespace App\Http\Controllers;

use App\Models\MyTest;
use App\Jobs\ProcessSomething;
use App\Models\Post;
use Meilisearch\Client;

//return env('BG', 'BG_def') . '<br> test_route';
class TestController extends Controller
{
    public function test(): string
    {
//        $client = new Client('http://127.0.0.1:7700', 'masterkey');
//        $client->createIndex('dg_posts', ['primaryKey' => 'id']);
//        $indexes = $client->getIndexes();
//        dd($indexes);
//        $posts = Post::search('Your search term')->get();
//        dd($posts);
        return env('BG', 'BG_def') . '<br> test_route';
    }
    public function alpinejs_page()
    {
        return view('test.alp'/*, compact('')*/);
    }
    public function tail()
    {
        return view('test.tailwindcss'/*, compact('')*/);
    }

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
