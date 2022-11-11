<!-- Large modal -->

<div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title"> Add Client </h2><button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('career.insert') }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            @csrf
                            <input type="hidden" name="created_at" value={{ date('Y-m-d') }}>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>name</b> </label>
                                <input required name="name" type="text" class="form-control" placeholder="name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Number of Jobs</b> </label>
                                <input required name="no_of_job" type="number" class="form-control"
                                    placeholder="Enter Number of jobs ">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>start Date</b> </label>
                                <input required name="start" type="date" class="form-control"
                                    placeholder="Start Date ">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b> End Date</b> </label>
                                <input required name="end" type="date" class="form-control" placeholder="start">
                            </div>
                        
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>images</b> </label>
                                <input accept="image/*" required name="images" type="file" class="form-control"
                                    placeholder="images">
                            </div>


                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>status</b> </label>
                                <select required name="status" class="form-control" placeholder="Title">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="" class="text-dark"> <b>message</b> </label>
                                <textarea name="description" class="form-control" placeholder="Descriptio of the Career"></textarea>
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
