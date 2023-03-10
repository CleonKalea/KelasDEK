@extends('layout.main')
@section('top')
    <h1>DAFTAR POLIKLINIK</h1>
    <a href="/poli-add" class="btn btn-primary mb-3">Tambah Data</a>

    @foreach ($daftar as $list)
        <div class="card mb-3 w-100" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $list->nama_poli }}</h5>
                <p class="card-text">{{ $list->desc1 }}</p>
                <a href="/poli-edit/{{ $list->id }}" class="btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Edit</a>
                <a href="/poli-delete/{{ $list->id }}" class="btn btn-primary" style="background-color: #E0004D; border-color:#E0004D">Delete</a>
            </div>
        </div>
    @endforeach

@endsection