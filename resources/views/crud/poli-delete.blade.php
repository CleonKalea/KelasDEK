@extends('layout.main')

@section('top')

    <div class="mt-5">
        <h2 class="mb-3">Apakah data dari <u>{{ $poli->nama_polil }}</u> ingin didelete?</h2>

        <form style="display: inline-block" action="/poli-destroy/{{ $poli->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a class="btn btn-primary" href="/admin/poli">Cancel</a>
    </div>
@endsection