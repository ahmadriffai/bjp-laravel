@extends("layouts.home")

@section("content")

    <!-- visi misi start -->
    <section class="visi">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12 text-center">
                    <h3>VISI</h3>
                    <p>
                        Kami senantiasa berusaha memberikan kontribusi dalam pengembangan dan memberikan kesuksesan bagi mitra kerja kami
                    </p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="col-lg-12 text-center">
                        <h3>MISI</h3>
                        <p>
                            Selalu melayani mitra kerja dengan baik, menjalin kemitraan yang kuat serta memberikan hasil yang maksimal dan berkualitas
                        </p>

                    </div>
                </div>
            </div>
    </section>
    <!-- visi misi end -->

    <!-- section 3 start -->
    <section class="section3 bg-white section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="text-center">Tentang Kami</h2>
                    </div>
                </div>
            </div>
            <div class="section3-item">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <img src="{{asset('assets/img/banner3.png')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('assets/img/banner4.png')}}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-lg-5 text-center">
                    PT. Brilliant Jaya Pondasi,diresmikan pada 16 september 2020. PT. Brilliant Jaya Pondasi berkomitmen untuk berperan aktif menyumbangkan tenaga dan pikiran berupa pelayanan jasa pelaksanaan konstruksi sebagai rekanan bagi pihak pemerintah maupun swasta. PT Brilliant Jaya Pondasi adalah sebuah perusahaan yang bergerak di bidang konstruksi. Kami didukung oleh tim yang solid yang memiliki pengalaman pekerjaan dibidangnya dan anagement yang sangat baik, serta ditunjang dengan peralatan yang memadai dan moderen. PT. Brilliant Jaya Pondasi lebih terfokus pada pondasi bored pile. Dari mulai pengeboran, fabrikasi besi, pengecoran, dll
                </div>
            </div>
    </section>
    <!-- section 3 end -->


    <!-- section 4 start -->
    <div class="section section4 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="text-center">Tahap Pengerjaan Pondasi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="section4-item line-right">
                        <div class="step">1</div>
                        <img src="{{asset('assets/img/penentuantitik.png')}}" alt="" class="img-fluid rounded m-2">

                        <h3>Penentuan Titik</h3>
                        <p>
                            Penentuan titik adalah proses awal sebelum melakukan pengeboran dilaksanakan pengukuran pada area yang akan menjadi lokasi pekerjaan pembuatan tiang bor.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section4-item line-right">
                        <div class="step">2</div>
                        <img src="{{asset('assets/img/fabrikasibesi.png')}}" alt="" class="img-fluid rounded m-2">

                        <h3>Pabrikan Besi</h3>
                        <p>
                            Mempersiapkan lokasi yang cukup luas sebagai tempat untuk proses perakitan besi tulangan maupun pengelasan. Jika panjang besi lebih dari 12m maka memungkinkan akan di bagi menjadi 2 section
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section4-item line-right">
                        <div class="step">3</div>
                        <img src="{{asset('assets/img/temporarycasing.jpg')}}" alt="" class="img-fluid rounded m-2">

                        <h3>Temporary Casing</h3>
                        <p>
                            Dilakukan pemasangan casing agar mencegah terjadinya longsor pada proses pengeboran. Panjang casing tergantung dari panjangnya tanah lunak yang ada/ perkiraan terjadi kelongsoran.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section4-item line-light">
                        <div class="step">4</div>
                        <img src="{{asset('assets/img/pengeboran.png')}}" alt="" class="img-fluid rounded m-2">

                        <h3>Pengeboran Lubang Bor</h3>
                        <p>
                            Setelah mempersiapkan titik yang akan dibor. Mesin bergerak menuju titik kemudian proses pengeboran dimulai sampai kedalaman yang direncanakan
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section4-item line-right">
                        <div class="step">5</div>
                        <div class="gambar">
                            <img src="{{asset('assets/img/handlingbesi.png')}}" alt="" class="img-fluid rounded m-2">
                        </div>
                        <h3>Handling Besi</h3>
                        <p>
                            Setalah mencapai kedalaman pengecoran yang direncanakan, selanjutnya dilakukan pemasukan besi menggunakan cran. Apabila panjang besi lebih dari ... akan dilakukan join besi menggunakan las.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section4-item line-light">
                        <div class="step">6</div>
                        <img src="{{asset('assets/img/pengecoran.png')}}" alt="" class="img-fluid rounded m-2">

                        <h3>Pengecoran</h3>
                        <p>
                            Pengecoran dilakukan menggunakan tremie agar hasil pengecoran maksimal dan tidak terjadi pengeropodsan pada beton.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <a class="btn btn-1" href="https://wa.me/08129065701?text=Hallo%2C%20saya%20mau%20bertanya%20mengenai%20PT.%20Brilliant%20Jaya%20Pondasi%20..">Metode Lebih Lengkap</a>
            </div>
        </div>
    </div>
    <!-- section 4 end -->

@endsection
