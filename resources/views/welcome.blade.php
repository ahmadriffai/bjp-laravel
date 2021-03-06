@extends("layouts.home")

@section("content")

    <!-- home section start -->
    <section class="home">
        <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
            <div class="carousel-indicators text-white">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="./assets//img/banner3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/img/profile1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/banner1.png" class="d-block w-100" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- home section end -->

    <!-- section 2 start -->
    <div class="section2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="text-center">Mengapa PT. Briliant Jaya Pondasi Berbeda?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel section2-carousel">
                    <div class="section2-item">
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="mt-sm-5">Pendiri PT. Brilliant Jaya Pondasi sudah berpengalaman lebih dari 10 tahun dalam spesialisasi pondasi bore pile dan pondasi pancang. Sehingga dapat mempekerjakan operator dan tenaga ahli yang sudah dapat diandalkan untuk bekerja dengan penuh ketelitian dan kualitas pekerjaan terbaik untuk menghasilkan pondasi yang kokoh dan kuat. Begitu juga kami selalu menjunjung tinggi keselamatan kerja dan ketepatan waktu.</p>
                            </div>
                            <div class="col-lg-4 ms-auto order-first">
                                <h3>Keunggulan Kompetitif</h3>
                                <div class="section2-img">
                                    <img src="./assets/img/fabrikasibesi.png" alt="" width="10px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section2-item">
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="mt-sm-5">Semakin berkembangnya metode kerja konstruksi pondasi dalam di Indonesia, kami PT. Brilliant Jaya Pondasi selalu memperbaharui kemampuan alat kerja kami dengan teknologi terbaru dari PT. Sany Perkasa Indonesia untuk mendukung kerja kami. </p>
                            </div>
                            <div class="col-lg-4 ms-auto order-first">
                                <h3>Peralatan Baru</h3>
                                <div class="section2-img">
                                    <img src="./assets/img/peralatanterbaru.png" alt="" width="10px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section2-item">
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="mt-sm-5">PT. Brilliant Jaya Pondasi selalu mengutamakan integritas dan komitmen dalam menjalankan pelayanan terbaiknya terhadap konsumen, sehingga sampai saat ini PT. Brilliant Jaya Pondasi eksis dan dipercaya di tengah persaingan pasar yang sangat ketat.</p>
                            </div>
                            <div class="col-lg-4 ms-auto order-first">
                                <h3>Pelayanan Maksimal</h3>
                                <div class="section2-img">
                                    <img src="./assets/img/pelayanan.png" alt="" width="10px">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- section 2 end -->

    <!-- section 3 start -->
    <section class="section3 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="text-center">Jasa dan Pelayanan</h2>
                    </div>
                </div>
            </div>
            <div class="section3-item">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-img">
                                <img src="./assets/img/service2.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h3 class="text-uppercase">Jasa Bore Pile Metode Hidrolik</h3>
                                <p class="card-text">
                                    Sudah lebih dari 10 tahun pendiri PT. Brilliant Jaya Pondasi berpengalaman di bidang spesialisasi pondasi dalam, sehingga dalam perjalanannya menjadikan PT. Brilliant Jaya Pondasi dapat bekerja profesional. PT. Brilliant Jaya Pondasi mempunyai mesin yang mampu melaksanakan pengeboran dengan ukuran 60 cm ??? 120 cm dengan kedalaman hingga 56 m
                                </p>
                                <a href="https://wa.link/6i8qx1" class="btn btn-1">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-img">
                                <img src="./assets/img/service1.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h3>BORE PILE METODE BASAH ( MINI CRANE)</h3>
                                <p class="card-text">
                                    Metode wash boring bore pile PT. Brilliant Jaya Pondasi sangat cocok untuk
                                    Diameter sekala kecil dan menengah, penerapan teknologi bore pile wash
                                    Boring dapat digunakan di berbagai daerah sulit maupun terpencil,
                                    Sehingga mesin bore pile PT. Brilliant Jaya Pondasi mempunyai keunggulan
                                    Yang dapat mengerjakan proyek proyek dengan akses minim seperti
                                    Bangunan perumahan, jembatan, menara, pabrik,dan pondasi pondasi yang
                                    Lainnya
                                </p>
                                <a href="https://wa.link/6i8qx1" class="btn btn-1">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-img">
                                <img src="./assets/img/service3.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h3> METODE PANCANG HIDROLIK</h3>
                                <p class="card-text">
                                    Metode pancang HSPD adalah jenis pancang yang saat ini sangat efisien di
                                    Proyek. Mesin jenis ini mudah di operasikan dan tidak memiliki kebisingan,
                                    Metode pengerjaan yang cepat dan bersih menjadikan mesin ini cocok
                                    Digunakan di area yang mengharuskan tidak adanya kebisingan suara. Jenis
                                    Mesin HSPD mampu memancang untuk ukuran tiang pancang ;
                                    20x20, 25x25, 30x30, 40x40 dan 45x45 serta tiang segi tiga 28x28x28, 32x32x32.
                                </p>
                                <a href="https://wa.link/6i8qx1" class="btn btn-1">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 3 end -->

    <!-- galery start -->
    <section class="gallery bg-white">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="text-center">Mitra Kami</h2>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-4 mt-4">
                        @for($i = 1 ; $i <= 10; $i++)
                            <div class="col">
                                <div class="gallery-img">
                                    <img src="{{ asset('assets/img/mitra'. $i .'.jpeg') }}" class="gallery-item" alt="galery">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- galery end -->

@endsection
