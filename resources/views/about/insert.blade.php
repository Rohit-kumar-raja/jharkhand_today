<!-- Large modal -->

<div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title"> Add {{ $page }} </h2><button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('about.insert') }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            @csrf
                            <input type="hidden" name="created_at" value={{ date('Y-m-d') }}>

                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Title</b><span style="color:red;">*</span> </label>
                                <input onkeyup="url_data(this.value)" required name="name" type="text" class="form-control" placeholder="name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>Slug</b><span style="color:red;">*</span> </label>
                                <input id="url" required name="slug" type="text" class="form-control" placeholder="Enter Slug">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>images</b><span style="color:red;">*</span> </label>
                                <input accept="image/*" required name="images" type="file" class="form-control"
                                    placeholder="images">
                            </div>


                            <div class="form-group col-sm-4">
                                <label for="" class="text-dark"> <b>status</b><span style="color:red;">*</span> </label>
                                <select required name="status" type="text" class="form-control" placeholder="Title">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="" class="text-dark "> <b>Page Data</b><span style="color:red;">*</span> </label>
                                <textarea required name="massage" type="text" class="form-control ckeditor" placeholder="message"></textarea>
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

<script>
    function url_data(data) {
        document.getElementById('url').value = data.replaceAll(' ', '+')

    }
</script>
