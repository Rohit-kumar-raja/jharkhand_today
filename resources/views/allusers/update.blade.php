<x-layout>
    @slot('body')
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i class="fas fa-home    "></i> </a></li>
                    <li class="breadcrumb-item"><a href="#">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Team</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0 col-10">
                    <h1 class="h4">Team</h1>
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
                    <form action="{{ route('allusers.update') }}" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                @csrf
                                <input name="id" type="hidden" value="{{ $data->id }}">
                                <input type="hidden" name="created_at" value={{ date('Y-m-d') }}>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>name</b> </label>
                                    <input value="{{ $data->name }}"required name="name" type="text"
                                        class="form-control" placeholder="name">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Phone</b> </label>
                                    <input value="{{ $data->phone }}"required name="phone" type="text" value=""
                                        class="form-control" placeholder="Phone number">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Email Address</b> </label>
                                    <input value="{{ $data->email }}"name="email" type="text" value=""
                                        class="form-control" placeholder="Email address">
                                </div>
                                <div class="form-group col-sm-4">
                                    <div class="row">
                                        <div class="col-6"> <label for="" class="text-dark"> <b>images</b> </label>
                                            <input value="{{ $data->name }}"accept="image/*" name="images" type="file"
                                                class="form-control" placeholder="images">
                                        </div>
                                        <div class="col-6"><img src="{{ asset('upload/allusers/' . $data->images) }}" alt=""></div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>City</b> </label>
                                    <input value="{{ $data->city }}"name="city" type="text" value=""
                                        class="form-control" placeholder="Email address">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>State</b> </label>
                                    <input value="{{ $data->state }}"name="state" type="text" value=""
                                        class="form-control" placeholder="Email address">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>address</b> </label>
                                    <input value="{{ $data->address }}"name="address" type="text" value=""
                                        class="form-control" placeholder="Email address">
                                </div>


                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>status</b> </label>
                                    <select required name="status" type="text" class="form-control"
                                        placeholder="Title">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="" class="text-dark"> <b>message</b> </label>
                                    <textarea name="message" type="text" class="form-control" placeholder="message">{{ $data->message }}</textarea>
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
