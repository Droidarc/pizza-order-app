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

Route::get('/', 'MainpageContoller@index')->name('mainpage');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/kampanyalar', 'ProductController@showDiscounts')->name('discounts');
Route::get('/pizzalar', 'ProductController@showPizzas')->name('pizzas');
Route::get('/extra', 'ProductController@showExtras')->name('extras');

Route::get('/admin', 'AdminController@index')->name('admin.home');
Route::get('/admin/products', 'AdminController@product')->name('admin.product');
Route::get('/admin/products/create', 'AdminController@productCreate')->name('admin.product.create');
Route::post('/admin/products/create', 'AdminController@productStore')->name('admin.product.create');
Route::get('/admin/products/edit/{id}', 'AdminController@productEdit')->name('admin.product.edit');
Route::patch('/admin/products/edit/{id}', 'AdminController@productUpdate')->name('admin.product.edit');
Route::delete('/admin/products/delete/{id}', 'AdminController@productDestroy')->name('admin.product.delete');

Route::get('/admin/products/pizza/create', 'AdminController@pizzaCreate')->name('admin.pizza.create');
Route::post('/admin/products/pizza/create', 'AdminController@pizzaStore')->name('admin.pizza.create');
Route::get('/admin/products/offer/create', 'AdminController@offerCreate')->name('admin.offer.create');
Route::post('/admin/products/offer/create', 'AdminController@offerStore')->name('admin.offer.create');
Route::get('/admin/products/extra/create', 'AdminController@extraCreate')->name('admin.extra.create');
Route::post('/admin/products/extra/create', 'AdminController@extraStore')->name('admin.extra.create');


Route::group(['prefix' => 'cart'], function() {
	Route::get('/', 'CartController@index')->name('cart');
	Route::post('/add', 'CartController@add')->name('cart.add');
	Route::delete('/remove/{rowid}', 'CartController@remove')->name('cart.remove');
	Route::delete('/free', 'CartController@free')->name('cart.free');
});

Route::get('/payment', 'PaymentController@index')->name('payment');
Route::post('/payment', 'PaymentController@pay')->name('pay');

Route::group(['middleware' => 'auth'], function() {
	Route::get('/orders', 'OrderController@index')->name('orders');
	Route::get('/orders/{id}', 'OrderController@show')->name('order');
});

Route::post('/search', 'AdminController@search')->name('admin.product.search');
Route::get('/search', 'AdminController@search')->name('admin.product.search');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout'); // Nomessage hatasını çözmek amaçlı route tanımı
