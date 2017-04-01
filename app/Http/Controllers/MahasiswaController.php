<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Syahrul Andi Subakti";
    	$mahasiswa->nim = "1515015060";
    	$mahasiswa->alamat = "Loa Buah RT.6 Sungai Kunjang";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
    }
    public function mahasiswa()
    {
        $mahasiswa = mahasiswa::all();
        //dd($mahasiswa);
        foreach ($mahasiswa as $mhs) {

        
        echo "Nama : ".$mhs->nama;
        echo "<br>";
        echo "Username : ".$mhs->pengguna->username;
        echo "<br>";
        }

    }
}
