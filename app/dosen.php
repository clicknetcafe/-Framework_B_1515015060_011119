<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //
    protected $table = 'dosen';\
    protected $guarded = ['id'];

    public function pengguna() //membuat fungsi dengan nama pengguna
    {
    	return $this->belongsTo(pengguna::class); 
    }

    /*Pada skrip model ini kita menambahkan fungsi dosen_matakuliah() dengan hubungan hasMany() terhadap model Dosen_matakuliah dengan acuan field id dosen
      */
    public function dosen_matakuliah() // membuat fungsi dengan nama dosen_matakuliah
    {
    	return $this->hasMany(dosen_matakuliah::class); 
    }

    /*Dibawahnya juga menambahkan fungsi pengguna() dengan hubungan belongsToMany() terhadap model Pengguna dengan field “pengguna_id”*/
    public function listdosendannip()
    {
        $out = [];
        foreach ($this->all() as $dosen)
        {
            $out[$dosen->id] = "{$dosen->nama} ({$dosen->nip})";
        }
        return $out;
    }
}
