<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;
class dosen_matakuliahcontroller extends Controller
{
     public function awal()
    {
    	return "hello dari dosen_matakuliah";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen_matakuliah = new dosen_matakuliah();
    	$dosen_matakuliah->id = '1';
    	$dosen_matakuliah->save();
    	return "data dengan username {$dosen_matakuliah->id} telah disimpan";

    }
}


