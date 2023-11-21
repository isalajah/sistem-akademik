<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class kelasSiswacontroller extends Controller
{
    public function index(){
        $kelas = kelas::orderBy('created_at', 'desc')->paginate(5);
        return view('kelasSiswa.index', compact('kelas'));
    }
}
