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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//  criando grupos de rota 

Route::group(['middleware'=>'auth','namespace'=>'Admin'],function(){

    Route::get('/user', 'AdminController@index')->name('home');

    Route::post('/user', 'AdminController@store')->name('userContact.store');

    Route::get('/category', 'CategoryController@index')->name('home');
    //Route::post('/category', 'CategoryController@categoryStore')->name('category.store');

    $this->post('/category','CategoryController@store')->name('category.store');

    Route::get('/product', 'ProductController@index')->name('home');
    $this->post('/poduct','ProductController@store')->name('product.store');


    Route::get('/unity', 'UnityController@index')->name('home');
    $this->post('/unity','UnityController@store')->name('unity.store');


    // entrada em produtos
    Route::get('/entry', 'UnityProductController@index')->name('home');

    $this->post('/entry','UnityProductController@store')->name('entry.store');


    
    // listanto prudutos por unidade #endregion    
    Route::get('/transfer', 'UnityProductController@transfer')->name('home');
    //Route::post('/unityStock', 'UnityStockController@show')->name('unityStock.list');
  
});
