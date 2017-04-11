<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    //protected $fillable = ['nim','nama','alamat','pengguna_id'];
    protected $guarded = ['id'];

    public function pengguna() //membuat fungsi dengan nama pengguna
    {
    	return $this->belongsTo(pengguna::class);
        //kebalikan dari hasone di pengguna
    }

    public function jadwal_matakuliah() //membuat fungsi dengan nama jadwal_matakuliah
    {
    	return $this->hasMany(jadwal_matakuliah::class);
        //one to Many dari Mahasiswa (one) ke Jadwal matakuliah (many)

    }

    public function getusernameAttribute()
    {
        return $this->pengguna->username;
    }
    
    public function listmahasiswadannim()
    {
        $out = [];
        foreach ($this->all() as $mhs)
        {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
}