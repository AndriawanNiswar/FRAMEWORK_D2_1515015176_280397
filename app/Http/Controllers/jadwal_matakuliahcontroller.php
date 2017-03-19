<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
class jadwal_matakuliahcontroller extends Controller
{
     public function awal()
    {
    	return "hello dari jadwal_matakuliahcontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jadwal_matakuliah = new jadwal_matakuliah();
    	$jadwal_matakuliah->id = '1';
    	$jadwal_matakuliah->save();
    	return "data dengan username {$jadwal_matakuliah->id} telah disimpan";

    }
}


