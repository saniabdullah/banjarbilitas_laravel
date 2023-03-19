<?php

use Illuminate\Support\Facades\Route;

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

$controller_path = 'App\Http\Controllers';

// Route::get('/', function () {
//     return view('welcome');
// });

// home dan detail
Route::get('/home', $controller_path . '\HomeController@index')->name('pages-home');
Route::get('/detail/{id}', $controller_path . '\HomeController@detail')->name('detail-page');

// admin
Route::get('/admin', $controller_path . '\AdminController@index')->name('admin-page');
Route::post('/admin/add', $controller_path . '\AdminController@add_lowongan')->name('admin-page-add');
Route::delete('admin/{id}', $controller_path . '\AdminController@delete_lowongan')->name('delete-lowongan');

// cari lowongan
Route::get('/cari-lowongan', $controller_path . '\CariLowonganController@index')->name('cari-lowongan-page');
Route::post('/cari-lowongan', $controller_path . '\CariLowonganController@index')->name('cari-lowongan-page');

// registration
Route::post('/register', $controller_path . '\RegisterController@add')->name('register');


// login
Route::post('/login', $controller_path . '\LoginController@authenticate')->name('login');

// profile
Route::get('/profile', $controller_path . '\ProfileController@index')->name('profile-page');
Route::put('/profile/{id}', $controller_path . '\ProfileController@update')->name('profile-page-update');



