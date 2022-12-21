@extends('layout.main')
@section('top')
<h1 style="text-align: center">Input Data User</h1>

<form action="create" method="POST">

    <div class="form-group mt-3">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
    </div>
    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
    </div>
    <div class="form-group mt-3">
        <label for="namauser">Nama Lengkap</label>
        <input type="text" class="form-control" id="namauser" name="namauser" placeholder="Masukkan Nama Lengkap">
    </div>
    <div class="form-group mt-3">
        <label for="no-telp">No Telepon</label>
        <input type="text" class="form-control" id="no-telp" name="no-telp" placeholder="Masukkan Nomor Telepon">
    </div>
    <div class="form-group mt-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
    </div>
    {{-- <div class="form-check mt-3">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection