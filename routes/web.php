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
Route::get('/article', 'App\Http\Controllers\articlecontroller@index');

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

