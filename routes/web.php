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


Route::get('product', function () {
    return view('product');
});

Route::get('home1', function () {
    return view('home1');
});
Route::get('signup',[
    'uses' => 'UserController@getSignup',
      'as' => 'signup',
    'middleware' =>'guest'
]);
Route::post('signup',[
    'uses' => 'UserController@postSignup',
      'as' => 'signup',
     'middleware' =>'guest'
]);
Route::get('signin',[
    'uses' => 'UserController@getSignin',
      'as' => 'signin',
     'middleware' =>'guest'
]);
Route::post('signin',[
    'uses' => 'UserController@postSignin',
      'as' => 'signin',
     'middleware' =>'guest'
]);


Route::get('products', 'ProductController@getIndex');

 
Route::get('/add-to-cart/{id}',[
    
'uses' => 'ProductController@addToCart',
'as' => 'addtocart'
   
]);

Route::get('/remove-from-cart/{id}',[
    
'uses' => 'ProductController@removefromcart',
'as' => 'removefromcart'
   
]);
Route::get('Shopping-cart',[
    
'uses' => 'ProductController@Cart',
'as' => 'shoppingCart'
   
]);

Route::get('checkout',[
    
'uses' => 'ProductController@checkout',
'as' => 'checkout',
 'middleware' =>'auth'
]);
Route::post('checkout',[
    
'uses' => 'ProductController@postcheckout',
'as' => 'checkout',
 'middleware' =>'auth'
]);

Route::get('logout',[
    
'uses' => 'UserController@logout',
'as' => 'logout',
 'middleware' =>'auth'
]);

Route::get('orders',[
    
'uses' => 'UserController@orders',
'as' => 'orders',
 'middleware' =>'auth'
]);
