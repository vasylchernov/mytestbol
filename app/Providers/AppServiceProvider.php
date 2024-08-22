<?php

namespace App\Providers;

use App\Models\MyTest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Observers\MyTestObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('example', function ($app) {
            return new \App\Http\Middleware\ExampleMiddleware();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        MyTest::observe(MyTestObserver::class);

        DB::listen(function ($query) {
            \Illuminate\Support\Facades\Log::info($query->sql);
            \Illuminate\Support\Facades\Log::info($query->bindings);
            \Illuminate\Support\Facades\Log::info($query->bindings);
        });
    }
}
