<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//     // $users = DB::table('users')->get();
//     // dd($users);
// });
Auth::routes();
Route::get('/','Frontend\HomeController@index')->name('frontend.index');
Route::get('/product_detail','Frontend\HomeController@detail')->name('frontend.show'); // chi tiet sp
Route::get('/cart','Frontend\HomeController@cart')->name('frontend.cart');
Route::get('/shop_list','Frontend\HomeController@list')->name('frontend.list');






// Route::group([
// 'namespace' => 'Backend',
// 'prefix' => 'admin'
// ],function(){
// Route::get('/dashboard','DashboardController@index')->name('backend.dashboard');
// });

Route::get('dashboard','Backend\DashboardController@index')->name('backend.dashboard')->middleware('auth');

Route::get('products','Backend\ProductController@index')->name('backend.product.index');
Route::get('products/create','Backend\ProductController@create')->name('backend.product.create');
// Route::get('products/{id?}','Backend\ProductController@showImages');
// Route::get('products/showCategory/{id?}','Backend\ProductController@showCategory');
// Route::get('products/showImages/{id?}','Backend\ProductController@showImages');
Route::post('products/store', 'Backend\ProductController@store')->name('backend.product.store');
Route::get('products/edit/{id?}', 'Backend\ProductController@edit')->name('backend.product.edit');
Route::match(['put','patch'], 'products/{products}', 'Backend\ProductController@update')->name('backend.product.update');
Route::get('products/show/{id?}','Backend\ProductController@show')->name('backend.product.show');
Route::get('products/destroy/{id?}','Backend\ProductController@destroy')->name('backend.product.destroy');

// Route::get('products/{id?}','Backend\ProductController@show');

Route::get('users','Backend\UserController@index')->name('backend.user.index');
Route::get('users/create','Backend\UserController@create')->name('backend.user.create');
Route::get('users/showProducts/{id?}','Backend\UserController@showProducts');
Route::post('users/store', 'Backend\UserController@store')->name('backend.user.store');

// Route::get('categories/{id?}','Backend\CategoryController@show');
Route::get('categories','Backend\CategoryController@index')->name('backend.category.index');
Route::get('categories/showProducts/{id?}','Backend\CategoryController@showProducts')->name('backend.category.showProducts');
Route::post('/', 'Backend\CategoryController@store')->name('backend.category.store');
Route::get('categories/create','Backend\CategoryController@create')->name('backend.category.create');
Route::get('categories/edit/{id?}', 'Backend\CategoryController@edit')->name('backend.category.edit');
Route::match(['put','patch'], 'categories/{categories}', 'Backend\CategoryController@update')->name('backend.category.update');






Route::get('orders/showproducts/{id?}' , 'Backend\OrderController@showProducts');

//-------------------------------------------------------------------------------------------------


Route::get('dashboard/login', 'Auth\LoginController@showLoginForm')->name('login.form');
// Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('dashboard/login', 'Auth\LoginController@login')->name('login.store');

Route::get('dashboard/register', 'Auth\RegisterController@show')->name('register.form');
Route::post('dashboard/register', 'Auth\RegisterController@register')->name('register.store');

// Route::get('home/logout','Auth\LoginController@logout_index')->name('logout.index');



// Route::resource('users', 'Backend\UserController');



Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', 'welcome')->name('home')->middleware('auth'); // dang nhap trc khi vao trang home

