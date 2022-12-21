@extends('layout.main')

@section('top')
<div class="card text-center">
    <div class="card-header">
        Deskripsi
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $list->nama_poli }}</h5>
        <p class="card-text">{{ $list->desc2 }}</p>
        <a href="/poli" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-footer text-muted">
        Kapan ya
    </div>
</div>
@endsection