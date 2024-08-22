<?php

namespace App\Http\Controllers;

use App\Events\ProductAdded;
use App\Models\Assortment;
use App\Models\Category;
use App\Models\MyTest;
use App\Jobs\ProcessSomething;
use App\Models\Post;
use App\Models\Product;
use Illuminate\View\View;
use Meilisearch\Client;
use Psy\Util\Str;
use App\Facades\Product as ProductFacade;

//return env('BG', 'BG_def') . '<br> test_route';
class TestController extends Controller
{
    public function tt(): string
    {
        return 'tt';
    }
    public function pay(): View
    {
        return view('test.lw'/*, compact('html')*/);
    }
    public function lw(): View
    {
        $data = [];
//        $html = \Livewire\Livewire::mount('example-component', [])->html();
        $c = \Livewire\Livewire::mount('example-component', ['example' => 'def_example']);
        $html = $c;//->output();

        return view('test.lw', compact('html'));
    }
    public function facade(): View
    {
        $data = [];
        $pf = ProductFacade::test2();

        dd($pf);
        return view('test.test-2', compact('data'));
    }
    public function createEvent(): View
    {
        $product = Product::create(['name' => 'Nokia-1', 'price' => 100.1, 'assortment_id' => (Assortment::where('id', 2)->get())[0]->id]);
        event(new ProductAdded($product));

        $data = [$product->name];

        return view('test.test-2', compact('data'));
    }
    public function test2(): View
    {
//        $data = collect(Product::all())->filter(fn($data) => $data);
        $data = collect(Product::all())->filter(fn($data) => $data->price > 55)->map(fn($data) => $data->name);
//        dd($data);
        return view('test.test-2', compact('data'));
    }
    public function myHomePage(): View
    {
        $products = Product::all();
        $p2 = [1,2,3,4];
        $titleMyComp = 'test_title_for_my-comp';
        $img = 'storage/images/lib.jpg';
//        dd($products);
        return view('test.home', compact('products', 'p2', 'titleMyComp', 'img'));
    }
    public function __construct()
    {
        echo '<script>document.querySelector("html").style.backgroundColor = "#ccc"</script>';
    }

    public function polymorphicShow(): string
    {
        $p = Product::find(1);
//        dd($p->assortment()->get());
//        dd($p->category()->get()[0]->name);
        dd([$p->category()->get()[0]->name, $p->assortment()->get()[0]->name]);

        return 'polymorphicShow_route';
    }

    public function polymorphicCreate(): string
    {
//        $category = Category::create(['name' => 'Electronics']);
//        $assortment = $category->assortments()->create(['name' => 'Smartphones']);
//        $product1 = $assortment->products()->create(['name' => 'Xiaomi 3', 'price' => 999.99]);
//        $product2 = $assortment->products()->create(['name' => 'Nokia 3', 'price' => 888.99]);
//
//        $category = Category::create(['name' => 'Cooking']);
//        $assortment = $category->assortments()->create(['name' => 'Pods']);
//        $product1 = $assortment->products()->create(['name' => 'Tea Pod', 'price' => 55.22]);
//        $product2 = $assortment->products()->create(['name' => 'Coffee pod', 'price' => 22.11]);

//        echo $product1->ass

        return ' polymorphicCreateD';
    }
    public function test(): string
    {
        $data = [];
        return '<br> test_route';
    }
    public function alpinejs_page(): View
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

        dd($tmp);

        return view('test.test', compact('p1', 'data'));
    }
}
