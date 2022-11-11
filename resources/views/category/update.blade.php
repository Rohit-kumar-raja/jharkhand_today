<x-layout>
    @slot('body')
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i class="fas fa-home    "></i> </a></li>
                    <li class="breadcrumb-item"><a href="#">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0 col-10">
                    <h1 class="h4">Category</h1>
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
                    <form action="{{ route('category.update') }}" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                @csrf
                                <input name="id" type="hidden" value="{{ $data->id }}">

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>name</b> </label>
                                    <input required name="name" value="{{ $data->name }}" type="text"
                                        class="form-control" placeholder="name">
                                </div>


                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>image</b> </label>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input name="images" accept="image/*" type="file" class="form-control"
                                                placeholder="images">
                                        </div>
                                        <div class="col-sm-8">
                                            <img width="200" src="{{ asset('upload/category/' . $data->images) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>status</b> </label>
                                    <select required name="status" type="text" class="form-control" placeholder="Title">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="" class="text-dark"> <b>Description</b> </label>
                                    <textarea name="massage" id="massage" class="form-control" placeholder="message">{{ $data->massage }}</textarea>
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
