<?php

namespace App\Providers;

use App\Models\MyTest;
use Illuminate\Support\ServiceProvider;
use App\Observers\MyTestObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        MyTest::observe(MyTestObserver::class);
    }
}
