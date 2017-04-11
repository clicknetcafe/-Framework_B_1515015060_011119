<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    //
    protected $table = 'ruangan';
    //protected $fillable = ['tittle'];
    protected $guarded = ['id'];

    public function jadwal_matakuliah() //membuat fungsi dengan nama jadwal_matakuliah
    {
    	return $this->hasMany(jadwal_matakuliah::class);
    	/* Pada skrip model ini ada penambahan fungsi jadwal_mahasiswa() dengan hubungan hasMany() terhadap model Jadwal_mahasiswa dengan acuan field “id_ruangan” */
    }
}
