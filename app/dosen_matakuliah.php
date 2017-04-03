<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
      protected $table = 'dosen_matakuliah';
  	  protected $fillable = ['id','dosen_id','matakuliah_id','created_at','updated_at'];
}
 // protected $guarded = ['id'];

    public function dosen()
    {
        return $this->belongsTo(dosen::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(matakuliah::class);
    }

       public function jadwal_matakuliah()
    {
        return $this->hasMany(jadwal_matakuliah::class);
    }

    public function getNamadosenAttribute(){
        return $this->dosen->nama;
    }

    public function getNipdosenAttribute(){
        return $this->dosen->nip;
    }
    
    public function getTitlematakuliahAttribute(){
        return $this->matakuliah->title;
    }

    public function listDosenDanMatakuliah()
    {
    	$out = [];
    	foreach ($this->all() as $dsnMtk) {
    		$out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} {$dsnMtk->dosen->nip} (Matakuliah {$dsnMtk->matakuliah->title})";
    	}
    	return $out;
    }
}

