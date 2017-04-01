<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'Pengguna';
    protected $fillable = ['username','password'];

    public function dosen() //deklarasi fungsi dosen
    {
        return $this->hasOne(Dosen::class);
    }   // hasOne artinya mempunyai relasi ke table Dosen yang berderajat 1

    public function mahasiswa() //deklarasi fungsi mahasiswa
    {
    	return $this->hasOne(Mahasiswa::class);
    }   // table mahasiswa juga berderajat relasi 1

    // public function mahasiswa() //deklarasi fungsi mahasiswa
    // {
    //     return $this->belongsToMany(Peran::class);
    // }   // belongsToMany artinya mempunyai foreign key dari model table
}
