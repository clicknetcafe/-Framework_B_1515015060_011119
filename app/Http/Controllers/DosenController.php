<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    //
    public function awal()
    {
    	return "Kontrol Dosen";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'Regina Arya';
    	$dosen->nip = 'NP001';
        $dosen->alamat = 'Jl. Melati';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "Data Dengan Nama {$dosen->nama} Telah Disimpan";
    }
}
