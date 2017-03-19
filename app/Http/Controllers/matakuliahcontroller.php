<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;
class matakuliahcontroller extends Controller
{
       public function awal()
    {
    	return "hello dari matakuliah";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->id = '1';
    	$matakuliah->save();
    	return "data dengan username {$matakuliah->id} telah disimpan";

    }
}




