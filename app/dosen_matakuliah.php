<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    //
    protected $table = 'dosen_matakuliah';
    protected $guarded = ['id'];

    public function dosen() //menambah fungsi dosen()
    {
    	return $this->belongsTo(dosen::class);
        //mengambil primarykey dari table model Dosen
    }

    public function matakuliah() //menambah fungsi matakuliah()
    {
    {
    	return $this->belongsTo(matakuliah::class);
        //belongsTo artinya ada field sebagai foreign key (matakuliah_id) dengan primary keynya di tabel matakuliah

    }

    public function jadwal_matakuliah() //menambah fungsi matakuliah()
    {
    	return $this->hasMany(jadwal_matakuliah::class);
        
    }

    public function listdosenmatakuliah()
    {
        $out = [];
        foreach ($this->all() as $dsnmtk)
        {
            $out[$dsnmtk->id] = "{$dsnmtk->dosen->nama} (matakuliah {$dsnmtk->matakuliah->title})";
        }
        return $out;
    }
}