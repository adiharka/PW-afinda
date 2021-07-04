@extends('user.master')

@section('title')
<title>Home</title>
<link rel="stylesheet" href="{{ asset('css/kode1.css') }}">
@endsection

@section('content')
<h1 align = "center">Let's get started your class!</h1>
<div style="display: flex; justify-content:center; margin-bottom: 1rem">
    <a href="{{ route('logout') }}" class="btn btn-theme">Logout</a>
</div>
@endsection
