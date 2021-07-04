@extends('admin.master')

@section('title')
<title>Tutor</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endsection

@section('content')
<div class="row">

    <div class="column">
        <div class="profile p-3" style="width: unset">
            <h4>Akun Terdaftar</h4>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Handphone</th>
                    <th>Sekolah</th>
                    <th>Paket</th>
                </tr>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->school }}</td>
                        <td>{{ $user->paket }}</td>
                    </tr>
                @empty
                    <p>Tidak ada tutor</p>
                @endforelse
            </table>
        </div>

    </div>

</div>
@endsection
