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
                        <form action="{{ route('admin.tutor.store') }}" method="POST">
                            @csrf
                            <h1>Tambah Tutor</h1>
                            <table>
                                <tr>
                                    <td>
                                        <label>Nama</label>
                                    </td>
                                    <td>
                                        <input name="name" type="text" placeholder="Nama lengkap tutor">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Email</label>
                                    </td>
                                    <td>
                                        <input name="email" type="email" placeholder="Email tutor">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Phone Number</label>
                                    </td>
                                    <td>
                                        <input name="phone" type="text" placeholder="Nomor telepon tutor">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Address</label>
                                    </td>
                                    <td>
                                        <input name="address" type="text" placeholder="Alamat tutor">
                                    </td>
                                </tr>
                            </table>
                            <button type="submit">Tambah</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</div>
@endsection
