<x-layout>
    @slot('body')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i class="fas fa-home    "></i> </a></li>
                <li class="breadcrumb-item"><a href="#">{{ env('APP_NAME') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $page }}</li>
            </ol>
        </nav>
        @include('slider.insert')


        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0 col-10">
                <h1 class="h4">{{ $page }}</h1>

            </div>

        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Update </h6>
                </div>

            </div>
            <div class="card-body">
                <form action="{{ route('slider.update') }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            @csrf
                            <input name="id" type="hidden" value="{{ $data->id }}">

                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Title</b> </label>
                                <input required name="title" value="{{ $data->title }}" type="text" class="form-control" placeholder="Title">

                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>sub_title</b> </label>
                                <input value="{{ $data->sub_title }}" required name="sub_title" type="text" value="Netaji Subhas Univerty" class="form-control" placeholder="sub_title">
                            </div>
                            <!-- </div> -->
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>image</b> </label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input name="image_name" type="file" class="form-control" placeholder="image_name">

                                    </div>
                                    <div class="col-sm-8">
                                        <img width="200" src="{{ asset('upload/slider/' . $data->image_name) }}" alt="">

                                    </div>

                                </div>

                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Read more Link</b> </label>
                                <input value="{{ $data->virtual_image_name }}" required name="virtual_image_name" type="text" class="form-control" placeholder="virtual_image_name	">

                            </div>


                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>status</b> </label>
                                <select required name="is_deleted" type="text" class="form-control" placeholder="Title">
                                    <option value="1">Active</option>

                                    <option value="0">Deactive</option>

                                </select>
                            </div>
                            <div class="form-group col-sm-12">
                                {{-- <label for="" class="text-dark"> <b>Description</b> </label> --}}
                                <textarea hidden name="description" id="description" class="form-control" placeholder="description">{{ $data->description }}</textarea>

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

<script language="javascript" type="text/javascript">
    pramukhIME.addLanguage(PramukhIndic, "hindi");
    pramukhIME.enable();
</script>
