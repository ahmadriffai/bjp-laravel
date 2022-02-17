@extends("layouts.app")

@section("style")
    <style>
        .dz-image img {
            width: 100%;
            height: 100%;
        }
        .dropzone.dz-started .dz-message {
            display: block !important;
        }
        .dropzone {
            border: 2px dashed #028AF4 !important;;
        }
        .dropzone .dz-preview.dz-complete .dz-success-mark {
            opacity: 1;
        }
        .dropzone .dz-preview.dz-error .dz-success-mark {
            opacity: 0;
        }
        .dropzone .dz-preview .dz-error-message{
            top: 144px;
        }
    </style>
@endsection

@section("content")

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 justify-content-center">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h2 class="px-3">Upload Gambar</h2>

                        <div>
                            <form method="post" action="{{ url('gallery') }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                                @csrf
                                <div class="dz-default dz-message">Drop here or click to upload</div>
                            </form>
                        </div>

                        <button type="button" class="btn btn-success mt-2" id="selesai">Selesai</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                <form method="post" action="{{ route('gallery.destroy', $value) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-sm btn-danger mt-2">Hapus</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- galery end -->
@endsection

@section("script")
    <script>
        $(document).ready(function () {
            $("#selesai").click(function (){
                location.reload();
            });
        });

        $.each(data, function (key, value) {
            var file = {name: value.name, size: value.size};
            myDropzone.options.addedfile.call(myDropzone, file);
            myDropzone.options.thumbnail.call(myDropzone, file, value.path);
            myDropzone.emit("complete", file);
        });

        Dropzone.options.dropzone =
            {
                maxFiles: 5,
                maxFilesize: 4,
                //~ renameFile: function(file) {
                //~ var dt = new Date();
                //~ var time = dt.getTime();
                //~ return time+"-"+file.name;    // to rename file name but i didn't use it. i renamed file with php in controller.
                //~ },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 50000,
                init:function() {

                    // Get images
                    var myDropzone = this;
                    $.ajax({
                        url: gallery,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            //console.log(data);
                            $.each(data, function (key, value) {

                                var file = {name: value.name, size: value.size};
                                myDropzone.options.addedfile.call(myDropzone, file);
                                myDropzone.options.thumbnail.call(myDropzone, file, value.path);
                                myDropzone.emit("complete", file);
                            });
                        }
                    });
                },
                removedfile: function(file)
                {
                    if (this.options.dictRemoveFile) {
                        return Dropzone.confirm("Are You Sure to "+this.options.dictRemoveFile, function() {
                            if(file.previewElement.id != ""){
                                var name = file.previewElement.id;
                            }else{
                                var name = file.name;
                            }
                            //console.log(name);
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                type: 'POST',
                                url: delete_url,
                                data: {filename: name},
                                success: function (data){
                                    alert(data.success +" File has been successfully removed!");
                                },
                                error: function(e) {
                                    console.log(e);
                                }});
                            var fileRef;
                            return (fileRef = file.previewElement) != null ?
                                fileRef.parentNode.removeChild(file.previewElement) : void 0;
                        });
                    }
                },

                success: function(file, response)
                {
                    file.previewElement.id = response.success;
                    //console.log(file);
                    // set new images names in dropzone’s preview box.
                    var olddatadzname = file.previewElement.querySelector("[data-dz-name]");
                    file.previewElement.querySelector("img").alt = response.success;
                    olddatadzname.innerHTML = response.success;
                },
                error: function(file, response)
                {
                    if($.type(response) === "string")
                        var message = response; //dropzone sends it's own error messages in string
                    else
                        var message = response.message;
                    file.previewElement.classList.add("dz-error");
                    _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                    _results = [];
                    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                        node = _ref[_i];
                        _results.push(node.textContent = message);
                    }
                    return _results;
                }

            };
    </script>
@endsection
