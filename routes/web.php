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

Route::get('/tambah', function () {
    return view('admin_tambahuser');
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
Route::get('/admin/pendapatan','App\Http\Controllers\adminController@pendapatan');
Route::get('/admin/transaksi/filter','adminController@inboxFilter')->name('inbox.filter');
Route::get('/admin/data_user','App\Http\Controllers\adminController@data_user')->name('data_user'); 
Route::get('/admin/input_user','App\Http\Controllers\adminController@input_user')->name('input_user'); 
Route::post('/admin/simpan_user','App\Http\Controllers\adminController@simpan_user')->name('simpan_user'); 
Route::resource('/admin/daterange', 'App\Http\Controllers\adminController@filter');
Route::post('/admin/transaksi/searchBydate','App\Http\Controllers\adminController@searchBydate')->name('searchBydate'); 
Route::get('/admin/dataCuci','App\Http\Controllers\adminController@dataCuci')->name('dataCuci'); 
Route::get('/admin/input_gratis','App\Http\Controllers\adminController@input_gratis')->name('input_gratis'); 
Route::post('/admin/simpan_gratis','App\Http\Controllers\adminController@simpan_gratis')->name('simpan_gratis'); 
// Route::get('/admin/hitung_pend','App\Http\Controllers\adminController@hitung_pend')->name('hitung_pend'); 




Route::get('/transaksi', 'App\Http\Controllers\TransaksiController@index');
Route::get('/transaksi/export_excel', 'App\Http\Controllers\TransaksiController@export_excel');

        
Route::get('/karyawan/pemesanan','App\Http\Controllers\karyawanController@pemesanan');
Route::get('/karyawan/pemesanan/edit/{id_transaksi}', 'App\Http\Controllers\karyawanController@edit')->name('edit');
Route::put('/karyawan/pemesanan/updated/{id_transaksi}', 'App\Http\Controllers\karyawanController@updated');
Route::get('/karyawan/pendapatan','App\Http\Controllers\karyawanController@pendapatan');


Route::get('/pelanggan/pesan','App\Http\Controllers\pelangganController@pesan');
Route::get('/pelanggan/pesanan','App\Http\Controllers\pelangganController@pesanan');
Route::post('/pelanggan/pesan/simpanPesan','App\Http\Controllers\pelangganController@simpanPesan')->name('simpanPesan');
Route::get('/pelanggan/pesan/edit/{id_transaksi}', 'App\Http\Controllers\pelangganController@edit')->name('edit');
Route::put('/pelanggan/pesan/updated/{id_transaksi}', 'App\Http\Controllers\pelangganController@updated');
Route::get('/pelanggan/pesan/opendokumen/{id_transaksi}','App\Http\Controllers\pelangganController@opendokumen');
Route::get('/pelanggan/pesan/informasi','App\Http\Controllers\pelangganController@informasi')->name('informasi');

