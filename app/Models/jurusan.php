<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;
    protected $table = "jurusan";
    protected $fillable = [
        "nama_jurusan"
    ];
    protected $primarykey = "id";

    public function kelas(){
        return $this->hasmany('App\Models\kelas');
    }
}
