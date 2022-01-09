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



Route::get('/{id}', function ($id) {
    $fumetti_arrey = config('(1)data_fumetti')['data'];
    if(is_numeric($id) && $id >= 0 && $id < count($fumetti_arrey)){
        $item_fumetti_arrey = $fumetti_arrey[$id];
        /* ddd($item_fumetti_arrey); */
        return view('pages.comic-pages.show',compact('item_fumetti_arrey'));
    }
    else{
        abort(404);
    }
})->name('comic');



Route::get('/vampire', function () {
    return view('pages.page-vampire');
})->name('menu');







