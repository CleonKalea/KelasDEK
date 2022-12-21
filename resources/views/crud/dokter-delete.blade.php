@extends('layout.main')

@section('top')

    <div class="mt-5">
        <h2 class="mb-3">Apakah data dari <u>{{ $dokter->nama_dokter }}</u> ingin didelete?</h2>

        <form style="display: inline-block" action="/dokter-destroy/{{ $dokter->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a class="btn btn-primary" href="/admin/dokter">Cancel</a>
    </div>
@endsection