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

Route::get('/gi', function () {
    return view('welcome');
});
Route::get('/create', 'BukuController@CreateView')->name('view');
Route::post('/create', 'BukuController@create')->name('add');
Route::get('/view', 'BukuController@ViewAll')->name('ViewAll');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/update/{id}', 'BukuController@UpdateForm')->name('ShowForm');
Route::patch('update/{id}', 'BukuController@Update')->name('Update');
Route::delete('delete/{id}', 'BukuController@Delete')->name('DeleteBuku');
Auth::routes();


