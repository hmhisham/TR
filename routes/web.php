<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('auth.login');
});



  Auth::routes();
 //Auth::routes(['register' => false]);
  Route::get('/home', 'HomeController@index')->name('home');



 route::resource('detailss','DetailssController');

 route::resource('Merchant','MerchantController');
 route::resource('follow','followController');

Route::get('/Container/{id}','followController@getproducts');

Route::get('/{page}', 'AdminController@index');




