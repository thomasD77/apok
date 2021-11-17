<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;

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

Route::redirect('/', '/nl');

Route::get('/{locale}', function ($locale)
{
    App::setLocale($locale);
    return view('includes.page');
})->name('home');

Route::POST('/{lang}/subscribe', 'App\Http\Controllers\SubscriberController@subscribe')->name('subscribe');


