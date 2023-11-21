<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\guru;
use App\Models\jurusan;

class kelasController extends Controller
{
    public function index(){
        $kelas = kelas::orderBy('created_at', 'desc')->paginate(5);
        return view('kelas.index', compact('kelas'));
    }

    public function create(){
        $kelas = kelas::all();
        $guru = guru::all();
        $jurusan = jurusan::all();
        return view('kelas.create', compact('kelas', 'jurusan', 'guru'));
    }

    public function store(Request $request){
        $this->validate($request, [
            "nama_kelas" => "required",
            "guru_id" => 'required',
            "jurusan_id" =>'required',
            "jumlah_siswa" => 'required'
        ]);

        kelas::create([
            "nama_kelas" => $request->nama_kelas,
            "guru_id" => $request->guru_id,
            "jurusan_id" => $request->jurusan_id,
            "jumlah_siswa" => $request->jumlah_siswa
        ]);
        return redirect()->route('kelas.index')->with(['success'=>'berhasil ditambah']);
    }

    public function edit($id){
        $guru = guru::all();
        $jurusan = jurusan::all();
        $kelas = kelas::where('id', $id)->first();
        return view('kelas.edit', compact('kelas', 'guru', 'jurusan'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            "nama_kelas" => "required",
            "guru_id" => 'required',
            "jurusan_id" =>'required',
            "jumlah_siswa" => 'required'
        ]);

        $kelas = kelas::find($id);
        $kelas->update([
            "nama_kelas" => $request->nama_kelas,
            "guru_id" => $request->guru_id,
            "jurusan_id" => $request->jurusan_id,
            "jumlah_siswa" => $request->jumlah_siswa
        ]);
        return redirect()->route('kelas.index')->with(['success'=>'berhasil diubah']);
    }

    public function destroy($id){
        
        kelas::where('id', $id)->delete();
        return redirect()->route('kelas.index')->with(['success'=>'berhasil diubah']);
    }
}
