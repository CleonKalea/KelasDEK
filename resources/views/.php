@extends('layout.main')

@section('top')
    <h1>DAFTAR DOKTER</h1>
    <a href="/dokter-add" class="btn btn-primary mb-3">Tambah Data</a>

    @foreach ($daftar as $list)
        <div class="card mb-3 w-100" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $list->nama_dokter }}</h5>
                <p class="card-text">{{ $list->deskripsi }}</p>
                <p class="card-text">{{ $list->jk->jenis_kelamin }}</p>
                <p class="card-text"><b>{{ $list->poli->nama_poli }}</b></p>
                <p class="card-text"><b>{{ $list->jadwal->jam }}</b></p>
                <p class="card-text"><b>{{ $list->jadwal->hari }}, {{ $list->jadwal->tanggal }} {{ $list->jadwal->bulan }}</b></p>
                <a href="/dokter-edit/{{ $list->id }}" class="btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Edit</a>
                <a href="/dokter-delete/{{ $list->id }}" class="btn btn-primary" style="background-color: #E0004D; border-color:#E0004D">Delete</a>
            </div>
        </div>
    @endforeach
@endsection