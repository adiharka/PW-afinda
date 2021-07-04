<!DOCTYPE html>
<html>

<head>
@yield('title')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/kode2.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>

<body>
    <nav>
        <div class="imag">
            <img src="{{ asset('images/StudyRoom.png') }}" align="right">
        </div>
        <div class="menu">
            <ul class="clear">
                <li>
                    <a href="{{ route('user.index') }}" title="Home">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.profile') }}" title="Profile">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.tutor') }}" title="Profile Tutor">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.schedule') }}" title="Schedule">
                        <i class="far fa-calendar" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    {{-- Alert --}}
    @if(session('errors'))
    <div>
        <div id='alert' class='profile'>
            <div class="task-group" style="padding-bottom: 1rem; overflow:hidden">
                <p style="margin: 0; text-align: center">Terjadi Error:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="garis" style="margin-bottom: 1.5rem; height:unset"></div>
    @endif
    @if(session('success'))
    <div>
        <div id='alert' class='profile'>
            <div class="task-group" style="padding-bottom: 1rem; overflow:hidden">
                <ul style="margin-top:0">
                    <li>{{session('success')}}</li>
                </ul>
            </div>
        </div>
    </div>
    @endif
    @yield('content')

    <footer>
        <div id="sosial-media">
            <span>Connect with us</span>
            <ul id="sosmed-list">
                <li><a href="https://www.twitter.com/"><img src="{{ asset('images/ant-design_twitter-circle-filled.svg') }}" alt=""></a>
                </li>
                <li><a href="https://www.instagram.com/"><img src="{{ asset('images/akar-icons_instagram-fill.svg') }}" alt=""></a></li>
                <li><a href="https://www.facebook.com/"><img src="{{ asset('images/akar-icons_facebook-fill.svg') }}" alt=""></a></li>
            </ul>
        </div>
        <p><span id="footer-cr"> &copy;2021 StudyRoom</span></p>
    </footer>
</body>

</html>
