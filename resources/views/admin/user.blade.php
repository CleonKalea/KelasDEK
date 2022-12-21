@extends('layout.main')
@section('top')
    <h1>DAFTAR USER</h1>
    <a href="/user-add" class="btn btn-primary mb-3">Tambah Data</a>

    @foreach ($daftar as $list)
    <div class="card mt-3 w-100" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $list->username }}</h5>
            <p class="card-text">{{ $list->namauser }}</p>
            <p class="card-text">{{ $list->email }}</p>
            <p class="card-text">{{ $list->no_telp }}</p>
            <a href="/user-edit/{{ $list->id }}" class="btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Edit</a>
            <a href="/user-delete/{{ $list->id }}" class="btn btn-primary" style="background-color: #E0004D; border-color:#E0004D">Delete</a>
        </div>
    </div>
    @endforeach

@endsection