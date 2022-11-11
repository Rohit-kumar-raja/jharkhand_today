<!-- Large modal -->

<div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title"> Add Edges </h2><button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('edge.insert') }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            @csrf
                            <input type="hidden" name="created_at" value={{ date('Y-m-d') }}>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>status</b> </label>
                                <select required name="type" type="text" class="form-control"
                                    placeholder="status">
                                    <option value="my">My</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Price</b> </label>
                                <input required name="PRICE" type="text" class="form-control" placeholder="Price">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Convenience</b> </label>
                                <input required name="CONVENIENCE" type="text" value="" class="form-control"
                                    placeholder="Convenience">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Design</b> </label>
                                <input required name="DESIGN" type="text" class="form-control" placeholder="Design">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Timelines</b> </label>
                                <input required name="TIMELINES" type="text" class="form-control"
                                    placeholder="Timelines">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Quality</b> </label>
                                <input required name="QUALITY" type="text" class="form-control"
                                    placeholder="Quality">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Warranty</b> </label>
                                <input required name="WARRANTY" type="text" class="form-control"
                                    placeholder="Warranty">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Support</b> </label>
                                <input required name="SUPPORT" type="text" class="form-control"
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
</div>
