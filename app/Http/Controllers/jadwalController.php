<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\mapel;
use App\Models\jadwal;

class jadwalController extends Controller
{
    public function index(){
        $jadwal = jadwal ::orderBy('created_at', 'asc')->get();
        return view('jadwal.index', compact('jadwal'));
    }

    public function create(){
        $kelas = kelas::all();
        $mapel = mapel::all();
        return view('jadwal.create', compact('kelas', 'mapel'));
    }

    public function store(Request $request){
        $this->validate($request, [
            "hari",
            "kelas_id",
            "mapel_id" => "required",
            "waktu" => "required"
        ]);
        jadwal::create([
            "hari"=>$request->hari,
            "mapel_id" => $request->mapel_id,
            "kelas_id"=>$request->kelas_id,
            "waktu"=> $request->waktu
        ]);
        return redirect()->route('jadwal.index')->with(['success', 'berhasil ditambah']);
    }

    public function edit($id){
        $kelas = kelas::all();
        $mapel = mapel::all();
        $jadwal = jadwal::where('id', $id)->first();
        return view('jadwal.edit', compact('kelas', 'jadwal', 'mapel'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            "hari" => "required",
            "kelas_id" => "required",
            "mapel_id" => "required",
            "waktu" => "required"
        ]);
        $jadwal = jadwal::find($id);
        $jadwal->update([
            "hari" => $request->hari,
            "mapel_id" => $request->mapel_id,
            "kelas_id" => $request->kelas_id,
            "waktu"=> $request->waktu
        ]);
        return redirect()->route('jadwal.index')->with(['success', 'berhasil diubah']);
        
    }

    public function destroy($id){
        jadwal::where('id', $id)->delete();
        return redirect()->route('jadwal.index')->with(['success', 'berhasil dihapus']);
    }
}
