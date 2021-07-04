<!DOCTYPE html>
<html lang="en">

<body>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>LOGIN</title>
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
    <img src="{{ asset('images/logintutor.png') }}" align=right
        style="width: 687px;height : 522px;">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="container">
            <h1 align="center" background="#FFFFFF">Login</h1>
            <p align="center">Didn't register yet?</p>
            <p align="center"><a href="{{ route('register') }}">register</a></p>
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

            <label for="email"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            </br>
            <label for="password"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>


            <button type="submit" class="registerbtn"><a title="Login">Login</a></button>
            <p align="center"><a href="forgot.html">Forgot your password?</a></p>
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
