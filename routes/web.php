<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


use Illuminate\Support\Facades\Mail;


Route::get('/test-mail', function () {

    try {

        Mail::raw('This is a Laravel Test Email.', function ($message) {

            $message->to('bhartisingh.2503@gmail.com')
                    ->subject('Laravel SMTP Test');

        });

        return 'Mail Sent Successfully';

    } catch (\Exception $e) {

        return $e->getMessage();

    }

});

