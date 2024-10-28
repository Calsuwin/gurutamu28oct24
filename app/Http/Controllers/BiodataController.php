<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function a ()
    {
        return view('biodata1');
    }
    public function b ()
    {
        $namaController = Biodata::$nama;
        $kelasController = Biodata::$kelas;
        $sekolahController = Biodata::$sekolah;
        $alamatController = Biodata::$alamat;
        return view('biomodel' , compact('namaController','kelasController','sekolahController','alamatController'));
    }
}
