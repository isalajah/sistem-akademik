<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mapel;

class mapelController extends Controller
{
    public function index(){
        $mapel = mapel::orderBy('created_at', 'DESC')->paginate(5);
        return view('mapel.index', compact('mapel'));
    }

    public function create(){
        return view('mapel.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            "nama_mapel" => "required"
        ]);
        mapel::create([
            "nama_mapel" => $request->nama_mapel
        ]);
        return redirect()->route('mapel.index')->with(['success'=>'berhasil ditambah']);
    }

    public function edit($id){
        $mapel = mapel::where('id', $id)->first();
        return view('mapel.edit', compact('mapel'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            "nama_mapel" => "required"
        ]);
        $mapel = mapel::find($id);
        $mapel->update([
            "nama_mapel" => $request->nama_mapel
        ]);
        return redirect()->route('mapel.index')->with(['success'=>'berhasil diubah']);
    }

    public function destroy($id){
        mapel::where('id', $id)->delete();
        return redirect()->route('mapel.index')->with(['success'=>'berhasil dihapus']);
    }
}
