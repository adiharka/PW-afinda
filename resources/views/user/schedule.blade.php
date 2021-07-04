@extends('user.master')

@section('title')
<title>Schedule</title>
<link rel="stylesheet" href="{{ asset('css/kode4.css') }}">
@endsection

@section('content')
<div class="row">

    <div class="column">
        <div class="profile">
            <div class="p-3">
                @if ($count >0)
                    <h3>Harap mengisi Course untuk mengikuti pelajaran</h3>
                    <p>Paket {{ Auth::user()->paket }} memiliki {{ $hak }} pertemuan course</p>
                    @for ($i = 0; $i < $count; $i++)
                    <h5>Course {{ $i+1 }}</h5>
                    <a href="{{ route('user.selectCourse') }}" class="btn btn-theme mb-3">Pilih Course</a>
                    @endfor
                @endif
            </div>
            <table align="center">
                <tr>
                    <td>
                        <h1>Schedule </h1>
                        @foreach ($schedules as $jadwal)
                        <label> </label>
                        <div class="box">
                            <p>Course : {{ $jadwal->course->course }} </p>
                            <p>Hari : {{ $jadwal->hari }} </p>
                            <p>Jam : {{ $jadwal->jam }} </p>
                            <p>Tutor : {{ $jadwal->course->tutor->name }} </p>
                            <p>ID Meeting : {{ number_format($jadwal->meetingid , 0, ',', ' ') }} </p>
                            <p>Passcode : {{ $jadwal->meetingpass }} </p>
                        </div>
                        @endforeach
                    </td>
                </tr>
            </table>
        </div>

    </div>

    <div class="column">
        <div class="img">
            <img src="{{ asset('images/calendar.png') }}" width="450px" height="390px">
        </div>
    </div>

</div>

@endsection
