<!-- Large modal -->

<div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title"> Add Sliders </h2><button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('slider.insert') }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            @csrf
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Title</b> </label>
                                <input required name="title" type="text" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>sub_title</b> </label>
                                <input required name="sub_title" type="text" value="" class="form-control"
                                    placeholder="sub_title">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>image_name</b> </label>
                                <input required name="image_name" type="file" class="form-control"
                                    placeholder="image_name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Read more Link</b> </label>
                                <input required name="virtual_image_name" type="text" class="form-control"
                                    placeholder="Image Link">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>status</b> </label>
                                <select required name="is_deleted" type="text" class="form-control"
                                    placeholder="Title">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12">
                                {{-- <label for="" class="text-dark"> <b>Description</b> </label> --}}
                                <textarea hidden name="description" type="text" class="form-control" placeholder="description">none</textarea>
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
