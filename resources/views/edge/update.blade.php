<x-layout>
    @slot('body')
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i class="fas fa-home    "></i> </a></li>
                    <li class="breadcrumb-item"><a href="#">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edge </li>
                </ol>
            </nav>
            @include('slider.insert')


            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0 col-10">
                    <h1 class="h4">Edge </h1>

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
                    <form action="{{ route('edge.update') }}" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                @csrf
                                <input value="{{ $data->id }}" type="hidden" name="id">
                                <input type="hidden" name="updated_at" value={{ date('Y-m-d') }}>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>status</b> </label>
                                    <select required name="type" type="text" class="form-control"
                                        placeholder="status">
                                        <option value="{{$data->type }}">{{ $data->type }}</option>
                                        <option value="my">My</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Price</b> </label>
                                    <input value="{{ $data->PRICE }}" required name="PRICE" type="text" class="form-control" placeholder="Price">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Convenience</b> </label>
                                    <input value="{{ $data->CONVENIENCE }}" required name="CONVENIENCE" type="text" value="" class="form-control"
                                        placeholder="Convenience">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Design</b> </label>
                                    <input value="{{ $data->DESIGN }}" required name="DESIGN" type="text" class="form-control" placeholder="Design">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Timelines</b> </label>
                                    <input value="{{ $data->TIMELINES }}" required name="TIMELINES" type="text" class="form-control"
                                        placeholder="Timelines">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Quality</b> </label>
                                    <input value="{{ $data->QUALITY }}" required name="QUALITY" type="text" class="form-control"
                                        placeholder="Quality">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Warranty</b> </label>
                                    <input value="{{ $data->WARRANTY }}" required name="WARRANTY" type="text" class="form-control"
                                        placeholder="Warranty">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>Support</b> </label>
                                    <input value="{{ $data->SUPPORT }}" required name="SUPPORT" type="text" class="form-control"
                                        placeholder="Support">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="" class="text-dark"> <b>status</b> </label>
                                    <select required name="status" type="text" class="form-control"
                                        placeholder="status">
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
