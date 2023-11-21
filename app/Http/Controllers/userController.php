<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class userController extends Controller
{
    public function index(){
        $user = User::get();
        $count = User::count();
        return view('users.index', ['user'=>User::get(), 'hide'=>User::count(), compact('user')]);
    }

    public function edit($id){
        $user = User::where('id', $id)->first();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "alamat" => "required",
            "tempat_lahir" => "required",
            "tgl_lahir" => "required"
        ]);
        $user = User::find($id);
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "alamat" => $request->alamat,
            "tgl_lahir" => $request->tgl_lahir,
            "tempat_lahir" => $request->tempat_lahir
        ]);
        return redirect()->route('users.index');
    }
}
