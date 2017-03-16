<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function awal()
    {
    	return "Kontrol Mahasiswa";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Luna Siria';
    	$mahasiswa->nim = '1515015001';
    	$mahasiswa->alamat = 'Jl. Melati';
    	$mahasiswa->pengguna_id = '1';
    	$mahasiswa->save();
    	return "Data Dengan Nama mahasiswa {$mahasiswa->nama} Telah Disimpan";
    }
}
