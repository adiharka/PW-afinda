@extends('admin.master')

@section('title')
<title>Tutor</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endsection

@section('content')
<div class="row">

    <div class="column">
        <div class="profile p-3" style="width: unset">
            <a href="{{ route('admin.tutor.create') }}" class="btn btn-theme mb-3">Tambah Tutor</a>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nama Tutor</th>
                    <th>Email</th>
                    <th width='150px'>Action</th>
                </tr>
                @forelse($tutors as $tutor)
                    <tr>
                        <td>{{ $tutor->id }}</td>
                        <td>{{ $tutor->name }}</td>
                        <td>{{ $tutor->email }}</td>
                        <td class="d-flex flex-row"><a href="{{ route('admin.tutor.show', $tutor->id) }}"
                                class="btn btn-info btn-sm" style="margin-right: 4px">Detail</a>
                            <form action="{{ route('admin.tutor.destroy', $tutor->id) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin menghapus?')" class="btn btn-danger btn-sm" type="submit">Hapus</button></form>
                        </td>
                    </tr>
                @empty
                    <p>Tidak ada tutor</p>
                @endforelse
            </table>
        </div>

    </div>

</div>
@endsection
