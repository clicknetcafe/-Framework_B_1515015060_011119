<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model implements AuthenticatableContract
{
    use Authenticatable;
    //
    protected $table = 'pengguna';
    //protected $fillable = ['username','password'];
    protected $guarded = ['id'];
    
    public function mahasiswa() // membuat fungsi dengan nama mahasiswa
    {
    	return $this->hasOne(mahasiswa::class);
    	// hasOne artinya mempunyai relasi ke table Dosen yang berderajat 1
    }
    public function dosen() //membuat fungs dengan nama dosen
    {
    	return $this->hasOne(dosen::class);
    	//sintaks ini menghubungkan antara model dosen dengan model pengguna, yang artinya kita bisa mengakses isi dari model dosen melalui model pengguna. sintaks hasOne sendiri menandakan hubungan relasinya adalah one to one
    }
    public function peran()
    {
    	return $this->belongsToMany(peran::class);
    }
}
