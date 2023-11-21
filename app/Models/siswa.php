<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $fillable = [
        "nama_siswa",
        "tanggal_lahir",
        "tempat_lahir",
        "nisn",
        "alamat",
        "foto"
    ];

}
