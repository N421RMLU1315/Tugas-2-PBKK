<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function view($npm)
    {
        $nama = 'Najir';

        return view('mahasiswa.view', compact('npm', 'nama'));
    }
    
}

