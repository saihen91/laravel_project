<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majikan extends Model
{
    protected $table = 'majikan';

    protected $fillable = [
        'kod_majikan',
        'nama_majikan',
        'alamat_majikan'
        // Add other fillable attributes here as needed
    ];
    //use HasFactory;
}
