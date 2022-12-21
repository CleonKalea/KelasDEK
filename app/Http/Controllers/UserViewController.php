<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserView;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class UserViewController extends Controller
{
    public function index(){
        return view('admin/user', [
            "title" => "User",
            "daftar" => UserView::all()
        ]);
    }

    public function create(){
        return view('crud/user-add', [
            "title" => "User",
        ]);
    }

    public function store(Request $request)
    {
        $user = new UserView;

        $user->username = $request->username;
        $user->namauser = $request->namauser;
        $user->email = $request->email;
        $user->password = $request->Password;
        $user->no_telp = $request->notelp;

        $user->save();

        if ($user) {
            Session::flash('status', 'success');
            Session::flash('message', 'Menambah Data Berhasil!');
        }
        
        return redirect('admin/user');
    }

    public function edit(Request $request, $id){
        $user = UserView::findOrFail($id);

        return view('crud/user-edit', [
            "title" => "User",
            "user" => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = Userview::findOrFail($id);

        $user->username = $request->username;
        $user->namauser = $request->nama;
        $user->email = $request->email;
        $user->password = $request->pass;
        $user->no_telp = $request->no_telp;

        $user->save();

        if ($user) {
            Session::flash('status', 'success');
            Session::flash('message', 'Mengedit Data Berhasil!');
        }
        
        return redirect('/admin/user');
    }

    public function delete($id){
        $user = UserView::findOrFail($id);

        return view('crud/user-delete',[
            "title" => "User Delete",
            "user" => $user
        ]);
    }

    public function destroy($id){
        $deleteUser = UserView::findOrFail($id);
        $deleteUser->delete();

        if ($deleteUser) {
            Session::flash('status', 'success');
            Session::flash('message', 'Menghapus Data Berhasil!');
        }

        return redirect('/admin/user');
    }

    public function regis(Request $request)
    {
        $user = new UserView;

        $user->username = $request->username;
        $user->namauser = $request->namauser;
        $user->email = $request->email;
        $user->password = $request->Password;
        $user->no_telp = $request->notelp;

        $user->save();

        if ($user) {
            Session::flash('status', 'success');
            Session::flash('message', 'Akun Berhasi Didaftarkan!');
        }
        
        return redirect('/login');
    }
}
