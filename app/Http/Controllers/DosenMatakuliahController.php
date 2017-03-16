<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class DosenMatakuliahController extends Controller
{
    //
    public function awal()
    {
    	return "Kontrol Dosen_Matakuliah";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen_matakuliah = new dosen_matakuliah();
    	$dosen_matakuliah->dosen_id = '1';
    	$dosen_matakuliah->matakuliah_id = '1';
    	$dosen_matakuliah->save();
    	return "Data Dengan Dosen_id {$dosen_matakuliah->dosen_id} Telah Disimpan";
    }
}
