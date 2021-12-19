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
    return view('pages.start-page');
})->name('route_welcome');

Route::get('/superman', function () {
    return view('pages.page-superman');
})->name('route_superman');

Route::get('/acquaman', function () {
    return view('pages.page-acquaman');
})->name('route_acquaman');

Route::get('/vampire', function () {
    return view('pagespage-vampire');
})->name('route_vampire');



/* Route::get('/about', function () {
    $data = [
        "options"=>[
            'chi siamo','cosa facciamo','perchè lo facciamo'
        ]
    ];
    return view('about',$data);
})->name('route_about'); */