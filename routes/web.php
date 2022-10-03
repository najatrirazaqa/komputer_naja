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
//     return view('welcome');
// });

//route CRUD
Route::get('/komputer', 'KomputerController@index');
Route::get('/komputer/tambah', 'KomputerController@tambah');
Route::post('/komputer/store', 'KomputerController@store');
Route::get('/komputer/edit/{id}', 'KomputerController@edit');
Route::post('/komputer/update', 'KomputerController@update');
Route::get('/komputer/hapus/{id}', 'KomputerController@hapus');

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/home');
});
