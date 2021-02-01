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

Route::get('/', 'HomeController@index')
  ->name('home');
  
Route::get('/jadwal-ibadah', 'JadwalController@index')
  ->name('jadwal');

Route::get('/laporan-keuangan', 'LaporanController@index')
  ->name('laporan');

Route::get('/hut', 'HutController@index')
  ->name('hut');

Route::get('/surat', 'SuratController@index')
  ->name('surat');
Route::get('/isi-surat/{id}', 'SuratController@show')
  ->name('isi-surat');

// Untuk Halaman Statis

Route::get('/organisasi', 'HomeController@organisasi')
  ->name('organisasi');

Route::get('/pengakuan-iman', 'HomeController@pengakuan')
  ->name('pengakuan');

// Untuk  Halaman Admin

Route::prefix('admin')
  ->namespace('Admin')
  ->middleware(['auth', 'admin'])
  ->group(function() {
    Route::get('/', 'DashboardController@index')
      ->name('dashboard');

    Route::get('periode/{id}', 'DashboardController@edit')
      ->name('periode');
    Route::put('/edit/{id}','DashboardController@update')
      ->name('edit');

    Route::resource('ibadah-minggu', 'IbadahMingguController');
    Route::resource('ibadah-arpib-kolom', 'IbadahArpibKolomController');
    Route::resource('sampul-syukur', 'SampulSyukurController');
    Route::resource('sampul-hut', 'SampulHutController');
    Route::resource('persembahan-kunjungan', 'PersembahanKunjunganController');
    Route::resource('persembahan-arpib-kolom', 'PersembahanArpibKolomController');
    Route::resource('laporan-keuangan', 'LaporanKeuanganController');
    Route::resource('hut', 'HutController');
    Route::resource('surat', 'SuratController');
  });
Auth::routes(['verify' => true]);