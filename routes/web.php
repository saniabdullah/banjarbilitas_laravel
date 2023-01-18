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
Route::get('/', $controller_path . '\HomeController@index')->name('pages-home');
Route::get('/detail', $controller_path . '\HomeController@detail')->name('detail-page');

// admin
Route::get('/admin', $controller_path . '\AdminController@index')->name('admin-page');
Route::post('/admin/add', $controller_path . '\AdminController@add_lowongan')->name('admin-page-add');

// cari lowongan
Route::get('/cari-lowongan', $controller_path . '\CariLowonganController@index')->name('cari-lowongan-page');


