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

Route::get('/', [
    'uses'      =>      'FrontendController@index',
    'as'        =>      'index'
]);

Route::get('/shop', [
    'uses'      =>      'FrontendController@shop',
    'as'        =>      'shop'
]);

Route::get('/shop-list', [
    'uses'      =>      'FrontendController@shopList',
    'as'        =>      'shop.list'
]);

Route::get('/product/{product}', [
    'uses'      =>      'FrontendController@singleProduct',
    'as'        =>      'product.single'
]);

Auth::routes();

Route::get('/dashboard', [
    'uses'      =>      'DashboardController@index',
    'as'        =>      'dashboard'
]);

Route::resource('categories', 'CategoriesController');
Route::resource('products', 'ProductsController');
Route::get('/account', 'HomeController@index')->name('account');

Route::post('/cart/add', [
    'uses'      =>      'ShoppingController@add_to_cart',
    'as'        =>      'cart.add'
]);

Route::get('/cart/add/{product}', [
    'uses'      =>      'ShoppingController@rapid_add_to_cart',
    'as'        =>      'cart.rapid'
]);

Route::post('/cart/update', [
    'uses'      =>      'ShoppingController@update_cart',
    'as'        =>      'cart.update'
]);

Route::get('/cart', [
    'uses'      =>      'ShoppingController@cart',
    'as'        =>      'cart'
]);

Route::get('/checkout', [
    'uses'      =>      'ShoppingController@checkout',
    'as'        =>      'checkout'
]);

Route::get('/cart/delete/{id}', [
    'uses'      =>      'ShoppingController@cart_item_delete',
    'as'        =>      'cart.delete'
]);

