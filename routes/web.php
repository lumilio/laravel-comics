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
    $fumetti_arrey = config('(1)data_fumetti')['data'];
    $banner_arrey = config('(1)data_fumetti')['data2'];
    /* ddd($fumetti_arrey); */
    return view('pages.start-page',compact('fumetti_arrey','banner_arrey')); 
})->name('route_welcome');




Route::get('/superman', function () {
    return view('pages.page-superman');
})->name('1');

Route::get('/vampire', function () {
    return view('pages.page-vampire');
})->name('2');

Route::get('/acquaman', function () {
    return view('pages.page-acquaman');
})->name('3');





