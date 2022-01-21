@extends('layouts.nav')

@section('container')
    <h1>About Me</h1>
    <h3>{{$name}}</h3>
    <p>{{$email}}</p>
    <img src="gambar/aku.jpg" alt="Riyan Dicky Satria" width="200" class="img-thumbnail rounded-circle">

@endsection

