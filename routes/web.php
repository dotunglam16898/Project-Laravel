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


 Route::get('laravel-send-email', 'EmailController@sendEMail');
 Route::get('export', 'ExportController@export')->name('frontend.export');
 Route::get('test', function() {
     return view('backend.test');
 });

 
Route::get('/','Frontend\HomeController@index')->name('frontend.index');
Route::get('/product_detail/{id?}','Frontend\HomeController@detail')->name('frontend.show'); // chi tiet sp
// Route::get('/cart','Frontend\HomeController@cart')->name('frontend.cart');
Route::post('search','Frontend\HomeController@search')->name('frontend.search');
Route::get('/shop_list/{id?}','Frontend\HomeController@list')->name('frontend.list');
Route::get('/contact','Frontend\HomeController@contact')->name('frontend.contact');

Route::get('new_product','Frontend\HomeController@newproduct')->name('frontend.new');


Route::get('/get','Frontend\HomeController@get' );

Route::get('cookie/set','Frontend\HomeController@set');
Route::get('cookie/get','Frontend\HomeController@getCookie');


Route::get('/cart_index','Frontend\CartController@index')->name('frontend.cart');
Route::get('/cart/add/{id}','Frontend\CartController@add')->name('frontend.add_cart');
Route::get('/cart/destroy/{id?}','Frontend\CartController@delete')->name('frontend.cart.delete');
Route::get('/cart/update/{id}','Frontend\CartController@update')->name('frontend.update_cart');
Route::get('/cart/remove/{id?}','Frontend\CartController@remove')->name('frontend.cart.remove');

Route::get('/cart/plus/{rowId}/{qty}','Frontend\CartController@plus')->name('frontend.cart.plus');
Route::get('/cart/decrease/{rowId}/{qty}','Frontend\CartController@decrease')->name('frontend.cart.decrease');


Route::get('/checkout/order','Frontend\CartController@order')->name('frontend.cart.order');



Route::get('/cart/checkout','Frontend\CartController@checkout')->name('frontend.cart.checkout')->middleware('auth');


Route::get('wish_list/{id?}', 'Frontend\CartController@add_wish')->name('frontend.add_wish');
    

Route::get('success','Frontend\CartController@wishlist_index')->name('frontend.wish');



    






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

Route::get('products/delete_image/{id?}', 'Backend\ProductController@delete_image')->name('backend.product.delete_image');

// Route::get('products/edit/{product}', 'Backend\ProductController@edit')->name('backend.product.edit')->middleware('can:update,product');
// Route::get('products/edit/{product}', function (\App\Models\Product $product){
	
// 	return view('backend.product.edit',['product'=> $product]);
// })->middleware('can:update,product');


// Route::get('products/{id?}','Backend\ProductController@show');

Route::get('users','Backend\UserController@index')->name('backend.user.index');
Route::get('users/create','Backend\UserController@create')->name('backend.user.create');
Route::get('users/showProducts/{id?}','Backend\UserController@showProducts')->name('backend.user.show');
Route::post('users/store', 'Backend\UserController@store')->name('backend.user.store');
Route::get('users/destroy/{id?}','Backend\UserController@destroy')->name('backend.user.destroy');
Route::match(['put','patch'], 'users/{users}','Backend\UserController@update')->name('backend.user.update');
Route::get('users/edit/{id?}', 'Backend\UserController@edit')->name('backend.user.edit');
// Route::get('users/show/{id?}','Backend\UserController@show')->name('backend.user.show');
//---------------------------------------------------------------------------------------------------

// Route::get('categories/{id?}','Backend\CategoryController@show');
Route::get('categories','Backend\CategoryController@index')->name('backend.category.index');
// Route::get('categories/showProducts/{id?}','Backend\CategoryController@showProducts')->name('backend.category.showProducts');
Route::post('/', 'Backend\CategoryController@store')->name('backend.category.store');
Route::get('categories/create','Backend\CategoryController@create')->name('backend.category.create');
Route::get('categories/edit/{id?}', 'Backend\CategoryController@edit')->name('backend.category.edit');
Route::match(['put','patch'], 'categories/{categories}', 'Backend\CategoryController@update')->name('backend.category.update');
Route::get('categories/destroy/{id?}','Backend\CategoryController@destroy')->name('backend.category.destroy');
Route::get('categories/show/{id?}', 'Backend\CategoryController@show')->name('backend.category.show');





//----------------------------------------------------------------------------------------------------
// Route::get('orders/showproducts/{id?}' , 'Backend\OrderController@showProducts')->name('backend.order.show');
Route::get('orders','Backend\OrderController@index')->name('backend.order.index');
Route::get('orders/show/{id?}','Backend\OrderController@show')->name('backend.order.show');
Route::get('orders/destroy/{id?}','Backend\OrderController@destroy')->name('backend.order.delete');
Route::get('orders/complete/{id?}','Backend\OrderController@complete')->name('backend.order.complete');

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

