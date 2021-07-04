@extends('admin.master')

@section('title')
<title>Tutor</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endsection

@section('content')
<div class="row">

    <div class="column">
        <div class="profile">
            <table align="center">
                <tr>
                    <td>
                        <form action="{{ route('admin.tutor.storeCourse', $id) }}"
                            method="POST">
                            @csrf
                            <h1 class="mt-3">Tambah Course</h1>
                            <table>
                                <tr>
                                    <td>
                                        <label class="form-label">Course</label>
                                    </td>
                                    <td>
                                        <option value=""></option>
                                        <select name="name" class="form-select">
                                            <option value="" selected disabled>Pilih Course</option>
                                            <option value="Matematika">Matematika</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Fisika">Fisika</option>
                                            <option value="Biologi">Biologi</option>
                                            <option value="Geografi">Geografi</option>
                                            <option value="Ekonomi">Ekonomi</option>
                                            <option value="Sejarah">Sejarah</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-label">Detail</label>
                                    </td>
                                    <td>
                                        <input name="detail" class="form-control" type="text" placeholder="Detail course">
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" class="btn btn-theme my-3">Tambah</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</div>
@endsection
