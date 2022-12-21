@extends('layout.main')
@section('top')

<h1>Tambah Poli</h1>
    
<div class="mt-3">
    <form action="poli-create" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama Poli</label>
            <input type="text" name="nama" id="nama" class="form-control mb-3">
        </div>

        <div class="mb-3">
            <label for="desc1">Deskripsi 1</label>
            <textarea name="desc1" id="desc1" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="desc2">Deskripsi 2</label>
            <textarea name="desc2" id="desc2" class="form-control"></textarea>
        </div>

        <button class=" btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Tambah Data</button>
    </form>
</div>
@endsection
