<!DOCTYPE html>
<html lang= "en">
    <body>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>PRICE PAGE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
		<link rel="stylesheet" href="{{ asset('css/mykode.css') }}">
    </head>

                    <!------------HEADER----------->
        <header>
            <img class="logo" src="{{ asset('images/StudyRoom.png') }}" alt="logo">
            <div class="ignielHorizontal" align="right">
			<ul>
			<li><a href="{{ route('login') }}" title="Login Tutor">Login</a></a></li>
			<li><a href="{{ route('register') }}" title="Register">Register</a></li>
			</ul>
  </div>
        </header>
                    <!------------BATAS HEADER----------->

                    <!------------MENU PRICE----------->
        <div class="pricy">
            <h1></br>STUDY ROOM PACKAGES</h1>
            <table id="prices">
                <tbody>
                    <tr>
                    <td>
                        <h2>Silver</h2>
                        <h4>Rp1.200.000</h4>
                        <h5>Makismal 20 siswa/kelas</h5>
                        <p>Jaminan Masuk PTN Favorit</p>
                        <p>2 pertemuan perminggu</p>
                        <p>Mendapatkan Layanan Tutor Service Time</p>
                        <p>Evaluasi Prestasi Belajar</p>
                        <p>Siaga UTS dan UAS</p>
                        <p>Free 3 Videos Tutor</p>
                        <b class="btn" href="#"><button>Click Here</button></b>
                    </td>

                    <td class="popular">
                        <h2>Gold</h2>
                        <h3>Popular Package</h3>
                        <h4>Rp1.500.000</h4>
                        <h5>Maksimal 15 siswa/kelas</h5>
                        <p>Jaminan Masuk PTN Favorit</p>
                        <p>4 pertemuan perminggu</p>
                        <p>Mendapatkan Layanan Tutor Service Time</p>
                        <p>Evaluasi Prestasi Belajar</p>
                        <p>Siaga UTS, UH dan UAS</p>
                        <p>Free 5 Videos Tutor</p>
                        <b class="btn" href="#"><button>Click Here</button></b>
                    </td>

                    <td>
                        <h2>Platinum</h2>
                        <h4>Rp2.000.000</h4>
                        <h5>Maksimal 10 siswa/kelas</h5>
                        <p>Jaminan Masuk PTN Favorit</p>
                        <p>6 pertemuan perminggu</p>
                        <p>Mendapat Layanan Tutor Service Time</p>
                        <p>Evaluasi Prestasi Belajar</p>
                        <p>Siaga UTS, UH, UAS dan UTBK</p>
                        <p>Free 7 Videos Tutor</p>
                        <b class="btn" href="#"><button>Click Here</button></b>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
                    <!------------BATAS MENU PRICE----------->

                    <!------------FOOTER----------->
        <footer>
            <div id="sosial-media">
                <span>Connect with us</span>
                <ul id="sosmed-list">
                    <li><a href="https://www.twitter.com/"><img src="image/ant-design_twitter-circle-filled.svg" alt=""></a></li>
                    <li><a href="https://www.instagram.com/"><img src="image/akar-icons_instagram-fill.svg" alt=""></a></li>
                    <li><a href="https://www.facebook.com/"><img src="image/akar-icons_facebook-fill.svg" alt=""></a></li>
                </ul>
            </div>
                <p><span id="footer-cr"> &copy;2021 StudyRoom</span></p>
        </footer>

                    <!------------BATAS FOOTER----------->
    </body>
</html>

