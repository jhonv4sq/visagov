<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Auth::routes();

    Route::resource('books', BookController::class);

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/contact', [MessageController::class, 'create'])->name('contact');

    Route::post('/message', [MessageController::class, 'store'])->name('message.store');
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});



