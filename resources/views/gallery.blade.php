@extends("layouts.home")
@section("content")

    <!-- galery start -->
    <section class="gallery">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="text-center">Galeri</h2>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-4 mt-4">
                        @foreach($gallery as $value)
                        <div class="col">
                            <div class="gallery-img shadow-sm">
                                <img src="{{ asset('uploads/gallery/'. $value->filename ) }}" class="gallery-item" alt="galery">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- galery end -->

@endsection
