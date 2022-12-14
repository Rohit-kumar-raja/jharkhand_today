<x-layout>
    @slot('body')
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i class="fas fa-home    "></i> </a></li>
                    <li class="breadcrumb-item"><a href="#">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">services</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0 col-10">
                    <h1 class="h4">services</h1>
                </div>

            </div>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 row">
                    <div class="col-10">
                        <h6 class="m-0 font-weight-bold text-primary">Update </h6>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('services') }}" class="m-0 font-weight-bold text-success"> <i class="fas fa-arrow-left" ></i> Go To Services </a>
                    </div>
                </div>
              
                <!-- Large modal -->



                @if (session('store'))
                    <div class="alert alert-success">
                        {{ session('store') }}
                    </div>
                @endif
                @if (session('delete'))
                    <div class="alert alert-danger">
                        {{ session('delete') }}
                    </div>
                @endif
                @if (session('update'))
                    <div class="alert alert-success">
                        {{ session('update') }}
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-secondary">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('status1'))
                    <div class="alert alert-success">
                        {{ session('status1') }}
                    </div>
                @endif
                <div class="modal-body">
                    <form action="{{ route('services.update') }}" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                @csrf
                                <input type="hidden" name="id" value={{ $data->id }}>

                                <input type="hidden" name="created_at" value={{ date('Y-m-d') }}>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>type</b> </label>
                                    <select required name="category" class="form-control">
                                        <option selected disabled> - Select - </option>
                                        @foreach ($category as $data1)
                                            <option value="{{ $data1->id }}">{{ $data1->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Full Title</b> </label>
                                    <input required onkeyup="url_data(this.value)" value="{{ $data->log_title }}"
                                        name="log_title" type="text" class="form-control" placeholder="name">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b> url </b> </label>
                                    <input value="{{ $data->slug }}" required id="url" name="slug"
                                        type="text" class="form-control" placeholder="url">
                                </div>


                                <div class="form-group col-sm-12">
                                    <label for="" class="text-dark"> <b> Log Description </b> </label>
                                    <textarea required name="log_description" type="text" class="form-control ckeditor" placeholder="message">{{ $data->log_description }}</textarea>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b> Title 1</b> </label>
                                    <input value="{{ $data->title1 }}" name="title1" type="text" class="form-control"
                                        placeholder="name">
                                </div>

                                <div class="form-group col-sm-8">
                                    <label for="" class="text-dark"> <b> Description 1 </b> </label>
                                    <textarea name="description1" type="text" class="form-control" placeholder="message max 255 charecter">{{ $data->description1 }}</textarea>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b> Title 2</b> </label>
                                    <input value="{{ $data->title2 }}" name="title2" type="text" class="form-control"
                                        placeholder="name">
                                </div>

                                <div class="form-group col-sm-8">
                                    <label for="" class="text-dark"> <b> Description 2 </b> </label>
                                    <textarea name="description2" type="text" class="form-control" placeholder="message max 255 charecter">{{ $data->description2 }}</textarea>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b> Title 3</b> </label>
                                    <input value="{{ $data->title3 }}" name="title3" type="text"
                                        class="form-control" placeholder="name">
                                </div>

                                <div class="form-group col-sm-8">
                                    <label for="" class="text-dark"> <b> Description 3 </b> </label>
                                    <textarea name="description3" type="text" class="form-control"placeholder="message max 255 charecter">{{ $data->description3 }}</textarea>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b> Title 4</b> </label>
                                    <input value="{{ $data->title4 }}" name="title4" type="text"
                                        class="form-control" placeholder="name">
                                </div>

                                <div class="form-group col-sm-8">
                                    <label for="" class="text-dark"> <b> Description 4 </b> </label>
                                    <textarea name="description4" type="text" class="form-control" placeholder="message max 255 charecter">{{ $data->description4 }}</textarea>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b> Title 5</b> </label>
                                    <input value="{{ $data->title5 }}" name="title5" type="text"
                                        class="form-control" placeholder="name">
                                </div>

                                <div class="form-group col-sm-8">
                                    <label for="" class="text-dark"> <b> Description 5 </b> </label>
                                    <textarea name="description5" type="text" class="form-control" placeholder="message max 255 charecter">{{ $data->description5 }}</textarea>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b><i class="fab fa-youtube"></i>
                                            Youtube
                                            Link</b> </label>
                                    <input value="{{ $data->youtube }}" name="youtube" type="text"
                                        class="form-control" placeholder="Youtube Link">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b> <i class="fa-thin fa-360-degrees"></i>
                                            360
                                            view Image Link</b> </label>
                                    <input value="{{ $data->view360 }}" name="view360" type="text"
                                        class="form-control" placeholder=" 360 view image link ">
                                </div>



                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>status</b> </label>
                                    <select required name="status" type="text" class="form-control"
                                        placeholder="Title">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 imgUp mt-5">
                                        <div class="imagePreview"></div>
                                        <label class="btn btn-primary">
                                            Upload<input type="file" accept="image/*" name="img[]"
                                                class="uploadFile img" value="Upload Photo"
                                                style="width: 0px;height: 0px;overflow: hidden;">
                                        </label>
                                    </div><!-- col-2 -->
                                    <i class="fa fa-plus imgAdd mt-5"></i>
                                </div>
                                @php
                                    $images = DB::table('service_images')
                                        ->where('service_id', $data->id)
                                        ->get();
                                    
                                @endphp
                                <div class="row">
                                    @foreach ($images as $image)
                                        <div class="col-sm-3">
                                            <img class="image-fluid imgu"
                                                src="{{ asset('upload/services/') . '/' . $image->name }}"
                                                alt="">
                                            <a class="text-danger" href="{{ route('services.image.delete', $image->id) }}"> <i
                                                    class="fas fa-trash-alt"></i></a>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    @endslot
</x-layout>
<script>
    function url_data(data) {
        document.getElementById('url').value = data.replaceAll(' ', '+')

    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(".imgAdd").click(function() {
        $(this).closest(".row").find('.imgAdd').before(
            '<div class="col-sm-3 imgUp mt-5"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" accept="image/*" name="img[]" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fas fa-times del"></i></div>'
        );
    });
    $(document).on("click", "i.del", function() {
        // 	to remove card
        $(this).parent().remove();
        // to clear image
        // $(this).parent().find('.imagePreview').css("background-image","url('')");
    });
    $(function() {
        $(document).on("change", ".uploadFile", function() {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader)
                return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function() { // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image",
                        "url(" + this.result + ")");
                }
            }

        });
    });
</script>
<style>
    .imgu {
        height: 150px;
        width: 196px;
    }

    body {
        background-color: #f5f5f5;
    }

    .imagePreview {
        width: 100%;
        height: 180px;
        background-position: center center;
        background: url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
        background-color: #fff;
        background-size: cover;
        background-repeat: no-repeat;
        display: inline-block;
        box-shadow: 0px -3px 6px 2px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        display: block;
        border-radius: 0px;
        box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, 0.2);
        margin-top: -5px;
    }

    .imgUp {
        margin-bottom: 15px;
    }

    .del {
        position: absolute;
        top: 838px;
        padding-left: 5px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        background-color: rgba(255, 255, 255, 0.6);
        cursor: pointer;
    }

    .imgAdd {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #4bd7ef;
        color: #fff;
        box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.2);
        text-align: center;
        line-height: 30px;
        margin-top: 0px;
        cursor: pointer;
        font-size: 15px;
    }
</style>
