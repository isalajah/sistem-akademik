<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    protected $table ="guru";
    protected $fillable =[
        "nama_guru",
        "nip",
        "no_hp",
        "jenis_kelamin",
        "mapel_id"
    ];
    public function mapel(){
        return $this->belongsTo('App\Models\mapel');
    }

    public function kelas(){
        return $this->hasmany('App\Models\kelas');
    }
}
