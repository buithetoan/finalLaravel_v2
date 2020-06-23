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
Auth::routes(['verify' => true]);
//Admin
Route::group(['namespace'=>'Admin','prefix'=>'/admin'],function (){
	// Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('', 'DashboardController@index');   
    Route::resource('/brand','BrandController');
    Route::delete('brand_delete', 'BrandController@destroy')->name('brand_delete');
});
//Client
Route::group(['namespace'=>'Client','prefix'=>'/'],function (){
    Route::get('/home', 'HomeController@index');    
    Route::get('/product-all','ProductController@index');
});
