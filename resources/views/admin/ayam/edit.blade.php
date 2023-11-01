@extends('admin.layout.core')
@section('content')
<div class="container-fluid py-4">
   
<h6>Selamat Datang Admin <a href=" #">{{ Auth::user()->name }}</a>.</h6>

<form action="/ayams/{{ $ayam->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{ $ayam->tanggal_masuk }}">
    </div>
    <div class="mb-3">
        <label for="jumlah_ayam" class="form-label">Jumlah Ayam</label>
        <input type="text" class="form-control" id="jumlah_ayam" name="jumlah_ayam" value="{{ $ayam->jumlah_ayam }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>



</div>

   
@endsection