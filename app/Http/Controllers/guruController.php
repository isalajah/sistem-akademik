<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use App\Models\mapel;

class guruController extends Controller
{
    public function index(){
        $guru = guru::orderBy('created_at', 'desc')->paginate(5);
        return view('guru.index', compact('guru'));
    }

    public function create(){
        $mapel = mapel ::all();
        return view('guru.create', compact('mapel'));
    }

    public function store(Request $request){
        $this->validate($request, [
            "nama_guru" => "required",
            "nip"=>"required",
            "no_hp"=>"required",
            "jenis_kelamin"=>"required",
            "mapel_id"=>"required",
        ]);
        guru::create([
            "nama_guru" => $request->nama_guru,
            "nip" => $request->nip,
            "no_hp" => $request->no_hp,
            "jenis_kelamin" => $request->jenis_kelamin,
            "mapel_id" => $request->mapel_id,
        ]);
        return redirect()->route('guru.index')->with(['success'=>'berhasil ditambah']);
    }

    public function edit($id){
        $mapel = mapel::all();
        $guru = guru::where('id', $id)->first();
        return view('guru.edit', compact('mapel', 'guru'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            "nama_guru" => "required",
            "nip"=>"required",
            "no_hp"=>"required",
            "jenis_kelamin"=>"required",
            "mapel_id"=>"required",
        ]);
        $guru = guru::find($id);
        $guru->update([
            "nama_guru" => $request->nama_guru,
            "nip" => $request->nip,
            "no_hp" => $request->no_hp,
            "jenis_kelamin" => $request->jenis_kelamin,
            "mapel_id" => $request->mapel_id,
        ]);
        return redirect()->route('guru.index')->with(['success'=>'berhasil diubah']);
    }

    public function destroy($id){
        guru::where('id', $id)->delete();
        return redirect()->route('guru.index')->with(['success'=>'berhasil dihapus']);
    }
}
