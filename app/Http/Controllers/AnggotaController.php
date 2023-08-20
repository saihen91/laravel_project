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

    public function daftar_mohon() {
        $data = [
            'title' => 'Daftar Permohonan Baru',
            'age' => 30,
        ];
        return view('daftar-mohon')->with($data);
    }
}
