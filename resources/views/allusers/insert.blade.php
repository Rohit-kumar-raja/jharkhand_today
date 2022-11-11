<!-- Large modal -->

<div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title"> Add User </h2><button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('allusers.insert') }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            @csrf
                            <input type="hidden" name="created_at" value={{ date('Y-m-d') }}>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>name</b> </label>
                                <input required name="name" type="text" class="form-control" placeholder="name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Phone</b> </label>
                                <input required name="phone" type="text" value="" class="form-control"
                                    placeholder="Phone number">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Email Address</b> </label>
                                <input name="email" type="text" value="" class="form-control"
                                    placeholder="Email address">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>images</b> </label>
                                <input accept="image/*" required name="images" type="file" class="form-control"
                                    placeholder="images">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>City</b> </label>
                                <input name="city" type="text" value="" class="form-control"
                                    placeholder="Email address">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>State</b> </label>
                                <input name="state" type="text" value="" class="form-control"
                                    placeholder="Email address">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>address</b> </label>
                                <input name="address" type="text" value="" class="form-control"
                                    placeholder="Email address">
                            </div>


                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>status</b> </label>
                                <select required name="status" type="text" class="form-control" placeholder="Title">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="" class="text-dark"> <b>message</b> </label>
                                <textarea required name="message" type="text" class="form-control" placeholder="message"></textarea>
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
