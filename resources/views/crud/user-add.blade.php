@extends('layout.main')
@section('top')
    <h1>Tambah User</h1>
    
    <div class="mt-3">
        <form action="user-create" method="post">
            @csrf
            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control mb-3">
            </div>

            <div class="mb-3">
                <label for="namauser">Nama Lengkap</label>
                <input type="text" name="namauser" id="namauser" class="form-control mb-3">
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3">
            </div>

            <div class="mb-3">
                <label for="Password">Password</label>
                <input type="text" name="Password" id="Password" class="form-control mb-3">
            </div>

            <div class="mb-3">
                <label for="notelp">No Telepon</label>
                <input type="tel" name="notelp" id="notelp" class="form-control mb-3">
            </div>

            <button class=" btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Tambah Data</button>
        </form>
    </div>

@endsection