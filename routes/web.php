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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'as' => 'cocosmile.',
    'namespace' => 'Frontend'
],function () {

    Route::get('/', 'FrontEndContrller@index')->name('index');
    Route::get('article', 'FrontEndContrller@article')->name('article');
    Route::get('search', 'FrontEndContrller@search')->name('search');
    Route::get('about-us', 'AboutUsController@index')->name('about-us');
    Route::get('products', 'ProductController@index')->name('products');
    Route::get('logistic-order', 'LogisticOrderController@index')->name('logistic-order');
   

    Route::group([
        'prefix' => 'contact-us',
        'as' => 'contact-us.',
    ],function () {
        Route::get('/','ContactUsController@index')->name('index');
        Route::post('save', 'ContactUsController@store')->name('store');
    
    });
    
    Route::group([
        'prefix' => 'counsel',
        'as' => 'counsel.',
    ],function (){
        Route::post('store','FrontEndContrller@store')->name('store');
    });

    Route::group([
        'prefix' => 'product',
        'as' => 'product.',
    ],function (){
        Route::get('{id}/detail','ProductController@detail')->name('detail');
    });
});

Route::group([
    'prefix' => 'Admin',
    'middleware' => 'auth',
    'namespace' => 'Backend'
],function () {

	Route::group([
        'prefix' => 'counsel',
        'as' => 'counsel.',
    ],function (){
        Route::get('/','CounselController@index')->name('index');
        Route::delete('{id}/delete','CounselController@destroy')->name('delete');
    });

    Route::group([
        'prefix' => 'welcome',
        'as' => 'welcome.',
    ],function (){
        Route::get('/','WelcomeController@index')->name('index');
        Route::post('/save','WelcomeController@store')->name('store');
    });

    Route::group([
        'prefix' => 'our-product',
        'as' => 'our-product.',
    ],function () {
        Route::get('/','OurProductController@index')->name('index');
        Route::post('save','OurProductController@store')->name('store');
        Route::get('{id}/delete','OurProductController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'contact-us',
        'as' => 'contact-us.',
    ],function (){
        Route::get('/','ContactUsController@index')->name('index');
        Route::delete('{id}/delete','ContactUsController@destroy')->name('delete');
    });
 
    Route::group([
        'prefix' => 'product',
        'as' => 'product.',
    ],function (){
        Route::get('/','ProductController@index')->name('index');
        Route::get('{id}/detail','ProductController@detail')->name('detail');
        Route::get('/create','ProductController@create')->name('create');
        Route::post('/store','ProductController@store')->name('store');
        Route::get('{id}/edit','ProductController@edit')->name('edit');
        Route::put('{id}/update','ProductController@update')->name('update');
        Route::get('{id}/delete-one','ProductController@deleteOne')->name('delete-one');
        Route::get('{id}/delete-two','ProductController@deleteTwo')->name('delete-two');
        Route::delete('{id}/delete','ProductController@destroy')->name('delete');

    });

     Route::group([
        'prefix' => 'logistic-order',
        'as' => 'logistic-order.',
    ],function () {
        Route::get('/','LogisticOderController@index')->name('index');
        Route::post('save','LogisticOderController@store')->name('store');
        Route::get('{id}/delete','LogisticOderController@destroy')->name('delete');
    });
});
