<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PaymentController;

Route::get('/groups', [TestController::class, 'groupsStub'])->name('group-item');
Route::get('/groups/{id}', [TestController::class, 'groupsStub'])->name('groups');
Route::get('/products/{id}', [TestController::class, 'singleProduct'])->name('product-item');
Route::get('/products', [TestController::class, 'productsList'])->name('products');

Route::get('/mid', function () {
    return 'Welcome Admin!';
})->middleware('example');

Route::middleware('example')->group(function () {
    Route::get('/tt', [TestController::class, 'tt'])->name('tt');
    Route::get('/lw', [TestController::class, 'lw'])->name('lw');
    Route::get('/facade', [TestController::class, 'facade'])->name('facade');
});

Route::get('/pay', [PaymentController::class, 'showPaymentPage'])->name('pay');
Route::get('/payment', [PaymentController::class, 'initiatePayment'])->name('payment.initiate');
Route::get('/payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
Route::post('/payment/notify', [PaymentController::class, 'paymentNotify'])->name('payment.notify');

Route::get('/ev', [TestController::class, 'createEvent'])->name('ev');
Route::get('/test2', [TestController::class, 'test2'])->name('test2');
Route::get('/home', [TestController::class, 'myHomePage'])->name('home');
Route::get('/polshow', [TestController::class, 'polymorphicShow'])->name('polshow');
Route::get('/polcreate', [TestController::class, 'polymorphicCreate'])->name('polcreate');
Route::get('/sr', [SearchController::class, 'searchResult'])->name('sr');
Route::get('/sf', [SearchController::class, 'searchForm'])->name('sf');
Route::get('/meilisearch_cache', [SearchController::class, 'meilisearch_cache'])->name('meilisearch_cache');
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
