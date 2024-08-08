<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;

//Route::get('/sdel', [SearchController::class, 'sdel'])->name('sdel');
Route::get('/sr', [SearchController::class, 'searchResult'])->name('sr');
Route::get('/sf', [SearchController::class, 'searchForm'])->name('sf');
Route::get('/notify', [NotificationController::class, 'sendNotification'])->name('notify');
Route::get('/mail', [MailController::class, 'mySendMail'])->name('mail');
Route::get('/show_files', [ArticleController::class, 'showFiles'])->name('show_files');
Route::post('/save_file', [ArticleController::class, 'saveFile'])->name('save_file');
Route::get('/get_form', [ArticleController::class, 'getForm'])->name('get_form');
Route::get('/test', [TestController::class, 'test'])->name('test');
Route::get('/alp', [TestController::class, 'alpinejs_page'])->name('alp');
Route::get('/tail', [TestController::class, 'tail'])->name('tail');
Route::get('/run', [TestController::class, 'run'])->name('run');
Route::get('/proc', [TestController::class, 'process'])->name('proc');

Route::post('sendform', function () {
    return 'form send';
})->name('sendform');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
