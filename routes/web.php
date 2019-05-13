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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', 'HomeController@index');

Route::resource('catalog', 'CatalogController');
Route::resource('blog', 'BlogController');
Route::resource('price', 'PriceController');

Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/partner', 'HomeController@partner');

Route::post('/priceList', 'PriceController@showPriceInCategory');

Route::post('/mailPriceList', 'MailSend@mailPriceList');
Route::post('/mailHelper', 'MailSend@mailHelper');
Route::post('/mailContact', 'MailSend@mailContact');
Route::post('/mailCatalog', 'MailSend@mailCatalog');