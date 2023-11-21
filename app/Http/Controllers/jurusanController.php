<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;

class jurusanController extends Controller
{
    public function index(){
        $jurusan = jurusan :: orderBy('created_at', 'desc')->paginate(5);
        return view('jurusan.index', compact('jurusan'));
    }

    public function create(){
        return view('jurusan.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            "nama_jurusan" => "required"
        ]);
        jurusan::create([
            "nama_jurusan" => $request->nama_jurusan
        ]);
        return redirect()->route('jurusan.index')->with(['success'=>'berhasil ditambah']);
    }

    public function edit($id){
         $jurusan = jurusan :: where('id', $id)->first();
         return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            "nama_jurusan" => "required"
        ]);

        $jurusan = jurusan :: find($id);
        $jurusan->update([
            "nama_jurusan" => $request->nama_jurusan
        ]);
        return redirect()->route('jurusan.index')->with(['success'=>'berhasil diubah']);
    }

    public function destroy($id){
        jurusan::where('id', $id)->delete();
        return redirect()->route('jurusan.index')->with(['success'=>'berhasil dihapus']);
    }

}
