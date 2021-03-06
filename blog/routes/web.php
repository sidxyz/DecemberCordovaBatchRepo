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


Route::get('/index', function () {
    return view('index');
});


Route::get('/services','Controller@showServices');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact','Controller@contactEmail');

Route::post('/addServices','Controller@addService');

Route::get('/single', function () {
    return view('single');
});

Route::get('/price', function () {
    return view('price');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/servicesBackEnd', 'HomeController@showServices');

Route::get('/deleteService/{id}', 'HomeController@deleteService');

Route::get('/updateService/{id}', 'HomeController@updateService');

Route::post('/updateServicesData','HomeController@updateServicesData');

Route::post('/addReview','HomeController@addReview');

//routes for mobile apis begin below

Route::get('/showAppName','MobileController@showAppName');

Route::post('/addProduct','MobileController@addProduct');

Route::get('/showAllProducts','MobileController@showAllProducts');

Route::get('/deleteProduct/{id}','MobileController@deleteProduct');

Route::get('/getProductInfoById/{id}','MobileController@getProductInfoById');

Route::post('/updateProductData','MobileController@updateProductData');

Route::post('/api/login','MobileController@login');












