<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        $data = [
            'title' => 'Halaman Utama',
            'age' => 30,
        ];
        return view('index')->with($data);
    }

    public function daftar_pengguna() {
        $data = [
            'title' => 'Daftar Pengguna',
            'age' => 30,
        ];
        return view('daftar-pengguna')->with($data);
    }

    public function add_pengguna(Request $request) {
        $incomingFields = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'bahagian' => 'required',
            'jawatan' => 'required'
        ]);
    }
}
