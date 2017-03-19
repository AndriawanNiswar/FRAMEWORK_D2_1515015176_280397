<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
class dosencontroller extends Controller
{
    public function awal()
    {
    	return "hello dari dosencontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->id = '1';
    	$dosen->save();
    	return "data dengan username {$dosen->id} telah disimpan";

    }
}
