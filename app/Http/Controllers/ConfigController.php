<?php

namespace App\Http\Controllers;

use App\Models\Majikan;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function majikan_list(){

        $majikanData = Majikan::all();
        return view('majikan-view')->with('title','Senarai Majikan')->with('majikanData',$majikanData);
    }

    public function tambah_majikan(Request $request){
        // Validate the request data                                                                 
        $incomingFields = $request->validate([                          
            'kod_majikan' => 'required|string',
            'nama_majikan' => 'required|string',
            'alamat_majikan' => 'required|string',
        ]);

        $incomingFields['kod_majikan'] = strip_tags($incomingFields['kod_majikan']);
        $incomingFields['nama_majikan'] = strip_tags($incomingFields['nama_majikan']);
        $incomingFields['alamat_majikan'] = strip_tags($incomingFields['alamat_majikan']);

        Majikan::create($incomingFields); 

        return redirect('/majikan-list');
    }

    public function delete_majikan($id){

        // Find the majikan by ID
        $majikan = Majikan::find($id);

        // Check if the majikan exists
        // if (!$majikan) {
        //     return redirect('/posts')->with('error', 'Post not found.');
        // }

        // Delete
        $majikan->delete();
        return redirect('/majikan-list');
    }

    public function view_majikan($id) {
        
        // $majikanData = Majikan::all();

        // $majikan = Majikan::find($id);

        // $data = [
        //     'kod_majikan' => $majikan->kod_majikan,
        //     'nama_majikan' => $majikan->nama_majikan,
        //     'alamat_majikan' => $majikan->alamat_majikan
        // ];

        // return view('/majikan-list')->with('title','Senarai Majikan')->with('majikanData',$majikanData);

        $majikanData = Majikan::all();
        return view('majikan-list')->with('title','Senarai Majikan')->with('majikanData',$majikanData);

    }
}
