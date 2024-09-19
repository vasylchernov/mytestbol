<?php

namespace Database\Seeders;

use App\Models\MyTest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(MyTest::TABLE)
            ->insert([
                ['example' => '(from seeder)Example_1'],
                ['example' => '(from seeder)Example_2'],
                ['example' => '(from seeder)Example_3'],
            ]);
    }
}
