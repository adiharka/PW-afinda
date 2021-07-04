@extends('user.master')

@section('title')
<title>Tutor</title>
<link rel="stylesheet" href="{{ asset('css/kode3.css') }}">
@endsection

@section('content')
<div class="row">

    <div class="column">
        <div class="profile p-3 d-flex flex-column" style="width: fit-content">
                        <h1>About Tutor</h1>
                        <label> </label>
                        @forelse ($schedules as $jadwal)
                        <div class="box">
                            <p>Name : {{ $jadwal->course->tutor->name }} </p>
                            <p>Course : {{ $jadwal->course->course }} </p>
                            <p>ID : {{ $jadwal->id }} </p>
                            <p>Phone : {{ $jadwal->course->tutor->phone }} </p>
                            <p>Email : {{ $jadwal->course->tutor->email }}  </p>
                            <p>Address: {{ $jadwal->course->tutor->address }}  </p>
                        </div>

                        @empty
                        <h4>Harap mengisi course terlebih dahulu</h4>
                        <a href="{{ route('user.schedule') }}" class="btn btn-theme">Mengisi</a>
                        @endforelse

        </div>
    </div>

    <div class="column">
        <div class="img">
            <img src="{{ asset('images/bro.png') }}" width="450px" height="390px">
        </div>
    </div>

</div>

@endsection
