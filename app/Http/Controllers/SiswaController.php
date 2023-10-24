<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa()
    {
        $nama = "Nazir Mahmudi Lubis";
        $umur = "20";
        return view("siswa", compact("nama", "umur"));
    }
}
