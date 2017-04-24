<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MahasiswaRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
		'nama'=>'required',
		'nim'=>'required|integer',
		'alamat'=>'required',
		'username'=>'required|min:5'
		];
		if($this->is('mahasiswa/tambah')) {
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}
