<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_mahasiswa extends Model
{
    protected $table = 'Jadwal_mahasiswa';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

    public function mahasiswa() //deklarasi fungsi mahasiswa()
    {
    	return $this->belongsTo(Mahasiswa::class);
    }   //menyimpan nilai primary key dari model Mahasiswa sebagai foreign key

    public function dosen_matakuliah() //deklarasi fungsi dosen_matakuliah()
    {
    	return $this->belongsTo(Dosen_matakuliah::class);
    }   //menyimpan nilai primary key model Dosen_matakuliah sebagai foreign key
    
    public function ruangan() //dklarasi fungsi ruangan
    {
    	return $this->belongsTo(Ruangan::class);
    }   //menyimpan nilai primary key model Ruangan sebagai foreign key
}