<?php

namespace App\Console\Commands;

use App\Models\MyTest;
use Carbon\Carbon;
use Illuminate\Console\Command;

class MyCommand extends Command
{
    protected $signature = 'my_command:run';
    protected $description = 'test functionality';

    public function handle(): int
    {
//        MyTest::create(['example' => 'created_through_' . class_basename( get_class($this) ) . '; at: ' . Carbon::now()->format('Y-m-d H:i:s')]);
//        echo '__test_info__';
        $this->info('__test_info-2__');
        return 0;
    }

}
