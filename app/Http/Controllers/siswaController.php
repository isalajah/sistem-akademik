<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class siswaController extends Controller
{
    public function index(){
        $siswa = siswa::orderBy('created_at', 'desc')->paginate(5);
        return view('siswa.index', compact('siswa'));
    }

    public function create(){
        return view('siswa.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            "nama_siswa" => "required",
            "tanggal_lahir"=>"required",
            "tempat_lahir"=>"required",
            "alamat"=>"required",  
            "nisn"=>"required",  
            "foto"=>"required"
        ]);
        siswa::create([
            "nama_siswa" => $request->nama_siswa,
            "tanggal_lahir" => $request->tanggal_lahir,
            "tempat_lahir" => $request->tempat_lahir,
            "alamat" => $request->alamat,
            "nisn" => $request->nisn,
            "foto" => $request->foto
        ]);
        return redirect()->route('users.index')->with(['success'=>'berhasil ditambah']);
    }

    public function edit($id){
        $siswa = siswa::where('id', $id)->first();
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            "nama_siswa" => "required",
            "tanggal_lahir"=>"required",
            "tempat_lahir"=>"required",
            "alamat"=>"required",
            "nisn"=>"required",
            "foto"=>"required"
        ]);
        $siswa = siswa::find($id);
        $siswa->update([
            "nama_siswa" => $request->nama_siswa,
            "tanggal_lahir" => $request->tanggal_lahir,
            "tempat_lahir" => $request->tempat_lahir,
            "alamat" => $request->alamat,
            "nisn" => $request->nisn,
            "foto" => $request->foto
        ]);
        return redirect()->route('users.index')->with(['success'=>'berhasil diubah']);
    }

    public function destroy($id){
        siswa::where('id', $id)->delete();
        return redirect()->route('siswa.index')->with(['success'=>'berhasil dihapus']);
    }
}
