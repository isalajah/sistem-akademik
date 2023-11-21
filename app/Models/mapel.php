<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;

    protected $table = "mapel";
    protected $fillable = [
        "nama_mapel"
    ];

    public function guru(){
        return $this->hasmany('App\Models\mapel');
    }

    public function jadwal(){
        return $this->hasmany('App\Models\jadwal');
    }
}
