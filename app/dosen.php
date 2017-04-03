<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];
	protected $table = 'dosen'
    public function pengguna()
    {
    	return $this->belongTo(pengguna::class);
    }
    public function dosen_matakuliah()
    {
    	return $this->hasOne(Dosen_Matakuliah::class);
    }
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }
    
    public function listdosenDannip(){
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
        }
        return $out;
    }

    public function listdosenDanmatakuliah()
    {
        $out = [];
        foreach ($this->all() as $dsnMtk) {
            $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} {$dsnMtk->dosen->nip} (matakuliah {$dsnMtk->matakuliah->title})";
        }
        return $out;
    }
}

}
