<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
     protected $table = 'ruangan';
     protected $fillable = ['id','title','created_at','updated_at'];

     	public function jadwal_matakuliah(){
   	return $this->hasMany(jadwal_matakuliah::class);
   }
}
