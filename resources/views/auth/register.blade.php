<!DOCTYPE html>
<html lang="en">

<body>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/mykode.css') }}">
        <link rel="stylesheet" href="{{ asset('css/kodeku.css') }}">


    </head>

    <!------------HEADER----------->
    <header>
        <img class="logo" src="{{ asset('images/StudyRoom.png') }}" alt="logo">
        <div class="ignielHorizontal" align="right">
            <ul>
                <li><a href="{{ route('price') }}" title="Package Price">Package Price</a></a></li>
                <li><a href="{{ route('login') }}" title="Login">Login</a></a></li>
                <li><a href="{{ route('register') }}" title="Register">Register</a></li>
            </ul>
        </div>
    </header>
    <!------------BATAS HEADER----------->
    <img src="{{ asset('images/register.png') }}" align=right style="width: 687px;height : 522px;">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="container">
            <h1 align="center" background="#FFFFFF">Register</h1>
            <p align="center">Already have account?</p>
            <p align="center"><a href="{{ route('login') }}">login</a></p>
            {{-- Error Message --}}
            @if(session('errors'))
                <div>
                    <div id='alert' class='alert alert-danger' role="alert">
                        <p style="margin: 0; text-align: center">Terjadi Error:</p>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @if(session('success'))
                <div>
                    <div id='alert' class="alert alert-primary" role="alert">
                        <ul style="margin-top:0">
                            <li>{{ session('success') }}</li>
                        </ul>
                    </div>
                </div>
            @endif

            <label>Username*</label>
            <input type="text" name="username" id="username" placeholder="ex : afifadinda" required>
            <label>E-Mail*</label>
            <input type="email" name="email" id="email" placeholder="ex : afifadinda@gmail.com" required>
            <label>Handphone*</label>
            <input type="text" name="phone" id="phone" placeholder="ex : +627754368904" required>
            <label>School*</label>
            <input type="text" name="school" id="school" placeholder="ex : SMAN 5 Surabaya" required>
            <label>Password*</label>
            <input type="password" name="password" id="password" required placeholder="password">
            <label>Paket</label>
            <select name="paket" id="paket">
                <option selected disabled>==== Choose Paket ====</option>
                <option value="Silver">SILVER</option>
                <option value="Gold">GOLD</option>
                <option value="Platinum">PLATINUM</option>
            </select>
            <button type="submit" class="registerbtn"><a title="Register">Register</a></button>

        </div>
    </form>
</body>
<footer>
    <div id="sosial-media">
        <span>Connect with us</span>
        <ul id="sosmed-list">
            <li><a href="https://www.twitter.com/"><img
                        src="{{ asset('images/ant-design_twitter-circle-filled.svg') }}" alt=""></a>
            </li>
            <li><a href="https://www.instagram.com/"><img
                        src="{{ asset('images/akar-icons_instagram-fill.svg') }}" alt=""></a></li>
            <li><a href="https://www.facebook.com/"><img
                        src="{{ asset('image/akar-icons_facebook-fill.svg') }}" alt=""></a></li>
        </ul>
    </div>
    <p><span id="footer-cr"> &copy;2021 StudyRoom</span></p>
</footer>

</html>
