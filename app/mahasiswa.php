<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    /* fungsi pengguna untuk merelasikan dengan model Pengguna dengan acuan field "pengguna_id" */
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    /* fungsi jadwal_mahasiswa yang mempunyai relasi 1 to many dengan model Jadwal_mahasiswa
         dimana setiap mahasiswa dapat mempunyai banyak jadwal*/
    public function jadwal_mahasiswa()
    {
        return $this->hasMany(Jadwal_mahasiswa::class);
    }
}

