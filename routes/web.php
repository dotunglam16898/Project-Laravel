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






// Route::group([
// 'namespace' => 'Backend',
// 'prefix' => 'admin'
// ],function(){
// Route::get('/dashboard','DashboardController@index')->name('backend.dashboard');
// });

Route::get('dashboard','Backend\DashboardController@index')->name('backend.dashboard');

Route::get('products','Backend\ProductController@index')->name('backend.product.index');
Route::get('products/create','Backend\ProductController@create')->name('backend.product.create');
// Route::get('products/{id?}','Backend\ProductController@show');

Route::get('users','Backend\UserController@index')->name('backend.user.index');
Route::get('users/create','Backend\UserController@create')->name('backend.user.create');
Route::get('users/showProducts/{id?}','Backend\UserController@showProducts');

// Route::get('categories/{id?}','Backend\CategoryController@show');
Route::get('categories','Backend\CategoryController@index')->name('backend.category.index');
Route::get('categories/showProducts/{id?}','Backend\CategoryController@showProducts')->name('backend.category.showProducts');


Route::get('products/{id?}','Backend\ProductController@showImages');
Route::get('products/showCategory/{id?}','Backend\ProductController@showCategory');
Route::get('products/showImages/{id?}','Backend\ProductController@showImages');
// Route::get('products/showProducts/{id?}','Backend\ProductController@showProducts');



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

