@extends('layout.main')
@section('top')
    <h1 class="mb-3">VIEW USER</h1>

    @foreach ($daftar as $list)
    <div class="card mb-3 w-100" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $list->username }}</h5>
            <img src="https://scontent.fdps8-1.fna.fbcdn.net/v/t39.30808-6/239648933_2349347305198713_6917517699336097585_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGsETISrcEBtpqVkxyCsEpr3G2KRB-TucbcbYpEH5O5xqWQZrzRHbu2-i3tbFkMj4SFnD9HXcORApzScls0nswF&_nc_ohc=qxjHftIZKKIAX92rp75&tn=QVIC8KsZy4XjbanB&_nc_ht=scontent.fdps8-1.fna&oh=00_AfACzQalpS1mx16EW17vql8VZmkL72-jn5K9dTcjee_eRw&oe=63A0C3E5">
            <p class="card-text">{{ $list->namauser }}</p>
            <p class="card-text">{{ $list->email }}</p>
            <p class="card-text">{{ $list->no_telp }}</p>
            <a href="/poli/{{ $list->id }}" class="btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Edit</a>
            <a href="/poli/{{ $list->id }}" class="btn btn-primary" style="background-color: #E0004D; border-color:#E0004D">Delete</a>
        </div>
    </div>
@endforeach
@endsection