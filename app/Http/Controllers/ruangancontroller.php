<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;
class ruangancontroller extends Controller
{
     public function awal()
    {
    	return "hello dari ruangan";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$ruangan = new ruangan();
    	$ruangan->id = '1';
    	$ruangan->save();
    	return "data dengan username {$ruangan->id} telah disimpan";

    }
}






