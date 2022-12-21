@extends('layout.main')
@section('top')
    <h1>Edit Data User</h1>

    <div class="mt-3">
        <form action="/user-update/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control mb-3" value="{{ $user->username }}">
            </div>

            <div class="mb-3">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control mb-3" value="{{ $user->namauser }}">
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3" value="{{$user->email}}">
            </div>

            <div class="mb-3">
                <label for="pass">Password</label>
                <input type="text" name="pass" id="pass" class="form-control mb-3" value="{{$user->password}}">
            </div>

            <div class="mb-3">
                <label for="no_telp">No Telepon</label>
                <input type="tel" name="no_telp" id="no_telp" class="form-control mb-3" value="{{$user->no_telp}}">
            </div>

            <button class=" btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Tambah Data</button>
        </form>
    </div>
@endsection