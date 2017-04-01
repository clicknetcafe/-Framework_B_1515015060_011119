<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class Jadwal_mahasiswaController extends Controller
{
    //
    public function awal()
    {
    	return "Kontrol Jadwal_Mahasiswa";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jadwal_mahasiswa = new jadwal_mahasiswa();
    	$jadwal_mahasiswa->mahasiswa_id = '1';
    	$jadwal_mahasiswa->ruangan_id = '1';
    	$jadwal_mahasiswa->dosen_matakuliah_id = '1';
    	$jadwal_mahasiswa->save();
    	return "Data Dengan mahasiswa_id {$jadwal_mahasiswa->mahasiswa_id} Telah Disimpan";
    }
}
