<!-- Large modal -->

<x-layout>
    @slot('body')
    <div class="modal-content mt-5  mb-5">
        <div class="modal-header">
            <h2 class="h6 modal-title"><a class="btn btn-sm btn-secondary" href="{{ route('products.product') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> All
                    {{ $page }}</a> </h2>
        </div>
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
            <form action="{{ route('products.product.insert') }}" method="POST" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        @csrf
                        <input type="hidden" name="created_by_user_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="created_at" value={{ date('Y-m-d') }}>
                        <div class="form-group col-sm-4">
                            <label for="" class="text-dark"> <b> Select Category</b><span style="color:red;">*</span> </label>
                            <select required name="category" class="form-control">
                                <option selected disabled> - Select - </option>
                                @foreach ($category as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="" class="text-dark"> <b>Full Title</b><span style="color:red;">*</span> </label>
                            <input required onkeyup="url_data(this.value)" onkeyup="url_data(this.value)" name="log_title" type="text" class="form-control" placeholder="name">
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="" class="text-dark"> <b> url</b><span style="color:red;">*</span> </label>
                            <input required id="url" name="slug" type="text" class="form-control" placeholder="url">
                        </div>


                        <div class="form-group col-sm-12">
                            <label for="" class="text-dark"> <b> Full News</b><span style="color:red;">*</span> </label>
                            <textarea required name="log_description" type="text" class="form-control ckeditor" placeholder="Type News Here..."></textarea>
                        </div>



                        <div class="form-group col-sm-4">
                            <label for="" class="text-dark"> <b> District</b><span style="color:red;">*</span>
                            </label>
                            <select class="form-control" name="district">
                                <option value="">Select ..</option>
                                <option value="ranchi">Ranchi</option>
                                <option value="bokaro">Bokaro</option>
                                <option value="chatra">Chatra</option>
                                <option value="deoghar">Deoghar</option>
                                <option value="dhanbad">Dhanbad</option>
                                <option value="dumka">Dumka</option>
                                <option value="east-singhbhum">East Singhbhum</option>
                                <option value="garhwa">Garhwa</option>
                                <option value="giridh">Giridh</option>
                                <option value="godda">Godda</option>
                                <option value="gumla">Gumla</option>
                                <option value="hazaribag">Hazaribag</option>
                                <option value="jamtara">Jamtara</option>
                                <option value="khunti">Khunti</option>
                                <option value="koderma">Koderma</option>
                                <option value="latehar">Latehar</option>
                                <option value="lohardaga">Lohardaga</option>
                                <option value="pakur">Pakur</option>
                                <option value="palamau">Palamau</option>
                                <option value="ramgarh">Ramgarh</option>
                                <option value="ranchi">Ranchi</option>
                                <option value="sahibganj">Sahibganj</option>
                                <option value="seraikela-kharsawan">Seraikela Kharsawan</option>
                                <option value="simdega">Simdega</option>
                                <option value="west-singhbhum">West Singhbhum</option>
                            </select>
                        </div>


                        <div class="form-group col-sm-4">
                            <label for="" class="text-dark"> <b><i class="fab fa-youtube"></i> Youtube
                                    Link</b> </label>
                            <input name="youtube" type="text" class="form-control" placeholder="Youtube Link">
                        </div>

                        {{-- <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b> <i class="fa-thin fa-360-degrees"></i> 360
                                        view Image Link</b> </label>
                                <input name="view360" type="text" class="form-control"
                                    placeholder=" 360 view image link ">
                            </div> --}}

                        <div class="form-group col-sm-4">
                            <input type="hidden" name="status" value="0">
                            {{-- <label for="" class="text-dark"> <b>status</b><span style="color:red;">*</span> </label>
                            <select required name="status" type="text" class="form-control" placeholder="Title">
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select> --}}
                        </div>

                        <div class="row">
                            <div class="col-sm-3 imgUp mt-5">
                                <div class="imagePreview"></div>
                                <label class="btn btn-primary">
                                    Upload<input type="file" accept="image/*" name="img[]" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                </label>
                            </div><!-- col-2 -->
                            <i class="fa fa-plus imgAdd mt-5"></i>
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


<script type="text/javascript">
    var loop = 0;
    $(document).ready(function() {
        var i = 1;

        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i +
                '" class="dynamic-added  " ><td><input type="text" id="slno' + i + '" value="' + i +
                '" readonly class="form-control form-control-sm" style="border:none;" /></td> <td> <input class="form-control form-control-sm qty" type="text" size="7" name="title[]"  /> </td><td>   <input class="form-control form-control-sm product" name="description[]" /> </td> <td><button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove btn-sm">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            i--;

            $('#row' + button_id + '').remove();
        });

    });
</script>

<style>
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
        position: relative;
        top: -231px;
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

    .fa-plus:before {
        margin-left: -3px;
    }
</style>
