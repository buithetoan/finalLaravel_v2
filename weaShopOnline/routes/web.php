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
//Client
Route::group(['namespace'=>'Client','prefix'=>'/'],function (){
    Route::get('/home', 'HomeController@index');
    Route::get('/product-all','ProductController@index');
    Route::get('/Cart-Page','CartController@CartPage');
    Route::get('/Payment','CartController@Payment');
});
//Admin
Route::group(['namespace'=>'Admin','prefix'=>'/'],function (){
    Route::get('/admin/dashboard', 'DashboardController@index');
    Route::get('/admin/', 'DashboardController@index');    
    Route::resource('/admin/brand','BrandController');
    Route::delete('brand_delete', 'BrandController@destroy')->name('brand_delete');
});