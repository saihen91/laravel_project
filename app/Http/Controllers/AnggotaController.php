<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function daftar_list() {
        $data = [
            'title' => 'Senarai Permohonan Anggota Baru',
            'age' => 30,
        ];
        return view('daftar-list')->with($data);
    }
}
