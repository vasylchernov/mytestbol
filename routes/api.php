<?php

use \Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('t12', [TestController::class, 't12'])->name('api_t12');
