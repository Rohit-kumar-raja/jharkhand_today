<!-- Large modal -->

<div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title"> Add {{$page}} </h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.category.insert') }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            @csrf
                            <input type="hidden" name="created_at" value={{ date('Y-m-d') }}>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>name</b><span style="color:red;">*</span> </label>
                                <input required name="name" type="text" class="form-control" placeholder="name">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>images</b><span style="color:red;">*</span> </label>
                                <input accept="image/*" required name="images" type="file" class="form-control" placeholder="images">
                            </div>


                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>status</b><span style="color:red;">*</span> </label>
                                <select required name="status" type="text" class="form-control" placeholder="Title">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Is Primary</b> </label>
                                <select required name="is_primary" type="text" class="form-control"
                                    placeholder="Is Primary">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Sl. No.</b> </label>
                                <select required name="arrangement_no" type="text" class="form-control"
                                    placeholder="Sl. No.">
                                    <option value="1">1</option>

                                    @foreach($data as $key => $value)
                                     <option value="{{$key+2}}">{{$key+2}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="" class="text-dark"> <b> Short Description</b><span style="color:red;">*</span> </label>
                                <textarea required name="massage" type="text" class="form-control" placeholder="Description"></textarea>
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
</div>
