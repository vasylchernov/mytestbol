<?php

namespace App\Http\Controllers;

use App\Enums\InvoiceType;
use App\Enums\InvoiceTypeString;
use App\Enums\MyEnumType;
use App\Events\ProductAdded;
use App\Models\Assortment;
use App\Models\Category;
use App\Models\MyTest;
use App\Jobs\ProcessSomething;
use App\Models\Post;
use App\Models\Product;
use App\Traits\TraitExample;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Meilisearch\Client;
use Psy\Util\Str;
use App\Facades\Product as ProductFacade;

//return env('BG', 'BG_def') . '<br> test_route';

class Invoice {}
class Cashinvoice extends Invoice {}
class TestController extends Controller
{
    use TraitExample;

    public Collection $data;

    public function vchernov(): string {
        return 'vchernov route';
    }

    public function testBranchBehavior(): string {
        return 'main_branch';
    }

    public function t15(): void {
        $myTest = MyTest::create(['example' => 'id_test']);
        dd([
            '$myTest',
            $myTest
        ]);
    }

    function gc(Invoice $inv) {
        dd([
            'inv',
            basename( get_class( $inv ) )
        ]);
    }

    public function t14(): string {

        $ex = '';
        foreach ([1,2,3] as $i) {
            $params = [
                'example' => 'from code - ' . $i
            ];

            $obj = MyTest::create($params);
            $ex .= $obj->example . ', ';
        }


        return $ex;

        $cInv = new Cashinvoice();
        $inv = new Invoice();
//        $type = InvoiceTypeString::INVOICE;
        $type2 = InvoiceType::Invoice;

        $this->gc($inv);

//        echo $type->value == get_class($inv);

//        echo basename( get_class($cInv) );
        echo '<br>';
//        echo get_class($inv);
        echo match ($type2->name) {
            basename( get_class($inv) ) => '111',
            basename( get_class($cInv) ) => '222',
            default => 'err',
        };
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
//        match ($type) {
//
//        }

        echo '<br><br><br><br>';
//        if ($inv instanceof Invoice) {
//            echo get_class($cInv);
////        } elseif ($inv instanceof CashInvoice) {
////            echo 'CashInvoice_type';
////        }
//
//        echo '<br><br><br><br>';
//        echo get_class($inv);
//
        echo '<br><br><br><br>';


        return __CLASS__ . __METHOD__;
    }

    public function t12(): string {
        return __CLASS__ . __METHOD__;
    }

    public function t11(Request $req): void {
        $r = $req::create('http://mytestbol.test/t11', 'post', [
            'k1' => 'v1',
            'k2' => 'v2'
        ]);

        $r = Http::post(route('t10'), [
            'k1' => 'v1',
            'k2' => 'v2'
        ]);
        dd([
            'r',
            $r
        ]);
    }

    public function t10(Request $req): string {
        dd([
            'request',
            $req->query()
        ]);

        return __METHOD__;
    }

    public function t9(): string {
        return __METHOD__;
    }

    public function t8(Request $request): string
    {
        $prop = MyEnumType::ex;

        $age = 22;
        return match ($age) {
            $this->f3() => $this->f3Res(),
            20 + 2 => '20 + 2',
            $this->f1() => $this->f1Res(),
            default => 'def',
        };
    }

    function f1(): int {
        echo 'f1() <br>';
        return 22;
    }
    function f1Res(): string {
        echo 'f1Res <br>';
        return 'f1Res::22';
    }
    function f3(): int {
        echo 'f3() <br>';
        return 33;
    }

    function f3Res(): string {
        echo 'f3Res() <br>';
        return 'f3Res::22';
    }

    public function t5(): View
    {
        $data = MyTest::all();
        foreach ($data as $k => $v) {
            $bool = $v['type'] instanceof MyEnumType;
            dd($v['type']);
        }
        dd($data);

        return view('test.stub', compact('data'));
    }
    public function t4(): View
    {
        $data = $this->data;
        $d = $data->each->sync();



//        $data->each(fn ($it) => print ('-> ' . $it));
        dd($d);

        $this->getDataFromExample();

        return view('test.stub', compact('data'));
    }
    public function t3(): View
    {
        $data = collect([1,2,3]);

        return view('test.stub', compact('data'));
    }
    public function customMethod(): string
    {
//        $p = Product::withCheapestProduct()->get();
        $data = Product::withCheapestProductSql()->get();

        return view('test.stub', compact('data'));
    }
    public function ctx(): string
    {
        Context::add('my', "[1,2,3,4,5]");
        $data = collect(Context::all());
        $this->request->session()->flash('page', '___single product page___');
        return view('test.stub', compact('data'));
    }
    public function groupsStub(int $id = 0): string
    {
        $data = collect('groupsStub');
        $this->request->session()->flash('page', '___single product page___');
        return view('test.stub', compact('data'));
    }
    public function singleProduct(int $id): string
    {
        $data = ProductFacade::getProductName($id);
        $this->request->session()->flash('page', '___single product page___');
        return view('test.stub', compact('data'));
    }
    public function productsList(): string
    {
        $data = ProductFacade::getAllNames();
        $this->request->session()->flash('page', '___products list page___');
        return view('test.stub', compact('data'));
    }
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

    public function methodToTest(): string
    {
        $this->someOtherMethod();
        return 'TestController::forTest';
    }

    public function someOtherMethod(): void
    {
        echo __METHOD__;
    }

    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->data = collect([100,200,300]);
        echo '<script>document.querySelector("html").style.backgroundColor = "#ccc"</script>';
    }
}
