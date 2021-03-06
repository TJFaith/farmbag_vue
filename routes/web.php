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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/product','productController@index');
Route::get('/productCategory','productController@product_category');

// Route::get('/','indexController@index', function(){
//     \Artisan::call('cache:clear');
//     \Artisan::call('view:clear');
//     \Artisan::call('config:clear');
//     \Artisan::call('route:clear');
//     // \Artisan::call('optimize');
//     // dd("Done"); 
// })->where('path','([A-z\d\-\/_.]+)?');
Auth::routes();
Route::get('{any}', function () {
    return view('layouts.app');
})->where('any', '.*');
// Route::get("/{any}", function(){
//     return view('index');
// })->where('any','.*');

// Route::get('/{any}', 'SpaController@index')->where('any', '.*');


// Route::get('/home', 'HomeController@index')->name('home');


