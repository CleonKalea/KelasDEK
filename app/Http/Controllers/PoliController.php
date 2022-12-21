<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class PoliController extends Controller
{
    public function index(){
        return view('admin/poli', [
            "title" => "Poli",
            "daftar" => Poliklinik::all()
        ]);
    }

    public function list($slug){
        return view('admin/daftar_poli', [
            "title" => "Single Post",
            "list" => Poliklinik::find($slug)
        ]);
    }

    public function create(){
        return view('crud/poli-add', [
            "title" => "Poli"
        ]);
    }

    public function store(Request $request)
    {
        $poli = new Poliklinik;

        $poli->nama_poli = $request->nama;
        $poli->desc1 = $request->desc1;
        $poli->desc2 = $request->desc2;

        $poli->save();

        if ($poli) {
            Session::flash('status', 'success');
            Session::flash('message', 'Menambah Data Berhasil!');
        }

        return redirect('admin/poli');
    }

    public function edit(Request $request, $id){
        $poli = Poliklinik::findOrFail($id);

        return view('crud/poli-edit', [
            'title' => 'Poli',
            'poli' => $poli
        ]);
    }

    public function update(Request $request, $id){
        $poli = Poliklinik::findOrFail($id);

        $poli->nama_poli = $request->nama;
        $poli->desc1 = $request->desc1;
        $poli->desc2 = $request->desc2;

        $poli->save();

        if ($poli) {
            Session::flash('status', 'success');
            Session::flash('message', 'Mengedit Data Berhasil!');
        }

        return redirect('/admin/poli');
    }

    public function delete($id)
    {
        $poli = Poliklinik::findOrFail($id);

        return view('crud/poli-delete', [
            'title' => "Poli Delete",
            'poli' => $poli
        ]);  
    }

    public function destroy($id)
    {
        $deletePoli = Poliklinik::findOrFail($id);
        $deletePoli->delete();

        if ($deletePoli) {
            Session::flash('status', 'success');
            Session::flash('message', 'Menghapus Data Berhasil!');
        }

        return redirect('/admin/poli');
    }
}
