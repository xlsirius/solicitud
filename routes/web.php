<?php

use Illuminate\Support\Facades\Route;

// LiveWire WELLCOME
use Livewire\Wellcome;
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

Route::get('/', \App\Http\Livewire\Wellcome::class)->name('index');

Route::post('/registro', 'App\Http\Controllers\EmpleadoRolTableController@store')->name('reg_empleado');

Route::post('/view_reg/{id}', 'App\Http\Controllers\EmpleadoRolTableController@edit')->name('view_empleado');

Route::put('/update_reg', 'App\Http\Controllers\EmpleadoRolTableController@update')->name('update_empleado');



Route::delete('/del_registro', 'App\Http\Controllers\EmpleadoRolTableController@destroy')->name('del_empleado');

Route::group(['middleware' => 'auth:sanctum', 'verified'], function ()
{
  Route::get('/home', 'App\Http\Controllers\UserController@index')->name('dashboard');

});
