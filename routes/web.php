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

Route::get('/', function () {
    return view('welcome');
});

Route::get('generate-pdf', 'PdfGenerateController@getInvoice')->name('invoice');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('occupations', 'OccupationController@index');
Route::post('occupations', 'OccupationController@store')->name('occupations');
Route::get('occupations/create', 'OccupationController@create');

Route::get('apply', 'HomeController@applyTax');
Route::get('invoice', 'HomeController@getInvoice');

Route::get('tax', 'TransactionController@create');
Route::post('tax/create', 'TransactionController@store');
