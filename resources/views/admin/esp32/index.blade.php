@extends('admin.layout.core')
@section('content')
<div class="container-fluid py-4">
   
<h6>Selamat Datang Admin <a href=" #">{{ Auth::user()->name }}</a>.</h6>
<h1> akses kamera</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection