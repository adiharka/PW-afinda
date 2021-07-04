@extends('user.master')

@section('title')
    <title>Profile</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endsection

@section('content')
<div class="row">

    <div class="column">
        <div class="profile">
            <table align="center">
                <tr>
                    <td>
                        <h1>User Details</h1>
                        <label>ID Student</label>
                        <div id="box1">{{ $user->id }}</div>
                        <label>Username</label>
                        <div id="box2">{{ $user->username }}</div>
                        <label>Phone Number</label>
                        <div id="box3">{{ $user->phone }}</div>
                        <label>Paket</label>
                        <div id="box4">{{ $user->paket }}</div>
                        <label>School</label>
                        <div id="box5"> {{ $user->school }}</div>
                    </td>
                </tr>
            </table>
        </div>

    </div>

    <div class="column">
        <div class="img">
            <img src="{{ asset('images/profile.png') }}" width="450px" height="390px">
        </div>
    </div>

</div>
@endsection
