@extends('admin.master')

@section('title')
<title>Tutor</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endsection

@section('content')
<div class="row">

    <div class="column">
        <div class="profile p-3">
                        <form action="{{ route('admin.tutor.update', $id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <h4>Edit Tutor</h4>
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <label>Nama</label>
                                    </td>
                                    <td>
                                        <input name="name" type="text" placeholder="Nama lengkap tutor"
                                            value="{{ old('name', $tutor->name) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Email</label>
                                    </td>
                                    <td>
                                        <input name="email" type="email" placeholder="Email tutor"
                                            value="{{ old('email', $tutor->email) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Phone Number</label>
                                    </td>
                                    <td>
                                        <input name="phone" type="text" placeholder="Nomor telepon tutor"
                                            value="{{ old('phone', $tutor->phone) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Address</label>
                                    </td>
                                    <td>
                                        <input name="address" type="text" placeholder="Alamat tutor"
                                            value="{{ old('address', $tutor->address) }}">
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" class="btn btn-theme">Edit</button>
                        </form>
                        <div class="mt-3">

                            <h4>Course diampu</h4>

                            @forelse($courses as $course)
                                {{ $course->course }}
                                <form
                                    action="{{ route('admin.tutor.destroyCourse', $course->id) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin menghapus?')" type="submit"
                                        class="btn btn-danger btn-sm">hapus</button></form>
                            @empty
                                Tidak ada
                            @endforelse

                        </div>

        </div>

    </div>

</div>
@endsection
