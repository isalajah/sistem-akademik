<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class dashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            return view('admin.dashboard');
        }elseif(Auth::user()->role == 'users'){
            return view('user.dashboard');
        }else{
            abort(404, 'Tampilan dengan Role'. Auth::user()->role . 'tidak ada');
        }
    }
}
