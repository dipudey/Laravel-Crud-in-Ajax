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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/','crudController@index');
Route::post('/store','crudController@store');
Route::get('edit/{id}','crudController@edit_show');
Route::post('edit/update/{id}','crudController@updateData');
Route::get('delete/{id}','crudController@deleteData');
