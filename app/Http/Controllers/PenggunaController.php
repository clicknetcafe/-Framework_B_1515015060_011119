<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pengguna;

class PenggunaController extends Controller
{
    public function awal()
	{	
		return "Hello dari Hirano";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$pengguna = new Pengguna();
		$pengguna->username = 'don_jon';
		$pengguna->password = 'jon_don';
		$pengguna->save();
		return "data dengan username {$pengguna->username} telah disimpan";
	}
	public function hapus()
	{
		return $this->delete();
	}
	public function delete()
	{
		$pengguna = new pengguna();
		$pengguna = pengguna::find(2);
		$pengguna->delete();
	}
}
