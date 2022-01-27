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

/*
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/sma', function () {
    return view('sma');
});

Route::get('/smk', function () {
    return view('smk');
});
*/


Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/tes', function () {
    return view('tes');
});

//route sma
Route::get('/sma', 'App\Http\Controllers\SmaController@index');
Route::get('/sma/{sma}', 'App\Http\Controllers\SmaController@show');

//route rute sma
Route::get('/rutesma', 'App\Http\Controllers\RuteSmaController@index');
Route::get('/rutesma/{sma}', 'App\Http\Controllers\RuteSmaController@show');

//route rute smk
Route::get('/rutesmk', 'App\Http\Controllers\RuteSmkController@index');
Route::get('/rutesmk/{smk}', 'App\Http\Controllers\RuteSmkController@show');

//route smk
Route::get('/smk', 'App\Http\Controllers\SmkController@index');
Route::get('/smk/{smk}', 'App\Http\Controllers\SmkController@show');

Route::get('/mapsma', 'App\Http\Controllers\MapSmaController@index');
Route::get('/mapsmk', 'App\Http\Controllers\MapSmkController@index');
Route::get('/admin', 'App\Http\Controllers\AdminController@index');

//route admin (jetstream)
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//tampil data
Route::get('/datasma', 'App\Http\Controllers\DataSMAController@index');

//route insert data SMAN (tambah data)
Route::get('/datasma/create', 'App\Http\Controllers\DataSMAController@create');
Route::post('/datasma/create', 'App\Http\Controllers\DataSMAController@store');

//route ubah data SMAN
Route::get('/datasma/{datasma}/edit', 'App\Http\Controllers\DataSMAController@edit');
Route::patch('/datasma/{datasma}', 'App\Http\Controllers\DataSMAController@update');

//route hapus data SMAN
Route::delete('/datasma/{datasma}', 'App\Http\Controllers\DataSMAController@destroy');

//route all in CRUD data SMA
// Route::resource('datasma', 'App\Http\Controllers\DataSMAController');
// Route::resource('datasmk', 'App\Http\Controllers\DataSMKController');

//tampil data
Route::get('/datasmk', 'App\Http\Controllers\DataSMKController@index');

//tambah data SMKN
Route::get('/datasmk/create', 'App\Http\Controllers\DataSMKController@create');
Route::post('/datasmk/create', 'App\Http\Controllers\DataSMKController@store');

//ubah data SMKN
Route::get('/datasmk/{datasmk}/edit', 'App\Http\Controllers\DataSMKController@edit');
Route::patch('/datasmk/{datasmk}', 'App\Http\Controllers\DataSMKController@update');

//hapus data SMKN
Route::delete('/datasmk/{datasmk}', 'App\Http\Controllers\DataSMKController@destroy');

//data about&pesan
Route::get('/dataabout', 'App\Http\Controllers\DataPesanController@index');
Route::get('/pesan/create', 'App\Http\Controllers\DataPesanController@create');
Route::post('/pesan/create', 'App\Http\Controllers\DataPesanController@store');
Route::delete('/dataabout/{pesan}', 'App\Http\Controllers\DataPesanController@destroy');