<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;

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
