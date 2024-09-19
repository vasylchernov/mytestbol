<?php

namespace Tests\Unit;

use App\Http\Controllers\TestController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Mockery\Mock;
use Tests\TestCase;

class MyTest extends TestCase//running test command - "C:\laragon\www\mytestbol> .\vendor\bin\phpunit .\tests\Unit\MyTest.php"
{

    use RefreshDatabase;

    function test_db_seeders()
    {
        $example = '(from seeder)Example_1';
        $this->seed();//running all seeders from database/seeders/*
        //check and remove(!) all records from specified table
        $this->assertDatabaseHas('my_tests', ['example' => $example]);
    }
//    function test_db()
//    {
//        $str = 'test_db_example';
//        $mt = \App\Models\MyTest::create(['example' => $str]);
//
//        $this->assertDatabaseHas('my_tests', ['example' => $str]);
//    }

//    function test_controller_forTest()
//    {
//        $mr = \Mockery::mock(Request::class);
//
//        // Create a mock object of MyClass
//        $mock = $this->getMockBuilder(TestController::class)
//            ->setConstructorArgs([$mr])
//            ->onlyMethods(['someOtherMethod'])
//            ->getMock();
//
//        // Set expectations for the methods
//        $mock->expects($this->once())
//            ->method('someOtherMethod');
//        $mock->methodToTest();
//    }

//    function test_controller_class()
//    {
//        $mr = \Mockery::mock(Request::class);
//        $controller = new TestController($mr);
//        $expected = 'TestController::forTest';
//        $result = $controller->methodToTest();
//
//        self::assertEquals($expected, $result);
//    }
//    public function test_that_true_is_true(): void
//    {
//        $this->assertTrue(true);
//        foreach (range(0, 3) as $i) {
//            $this->assertTrue(true);
//        }
//    }
//
//    public function test_the_application_returns_a_successful_response(): void
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//
//        $this->assertTrue(true);
//    }

//    public function test_xxx(): void
//    {
//        $response = $this->get('/t7');
//
//        $response->assertStatus(200);
//
//        $this->assertTrue(true);
//
//        dd([
//            '$response',
//            $response->status(),
//            $response->content()
//        ]);
//    }
}
