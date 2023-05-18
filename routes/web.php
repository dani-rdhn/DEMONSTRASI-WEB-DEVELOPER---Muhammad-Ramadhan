<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\HomeController@index');

// Route::get('/article', [articlecontroller::class, 'index']); 
// Route::get('/article', [articlecontroller::class, 'index']); 
// Route::get('/article', 'App\Http\Controllers\articlecontroller@index');
Route::get('/article', 'App\Http\Controllers\articlecontroller@article');
Route::get('/checkout', 'App\Http\Controllers\HomeController@checkout');
Route::get('/product-page', 'App\Http\Controllers\HomeController@product');
Route::get('/about', 'App\Http\Controllers\HomeController@why');
Route::get('/testimonial', 'App\Http\Controllers\HomeController@client');

// Route::get('/redirect', [HomeController::class, 'redirect']); 
Route::get('/home', 'App\Http\Controllers\articlecontroller@home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/redirect', [HomeController::class, 'redirect']); 
Route::get('/redirect', 'App\Http\Controllers\HomeController@redirect');

Route::get('/view_category', 'App\Http\Controllers\AdminController@view_category');
Route::post('/add_category', 'App\Http\Controllers\AdminController@add_category');
Route::get('/delete_category/{id}', 'App\Http\Controllers\AdminController@delete_category');
Route::get('/view_product', 'App\Http\Controllers\AdminController@view_product');
Route::post('/add_product', 'App\Http\Controllers\AdminController@add_product');
// Route::get('/order', 'App\Http\Controllers\AdminController@order'); 
Route::get('/order_product', 'App\Http\Controllers\AdminController@order_product');

Route::get('/product_details/{id}', 'App\Http\Controllers\HomeController@product_details');
Route::post('/add_cart/{id}', 'App\Http\Controllers\HomeController@add_cart');
Route::get('/show_cart', 'App\Http\Controllers\HomeController@show_cart');
Route::get('/remove_cart/{id}', 'App\Http\Controllers\HomeController@remove_cart');
Route::get('/order', 'App\Http\Controllers\HomeController@order');
// Route::get('/stripe_order', 'App\Http\Controllers\HomeController@stripe_order');
Route::get('/stripe/{totalprice}', 'App\Http\Controllers\HomeController@stripe');

Route::post('stripe/{totalprice}', 'App\Http\Controllers\HomeController@stripePost')->name('stripe.post');

