<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    //
    protected $table = 'jadwal_matakuliah';
    protected $guarded = ['id'];

    public function mahasiswa() //deklarasi fungsi mahasiswa()mahasiswa
    {
    	return $this->belongsTo(mahasiswa::class);
    	//menyimpan nilai primary key dari model Mahasiswa sebagai foreign key
    }
    public function ruangan()  //deklarasi fungsi dosen_matakuliah()
    {
    	return $this->belongsTo(ruangan::class);
    	//menyimpan nilai primary key model Dosen_matakuliah sebagai foreign key

    }
    public function dosen_matakuliah() //membuat fungsi dengan nama dosen_matakuliah
    {
    	return $this->belongsTo(dosen_matakuliah::class);
    	 //menyimpan nilai primary key model Ruangan sebagai foreign key
}
    }
}
