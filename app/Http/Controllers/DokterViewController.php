<?php

namespace App\Http\Controllers;

use App\Models\DokterView;
use App\Models\Poliklinik;
use App\Models\JadwalDokter;
use App\Models\JenisKelamin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Session;

class DokterViewController extends Controller
{
    public function index()
    {
        return view('admin/dokter', [
            "title" => "Dokter",
            "daftar" => DokterView::all()
        ]);
    }

    public function user(){
        return view('/dokter', [
            "title" => "List Dokter",
            "daftar" => DokterView::all()
        ]);
    }

    public function create()
    {
        $list_poli = Poliklinik::select('id', 'nama_poli')->get();
        $jadwal = JadwalDokter::select('id', 'jam', 'hari', 'tanggal', 'bulan')->get();
        $jk = JenisKelamin::select('id', 'jenis_kelamin')->get();

        return view('crud/dokter-add', [
            "title" => "Dokter Add",
            "list" => $list_poli,
            "jadwal" => $jadwal,
            "jk" => $jk
        ]);
    }

    public function store(Request $request)
    {
        $dokter = new DokterView;
        
        $dokter->nama_dokter = $request->nama;
        $dokter->deskripsi = $request->desc;
        $dokter->jenis_kelamin_id = $request->jk;
        $dokter->poliklinik_id = $request->poli;
        $dokter->jadwal_dokter_id = $request->jadwal;

        $dokter->save();

        if ($dokter) {
            Session::flash('status', 'success');
            Session::flash('message', 'Menambah Data Berhasil!');
        }

        return view('admin/dokter', [
            "title" => "Dokter",
            "daftar" => DokterView::all()
        ]);
    }

    public function edit(Request $request, $id)
    {
        $dokter = DokterView::findOrFail($id);
        
        $poli = Poliklinik::where('id', '!=', $dokter->poliklinik_id)->get(['id', 'nama_poli']);
        $jadwal = JadwalDokter::where('id', '!=', $dokter->jadwal_dokter_id)->get(['id', 'jam', 'hari', 'tanggal', 'bulan']);
        $jk = JenisKelamin::where('id', '!=', $dokter->jenis_kelamin_id)->get(['id', 'jenis_kelamin']);

        return view('crud/dokter-edit', [
            'title'=>'Dokter Edit',
            'dokter' => $dokter,
            "poli" => $poli,
            "jadwal" => $jadwal,
            "jk" => $jk
        ]);
    }

    public function update(Request $request, $id)
    {
        $dokter = DokterView::findOrFail($id);

        $dokter->nama_dokter = $request->nama;
        $dokter->deskripsi = $request->desc;
        $dokter->jenis_kelamin_id = $request->jk;
        $dokter->poliklinik_id = $request->poli;
        $dokter->jadwal_dokter_id = $request->jadwal;
        
        $dokter->save();

        if ($dokter) {
            Session::flash('status', 'success');
            Session::flash('message', 'Mengedit Data Berhasil!');
        }

        return view('admin/dokter', [
            "title" => "Dokter",
            "daftar" => DokterView::all()
        ]);
    }

    public function delete($id)
    {
        $dokter = DokterView::findOrFail($id);

        return view('crud/dokter-delete', [
            "title" => "Dokter Delete",
            "dokter" => $dokter
        ]);
    }

    public function destroy($id)
    {
        $deleteDokter = DokterView::findOrFail($id);
        $deleteDokter->delete();

        if ($deleteDokter) {
            Session::flash('status', 'success');
            Session::flash('message', 'Menghapus Data Berhasil!');
        }

        return redirect('admin/dokter');
    }
}
