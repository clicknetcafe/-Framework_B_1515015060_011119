<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    //
    protected $table = 'matakuliah';
    //protected $fillable = ['title','keterangan'];
    protected $guarded = ['id'];

    public function dosen_matakuliah() //membuat fungsi dengan nama dosen_matakuliah
    {
    	return $this->hasMany(dosen_matakuliah::class);
    	    /* matakuliah hanya berelasi dengan model Dosen_matakuliah dengan derajat 1 to many
        hasMany artinya id_matakuliah dijadikan foreign key di tabel dosenmatakuliah */
    }

    public function listmatakuliah()
    {
        $out = [];
        foreach ($this->all() as $mtk)
        {
            $out[$mtk->id] = "{$mtk->title}";
        }
        return $out;
    }
}
