<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table="kelas";
    protected $fillable=[
        "nama_kelas",
        "jurusan_id",
        "guru_id",
        "jumlah_siswa",
    ];

    public function guru(){
        return $this->belongsTo('App\Models\guru');
    }

    public function jurusan(){
        return $this->belongsTo('App\Models\jurusan');
    }

    public function jadwal(){
        return $this->hasmany('App\Models\jadwal');
    }

}
