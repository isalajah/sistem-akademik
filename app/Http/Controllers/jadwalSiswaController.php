<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;

class jadwalSiswaController extends Controller
{
    public function index(){
        $jadwal = jadwal ::orderBy('created_at', 'asc')->get();
        return view('jadwalSiswa.index', compact('jadwal'));
    }
}
