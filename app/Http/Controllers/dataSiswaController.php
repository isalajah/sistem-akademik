<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dataSiswaController  extends Controller
{
    public function index(){
        $user = User::where('role', 'users')->orderBy('created_at', 'asc')->get();
        return view('dataSiswa.index', compact('user'));
    }
}
