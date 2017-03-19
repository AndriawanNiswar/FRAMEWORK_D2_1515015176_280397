<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class mahasiswacontroller extends Controller
{
     public function awal()
    {
    	return "hello dari mahasiswacontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->id = '1';
    	$mahasiswa->save();
    	return "data dengan username {$mahasiswa->id} telah disimpan";

    }
}

