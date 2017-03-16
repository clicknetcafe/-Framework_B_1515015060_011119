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

Route::get('Hello-world', function () {
	return 'Hello-world';
});

Route::get('pengguna/{pengguna}', function($pengguna) {
	return "Hello-world dari pengguna $pengguna";
});

Route::get('berita/{berita}', function ($berita = "laravel 5") // {} parameter
{
	return "berita $berita belum di baca";
});

Route::get('Pengguna','PenggunaController@awal');
Route::get('Pengguna/tambah','PenggunaController@tambah');
Route::get('Pengguna/hapus','PenggunaController@hapus');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::get('dosenmatakuliah','DosenMatakuliahController@awal');
Route::get('dosenmatakuliah/tambah','DosenMatakuliahController@tambah');

Route::get('jadwalmatakuliah','JadwalMatakuliahController@awal');
Route::get('jadwalmatakuliah/tambah','JadwalMatakuliahController@tambah');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');