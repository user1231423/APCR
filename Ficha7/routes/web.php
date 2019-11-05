<?php

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

/*
Route::get('/', function () {
    $tasks = [
        'go to store',
        'go home',
        'go to the market'
    ];

    return view('welcome',[
        'text' => 'ACR', 
        'title' => 'Index',
        'tasks' => $tasks]
    );
    //return view('welcome', ['text' => 'ACR', request('title')]) in the url insert ?title=something and that page title will be "something"
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact',function(){
    return view('contact', ['title' => 'Contact']);
});
*/

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');