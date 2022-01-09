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


/* --------------------- rotta per pagina iniziale  */

Route::get('/', function () {
    $fumetti_arrey = config('(1)data_fumetti')['data'];
    $banner_arrey = config('(1)data_fumetti')['data2'];
    $menu_arrey = config('(1)data_fumetti')['data3'];
/*     ddd($menu_arrey);  */
    return view('pages.start-page',compact('fumetti_arrey','banner_arrey','menu_arrey')); 
})->name('route_welcome');


/* --------------------- rotta per pagine dettaglio singolo fumetto  */

Route::get('/comic/{id}', function ($id) {
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


/* --------------------- rotta per pagine menu in partilals header  */

Route::get('/menu/{id}', function ($id) {
    $menu_arrey = config('(1)data_fumetti')['data3'];
    $menu_item_arrey = $menu_arrey[$id];
    return view('pages.menu-pages.show',compact('menu_item_arrey'));
})->name('menu');












/* --------------------- rotta per pagina "DIGITAL COMICS"  */

Route::get('/vampire', function () {
    return view('pages.menu-pages');
})->name('menumm');


/* --------------------- rotta per pagina "DC MERCHANDISE"  */

Route::get('/vampire', function () {
    return view('pages.page-vampire');
})->name('menumm');





