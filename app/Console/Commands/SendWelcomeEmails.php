<?php

namespace App\Console\Commands;

use App\Models\MyTest;
use Illuminate\Console\Command;

class SendWelcomeEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my_command_email:send-welcome';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'My Send welcome emails to new users';

    public function __construct() { parent::__construct(); }// Create a new command instance.

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
//        $this->info('Sending welcome emails...');

//        MyTest::create(['example' => '08_manually_through kernel_' . time()]);
        MyTest::create(['example' => '08_through kernel_' . time()]);

//        $this->info('Sending welcome emails -> finished');

        return 0;
    }
}
