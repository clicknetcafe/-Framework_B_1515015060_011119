<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal(){
    	return "Hello dari DosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new Dosen();
    	$dosen->nama = "Syahrul Andi Subakti";
    	$dosen->nip = "1515015060";
    	$dosen->alamat = "Loa Buah Sungai Kunjang";
    	$dosen->pengguna_id = 1;
    	$dosen->save();
    	return "Data Dosen dengan Nama {$dosen->nama} telah disimpan";
}
}