<x-layout>
    @slot('body')
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i class="fas fa-home    "></i> </a></li>
                    <li class="breadcrumb-item"><a href="#">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Site Settting</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0 col-10">
                    <h1 class="h4">Site Setting</h1>
                </div>

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

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Update </h6>
                    </div>

                </div>
                <div class="card-body">
                    <form action="{{ route('siteinfo.update') }}" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                @csrf
                                <input name="id" type="hidden" value="{{ $data->id }}">


                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Address</b> </label>
                                    <input required name="address" value="{{ $data->address }}" type="text" class="form-control" placeholder="Address">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Phone No. 1</b> </label>
                                    <input value="{{ $data->phone }}" required name="phone" type="text" class="form-control" placeholder="Phone no 1">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Phone No. 2</b> </label>
                                    <input value="{{ $data->phone2 }}" name="phone2" type="text" class="form-control" placeholder="Phone no 2">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Email</b> </label>
                                    <input value="{{ $data->email }}" required name="email" type="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Facebook Link</b> </label>
                                    <input value="{{ $data->facebook }}" name="facebook" type="text" class="form-control" placeholder="facebook">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Instagram Link</b> </label>
                                    <input value="{{ $data->instagram }}" name="instagram" type="text" class="form-control" placeholder="instagram">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Whatsapp No.</b> </label>
                                    <input value="{{ $data->whatsapp }}" name="whatsapp" type="text" class="form-control" placeholder="whatsapp">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Youtube Link</b> </label>
                                    <input value="{{ $data->youtube }}" name="youtube" type="text" class="form-control" placeholder="youtube">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Twitter Link</b> </label>
                                    <input value="{{ $data->twitter }}" name="twitter" type="text" class="form-control" placeholder="twitter">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>status</b> </label>
                                    <select required name="status" type="text" class="form-control"
                                        placeholder="Title">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
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
