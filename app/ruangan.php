<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'Ruangan';
    protected $fillable = ['title'];

    public function jadwal_mahasiswa()
    {
    	return $this->hasMany(Jadwal_mahasiswa::class);
    }
}	/* Pada skrip model ini ada penambahan fungsi jadwal_mahasiswa() dengan hubungan hasMany() terhadap model Jadwal_mahasiswa dengan acuan field “id_ruangan” */

