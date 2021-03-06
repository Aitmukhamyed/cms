<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\User\DashboardController;


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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});


Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/order', [OrderController::class, 'index']);
    Route::post('/orderadd', 'OrderController@store');
    Route::get('/permission', [PermissionController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



    // Route::get('dashboard', 'DashboardController@index')->name('dashboard');