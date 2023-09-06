<?php

namespace App\Http\Controllers;

use App\Models\Majikan;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function majikan_list(){
        $data = [
            'title' => 'Senarai Majikan',
            'age' => 30,
        ];
        return view('majikan-list')->with($data);
    }

    public function tambah_majikan(Request $request){
        // Validate the request data                                                                 
        $request->validate([                          
            'kod_majikan' => 'required|string',
            'nama_majikan' => 'required|string',
            'alamat_majikan' => 'required|string',
        ]);

        // Create a new Post instance and save it to the database
        $post = new Majikan([
            'kod_majikan' => $request->input('kod_majikan'),
            'nama_majikan' => $request->input('nama_majikan'),
            'alamat_majikan' => $request->input('alamat_majikan'),
        ]);
        $post->save();

        // Redirect to a success page or return a response
        //return redirect('/posts')->with('success', 'Post created successfully');
        return redirect('/majikan-list');
    }
}
