@extends('master')
@section('konten')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container-fluid">
    <div class="alert alert-success"><b>Selamat Datang {{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</div>
</div>
@endsection