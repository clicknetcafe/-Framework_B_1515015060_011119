<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

      /*Pada skrip model ini kita menambahkan fungsi dosen_matakuliah() dengan hubungan hasMany() terhadap model Dosen_matakuliah dengan acuan field id dosen
      */
    public function dosen_matakuliah()
   	{
   		return $this->hasMany(Dosen_matakuliah::class);
   	}
    /*Dibawahnya juga menambahkan fungsi pengguna() dengan hubungan belongsToMany() terhadap model Pengguna dengan field “pengguna_id”*/

    public function pengguna()
    {
      return $this->belongsTo(Pengguna::class);
    }
}
