<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
    protected $table = 'Dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function matakuliah() //menambah fungsi matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }   //belongsTo artinya ada field sebagai foreign key (matakuliah_id) dengan primary keynya di tabel matakuliah

    public function dosen() //menambah fungsi dosen()
    {
    	return $this->belongsTo(Dosen::class);
    }   //mengambil primarykey dari table model Dosen

    public function jadwal_mahasiswa() //menambah fungsi mahasiswa()
    {
    	return $this->hasMany(Jadwal_mahasiswa::class);
    }   //id_dosen matakuliah sebagai foreign key ke tabel Jadwal_mahasiswa 
}

