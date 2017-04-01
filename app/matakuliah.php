<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'Matakuliah';
    protected $fillable = ['title','keterangan'];

    public function dosen_matakuliah()
    {
    	return $this->hasMany(Dosen_matakuliah::class);
    }
    /* matakuliah hanya berelasi dengan model Dosen_matakuliah dengan derajat 1 to many
    	hasMany artinya id_matakuliah dijadikan foreign key di tabel dosenmatakuliah */
}

