@extends('user.master')

@section('title')
<title>Course</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endsection

@section('content')
<div class="row">

    <div class="column">
        <div class="profile">
            <table align="center">
                <tr>
                    <td>
                        <form action="{{ route('user.storeCourse') }}"
                            method="POST">
                            @csrf
                            <h1 class="mt-3">Tambah Course</h1>
                            <div class="mb-3">
                                <label for="Course" class="form-label">Course</label>
                                <select name="Course" class="form-select">
                                    <option value="" selected disabled>>> Pilih Course & Tutor <<</option>
                                    @forelse ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->course }} - {{ $course->tutor->name }}</option>
                                    @empty
                                    <option value="" disabled>Maaf saat ini tidak ada tutor</option>
                                    @endforelse
                                </select>
                              </div>
                            <div class="mb-3">
                                <label for="day" class="form-label">Hari</label>
                                <select name="day" class="form-select">
                                    <option value="" selected disabled>>> Pilih Hari <<</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                              </div>
                            <div class="mb-3">
                                <label for="jam" class="form-label">Hari</label>
                                <select name="time" class="form-select">
                                    <option value="" selected disabled>>> Pilih Jam <<</option>
                                    <option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
                                    <option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
                                    <option value="12.30 - 14.30 WIB">12.30 - 14.30 WIB</option>
                                    <option value="15.00 - 17.00 WIB">15.00 - 17.00 WIB</option>
                                </select>
                              </div>
                            <button type="submit" class="btn btn-theme my-3">Tambah</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</div>
@endsection
