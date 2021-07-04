@extends('admin.master')

@section('title')
    <title>Tutor</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endsection

@section('content')
<div class="row">

    <div class="column">
        <div class="profile p-3" style="width: unset">
            <a href="{{ route('admin.tutor.createCourse', $tutor->id) }}" class="btn btn-theme mb-3">Tambah Course</a>
            <a href="{{ route('admin.tutor.edit', $tutor->id) }}" class="btn btn-theme mb-3">Edit Tutor</a>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <td>{{ $tutor->id }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $tutor->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $tutor->email }}</td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td>{{ $tutor->phone }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $tutor->address }}</td>
                </tr>
                <tr>
                    <th>Course yg diampu</th>
                    <td>
                        @forelse ($courses as $course)
                            {{ $course->course }} </br>
                        @empty
                            Tidak ada
                        @endforelse
                    </td>
                </tr>
            </table>
        </div>

    </div>

</div>
@endsection
