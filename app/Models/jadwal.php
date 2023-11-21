<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table="jadwal";
    protected $fillable=[
    "hari",
    "mapel_id",
    "kelas_id",
    "waktu"
    ];

    public function kelas(){
        return $this->belongsTo('App\Models\kelas');
    }

    public function mapel(){
        return $this->belongsTo('App\Models\mapel');
    }
}
