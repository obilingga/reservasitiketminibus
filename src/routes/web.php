<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BusController;
use \App\Http\Controllers\PelangganController;
use \App\Http\Controllers\PemesananController;
use \App\Http\Controllers\KaryawanController;
use \App\Http\Controllers\KeberangkatanController;
use \App\Http\Controllers\PembayaranController;



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


Route::get('/home', function () {
    return view('home');
})->name('home.index');

Route::get('/home', function () {
    return view('home');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
})->name('pemesanan.index');


Route::get('/bus', function () {
    return view('bus');
})->name('bus.index');




Route::get('/karyawan', function () {
    return view('karyawan');
})->name('karyawan.index');

Route::get('/keberangkatan', function () {
    return view('keberangkatan');
})->name('keberangkatan.index');

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran.index');




Auth::routes();
Route::get('/home', [PelangganController::class, 'index'])
->name('home.index');

Route::get('/home/hapus/{id}',[PelangganController::class,'hapus'])
->name('home.hapus');

Route::get('/home/tampil/{id}',[PelangganController::class,'tampil'])
->name('home.tampil');

Route::POST('/pelanggan/simpan', [PelangganController::class, 'simpan'])
->name('pelanggan.simpan');

Route::post('/home/rubah/{id}',[PelangganController::class,'update'])
->name('home.update');






Route::get('/bus', [BusController::class, 'index'])
->name('bus.index');

Route::get('/bus/hapus/{id}',[BusController::class,'hapus'])
->name('bus.hapus');

Route::get('/bus/tampil/{id}',[BusController::class,'tampil'])
->name('bus.tampil');

Route::post('/bus/simpan', [BusController::class, 'simpan'])
->name('bus.simpan');

Route::post('/bus/rubah/{id}',[BusController::class,'update'])
->name('bus.update');





Route::get('/pemesanan', [PemesananController::class, 'index'])
->name('pemesanan.index');

Route::get('/pemesanan/hapus/{id}',[PemesananController::class,'hapus'])
->name('pemesanan.hapus');

Route::get('/pemesanan/tampil/{id}',[PemesananController::class,'tampil'])
->name('pemesanan.tampil');

Route::POST('/pemesanan/simpan', [PemesananController::class, 'simpan'])
->name('pemesanan.simpan');

Route::post('/pemesanan/rubah/{id}',[PemesananController::class,'update'])
->name('pemesanan.update');






Route::get('/keberangkatan', [KeberangkatanController::class, 'index'])
->name('keberangkatan.index');

Route::get('/keberangkatan/hapus/{id}',[KeberangkatanController::class,'hapus'])
->name('keberangkatan.hapus');

Route::get('/keberangkatan/tampil/{id}',[KeberangkatanController::class,'tampil'])
->name('keberangkatan.tampil');

Route::POST('/keberangkatan/simpan', [KeberangkatanController::class, 'simpan'])
->name('keberangkatan.simpan');

Route::post('/keberangkatan/rubah/{id}',[KeberangkatanController::class,'update'])
->name('keberangkatan.update');


















Route::get('/karyawan', [KaryawanController::class, 'index'])
->name('karyawan.index');

Route::get('/karyawan/hapus/{id}',[KaryawanController::class,'hapus'])
->name('karyawan.hapus');

Route::get('/karyawan/tampil/{id}',[KaryawanController::class,'tampil'])
->name('karyawan.tampil');

Route::POST('/karyawan/simpan', [KaryawanController::class, 'simpan'])
->name('karyawan.simpan');

Route::post('/karyawan/rubah/{id}',[KaryawanController::class,'update'])
->name('karyawan.update');



Route::get('/pembayaran', [PembayaranController::class, 'index'])
->name('pembayaran.index');

Route::get('/pembayaran/hapus/{id}',[PembayaranController::class,'hapus'])
->name('pembayaran.hapus');

Route::get('/pembayaran/tampil/{id}',[PembayaranController::class,'tampil'])
->name('pembayaran.tampil');

Route::POST('/pembayaran/simpan', [PembayaranController::class, 'simpan'])
->name('pembayaran.simpan');

Route::post('/pembayaran/rubah/{id}',[PembayaranController::class,'update'])
->name('pembayaran.update');








