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

Route::get('/', 'ProductController@index')->name('products');

Route::get('descargar-productos', 'ProductController@pdf')->name('products.pdf');

Route::get('descargar-excel', 'ProductController@excel')->name('spreadsheet');
