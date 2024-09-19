<?php

namespace App\Console;

use Carbon\Carbon;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Date;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\SendWelcomeEmails::class,
        \App\Console\Commands\MyCommand::class,
    ];
    protected function schedule(Schedule $schedule): void
    {
//        $schedule->command('my_command_email:send-welcome')->everyMinute();
        $schedule->command('my_command:run')->everyMinute();

        $schedule->call(function () {
            echo 'from schedule: ' . Carbon::now()->format('Y-m-d H:i:s');
        })->everyMinute();
    }

    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
