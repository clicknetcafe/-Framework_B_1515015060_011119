<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    //
    public function awal()
    {
    	return "Kontrol Matakuliah";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'Basis Data';
    	$matakuliah->keterangan = 'Semester 3';
    	$matakuliah->save();
    	return "Data Dengan Nama Matakuliah {$matakuliah->title} Telah Disimpan";
    }
}