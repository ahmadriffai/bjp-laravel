<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>PT. Brilliant Jaya Pondasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/owl.carousel.min.css')}}">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/font-awesome.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/bootstrap.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/style.css')}}">
</head>
<body>

<!-- navbar start -->
<nav class="navbar navbar-expand-sm sticky-top">
    <div class="container mx-3">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/img/logo.png')}}" alt="" width="50px">
            PT. Brilliant Jaya Pondasi
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @if(url()->current() == url('/')) active @endif" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(url()->current() == url('/profile')) active @endif" href="{{ url('profile') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(url()->current() == url('/home/gallery')) active @endif" href="{{ url('home/gallery') }}">Galeri</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- navbar end -->

@yield("content")

<!-- footer start -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-col">
                    <h3>Hubungi Kami</h3>
                    <ul>
                        <li>Jl.H.Aning No.80 Kecamatan Cikupa Tangerang-Banten</li>
                        <li>085155380996</li>
                        <li>0840929098098</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-col">
                    <h3>Sosial Media</h3>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href=""><i class="fab fa-youtube"></i> youtube</a></li>
                        <li><a href=""><i class="fab fa-instagram"></i> instagram</a></li>
                        <li><a href=""><i class="fab fa-twitter"></i> twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright-text">&copy; 2022 , PT. Briliant Jaya Pondasi</p>
            </div>
        </div>
    </div>
</section>
<!-- footer end -->

<!-- jquery js -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- owl carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- ScrollIt js -->
<script src="{{asset('assets/js/scrollIt.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
