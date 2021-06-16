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

Route::get('google', function () {
    return view('googleAuth');
});

Route::get('redirect/{driver}', 'App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('redirectToProvider');
Route::get('{driver}/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback')->name('handleProviderCallback');

Route::get('/', function () {
    return view('welcome');
});

Route::get('login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');

//auth -> admin || karyawan || pelanggan

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('/admin', 'App\Http\Controllers\adminController@index')->name('admin'); 
    });

    Route::group(['middleware' => ['cek_login:karyawan']], function(){
        Route::get('/karyawan', 'App\Http\Controllers\karyawanController@index')->name('karyawan');
    });

    Route::group(['middleware' => ['cek_login:pelanggan']], function(){
        Route::get('/pelanggan', 'App\Http\Controllers\pelangganController@index')->name('pelanggan');
        
    });
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/transaksi','App\Http\Controllers\adminController@transaksi');
Route::get('/admin/transaksi/transtambah','App\Http\Controllers\adminController@transtambah');
Route::post('/admin/transaksi/simpanTrans','App\Http\Controllers\adminController@simpanTrans')->name('simpanTrans'); 
Route::get('/admin/transaksi/edit/{id_transaksi}', 'App\Http\Controllers\adminController@edit')->name('edit');
Route::put('/admin/transaksi/updated/{id_transaksi}', 'App\Http\Controllers\adminController@updated');
Route::get('/admin/transaksi/opendokumen/{id_transaksi}','App\Http\Controllers\adminController@opendokumen');


Route::get('/transaksi', 'App\Http\Controllers\TransaksiController@index');
Route::get('/transaksi/export_excel', 'App\Http\Controllers\TransaksiController@export_excel');

        
Route::get('/karyawan/pemesanan','App\Http\Controllers\karyawanController@pemesanan');
Route::get('/karyawan/pemesanan/edit/{id_transaksi}', 'App\Http\Controllers\karyawanController@edit')->name('edit');
Route::put('/karyawan/pemesanan/updated/{id_transaksi}', 'App\Http\Controllers\karyawanController@updated');

Route::get('/pelanggan/pesan','App\Http\Controllers\pelangganController@pesan');
Route::get('/pelanggan/pesanan','App\Http\Controllers\pelangganController@pesanan');
Route::post('/pelanggan/pesan/simpanPesan','App\Http\Controllers\pelangganController@simpanPesan')->name('simpanPesan');
Route::get('/pelanggan/pesan/edit/{id_transaksi}', 'App\Http\Controllers\pelangganController@edit')->name('edit');
Route::put('/pelanggan/pesan/updated/{id_transaksi}', 'App\Http\Controllers\pelangganController@updated');
Route::get('/pelanggan/pesan/opendokumen/{id_transaksi}','App\Http\Controllers\pelangganController@opendokumen');
Route::get('/pelanggan/pesan/informasi','App\Http\Controllers\pelangganController@informasi')->name('informasi');

