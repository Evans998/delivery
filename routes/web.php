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

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('index');
});
Route::get('/rest', function () {
    return view('products.restourant');
});*/
Route::get('/', 'RestourantController@index')->name('restourant.index');
Route::get('/restourant/create', 'RestourantController@create')->name('restourant.create');
Route::post('/', 'RestourantController@store')->name('restourant.store');
Route::get('/restourant/{id}', 'RestourantController@show')->name('restourant.show');
Route::get('/restourant/edit/{id}', 'RestourantController@edit')->name('restourant.edit');
Route::post('/', 'RestourantController@update')->name('restourant.update');


Route::get('/restourant', 'ProductController@index')->name('product.index');
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/restourant', 'ProductController@store')->name('product.store');

