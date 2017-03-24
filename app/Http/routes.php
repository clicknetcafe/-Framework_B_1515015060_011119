<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pengguna', 'PenggunaController@awal');
Route::get('Pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('dosen', 'DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');
Route::get('mahasiswa', 'MahasiswaController@awal');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('ruangan', 'Ruangancontroller@awal');
Route::get('ruangan/tambah', 'Ruangancontroller@tambah');
Route::get('ruangan/{ruangan}','Ruangancontroller@lihat');
Route::post('ruangan/simpan','Ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','Ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','Ruangancontroller@update');
Route::get('ruangan/hapus/{ruangan}','Ruangancontroller@hapus');

Route::get('matakuliah', 'Matakuliahcontroller@awal');
Route::get('matakuliah/tambah', 'Matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}','Matakuliahcontroller@lihat');
Route::post('matakuliah/simpan','Matakuliahcontroller@simpan');
Route::get('matakuliah/edit/{matakuliah}','Matakuliahcontroller@edit');
Route::post('matakuliah/edit/{matakuliah}','Matakuliahcontroller@update');
Route::get('matakuliah/hapus/{matakuliah}','Matakuliahcontroller@hapus');

Route::get('dosen_matakuliah', 'Dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah', 'Dosen_matakuliahController@tambah');

Route::get('jadwal_matakuliah', 'Jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah', 'Jadwal_matakuliahController@tambah');

