@extends("layouts.home")

@section("content")
 <!-- section 2 start -->
 <div class="section2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h1 class="text-center">Hubungi Kami</h1>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-4">
                    <a target="_blank" href="https://www.google.com/maps/place/Brilliant+Jaya+Pondasi/@-6.1862423,106.5897126,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69fefd1c26752f:0xbdaeebc41041dc58!8m2!3d-6.1862476!4d106.5919013" class="nav-link">
                        <div class="section4-item line-light bg-white shadow-sm">
                            <div class="step">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3>Alamat Kantor</h3>
                            <p>
                                Jl.H.Aning No.80 Kecamatan Cikupa Tangerang-Banten
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a target="_blank" href="https://www.google.com/maps/place/Brilliant+Jaya+Pondasi/@-6.1862423,106.5897126,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69fefd1c26752f:0xbdaeebc41041dc58!8m2!3d-6.1862476!4d106.5919013" class="nav-link">
                        <div class="section4-item line-light bg-white shadow-sm">
                            <div class="step">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h3>Email</h3>
                            <p>
                                admin@brilliantjayapondasi.com
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a target="_blank" href="https://www.google.com/maps/place/Brilliant+Jaya+Pondasi/@-6.1862423,106.5897126,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69fefd1c26752f:0xbdaeebc41041dc58!8m2!3d-6.1862476!4d106.5919013" class="nav-link">
                        <div class="section4-item line-light bg-white shadow-sm">
                            <div class="step">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h3>Kontak</h3>
                            <p>
                                WhatsApp : 0821 3666 9958
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        
        </div>
    </div>
    <!-- section 2 end -->

    <!-- kirim pesan -->
    <div class="section3 py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h1 class="text-center">Kirim Pesan</h1>
                        <p class="text-center fw-bold">Apa yang anda tanyakan seputar PT Brilliant Jaya Pondasi ?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
               
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="605" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Brilliant%20jaya%20pondasi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a>
                                    <br>
                                    <style>.mapouter{position:relative;text-align:right;height:500px;width:605px;}</style>
                                    <a href="https://www.embedgooglemap.net">insert google map into wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:605px;}</style>
                            </div>
                        </div>

                </div>
                <div class="col-lg-5 bg-danger p-3 bg-white order-first">
               
                            <form action="mailto:admin@brilliantjayapondasi.com" method="get" enctype="text/plain">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                                    <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button class="btn btn-1">Kirim</button>
                            </form>
                       
                </div>
            </div>
        </div>
    </div>

@endsection