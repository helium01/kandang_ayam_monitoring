@extends('admin.layout.core')
@section('content')
<div class="container-fluid py-4">
   
<h6>Selamat Datang Admin <a href=" #">{{ Auth::user()->name }}</a>.</h6>
<a href="/ayams/create" class="btn btn-primary">Create Ayam</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Jumlah Ayam</th>
            <th scope="col">opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->tanggal_masuk }}</td>
            <td>{{ $item->jumlah_ayam }}</td>
            <td>
                <a href="/ayams/{{$item->id}}" class="btn btn-primary">Edit</a>
                <form action="/ayams/{{$item->id}}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


</div>

   
@endsection