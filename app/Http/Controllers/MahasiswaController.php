<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('about', [
            'nama'  => 'Yola Octaviano Lukito',
            'nim'   => '20230140038',
            'prodi' => 'Teknologi Informasi',
            'hobi'  => 'Coding & Gaming'
        ]);
    }
}