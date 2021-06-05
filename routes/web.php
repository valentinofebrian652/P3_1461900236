<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSController;
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
    return view('home0236');
});
Route::get('/kamar0236', [RSController::class, 'kamar']);
Route::get('/tambah_user0236', [RSController::class, 'tambah']);
Route::get('/dokter0236', [RSController::class, 'dokter']);
Route::get('/pasien0236', [RSController::class, 'pasien']);
Route::get('/user0236', [RSController::class, 'user']);
Route::post('/user0236/insert','App\Http\Controllers\RSController@insert')->name('insert');
Route::post('/pasien0236/update','App\Http\Controllers\RSController@update')->name('update');
Route::get('/pasien0236/edit_user0236/{id}','App\Http\Controllers\RSController@edit')->name('edit');
Route::get('/pasien0236/hapus/{id}','App\Http\Controllers\RSController@hapus')->name('hapus');
Route::post('/dokter0236/filter','App\Http\Controllers\RSController@filter')->name('filter');