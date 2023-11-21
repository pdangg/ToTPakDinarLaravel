<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Siswa extends Model
{
    protected $table = 'siswa';
    use HasFactory;

    protected $fillable = [
        'nama variable',
    ];
}
