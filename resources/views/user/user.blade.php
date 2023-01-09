<x-layout>
    @slot('body')
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="#"><svg class="icon icon-xxs" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a href="#">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>

            <!-- User modal -->
            <div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="h6 modal-title" id="modalTitle"></h2><button type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="userForm">
                                <div class="container">
                                    <div class="row">
                                        <input type="hidden" name="created_at" value={{ date('Y-m-d') }}>
                                        <div class="form-group col-sm-4">
                                            <input type="hidden" name="id" id="id">
                                            <label for="" class="text-dark"> <b>name</b> </label>
                                            <input required name="name" id="name" type="text"
                                                class="form-control" placeholder="name">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="" class="text-dark"> <b> Role Name</b><span
                                                    style="color:red;">*</span> </label>
                                            <select required name="role_name" id="role_name" class="form-control">
                                                <option selected disabled> - Select - </option>
                                                <option value="reporter">Reporter</option>
                                                <option value="editor">Editor</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="" class="text-dark"> <b>email</b> </label>
                                            <input required name="email" id="email" type="email"
                                                class="form-control" placeholder="email">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="" class="text-dark"> <b>password</b> </label>
                                            <input required name="password" id="password" type="text"
                                                class="form-control" placeholder="password">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary" id="btnSave"
                                        onclick="addOrEdit()"></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0 col-10">
                    <h1 class="h4">Users</h1>

                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-block btn-gray-800 mb-3 btn-sm" onclick="addUser()">Add
                        new</button>
                </div>
            </div>

            <div id="responseMessage">
            </div>

        </div>

        <div class="card">
            <div class="table-responsive py-4">
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <thead class="text-dark">
                        <tr>
                            <th>S.NO</th>
                            <th>name </th>
                            <th>role name </th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot class="text-dark">
                        <tr>
                            <th>S.NO</th>
                            <th>name </th>
                            <th>role name </th>

                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody id="toAppendUsers">
                    </tbody>
                </table>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
            "use strict";

            $(document).ready(function() {
                getUsers();
            });

            function addOrEdit() {
                let isIdAppend = $("#id").val();
                if (isIdAppend == "") {
                    saveUser();
                } else {
                    updateUser();
                }
            }

            function addUser() {
                $('#userModal').modal('show');
                $('#userForm').trigger("reset");
                $("#id").val("");
                $("#modalTitle").html("User Creation");
                $("#btnSave").html("CREATE");
            }

            function saveUser(id) {
                let name = $('#name').val();
                let role_name = $('#role_name').val();
                let email = $('#email').val();
                let password = $('#password').val();
                let token = "{{ csrf_token() }}";
                $.ajax({
                    url: "{{ url('/users') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        name: name,
                        role_name: role_name,
                        email: email,
                        password: password,
                        _token: token
                    },
                    success: function(response) {
                        $("#responseMessage").html(`
                            <div class="alert alert-success">
                                ${response.message}
                            </div>
                        `);
                        $('#userModal').modal('hide');
                        getUsers();
                        console.log(response);
                        $('#userForm').trigger("reset");
                    }
                });
            }

            function editUser(id) {
                $("#id").val(id);
                $("#modalTitle").html("Edit User");
                $("#btnSave").html("UPDATE");

                $.ajax({
                    url: "{{ url('/users') }}" + "/" + id,
                    method: "GET",
                    contentType: 'application/json',
                    dataType: "json",
                    success: function(data) {
                        $('#id').val(data.data.id);
                        $('#role_name').val(data.data.role_name);
                        $('#name').val(data.data.name);
                        $('#email').val(data.data.email);
                        $('#password').val(data.data.password);
                        $('#userModal').modal('show');
                    }
                });
            }

            function updateUser() {
                let id = $('#id').val();
                let name = $('#name').val();
                let role_name = $('#role_name').val();
                let email = $('#email').val();
                let password = $('#password').val();
                let token = "{{ csrf_token() }}";
                $.ajax({
                    url: "{{ url('/users') }}" + "/" + id,
                    type: "PUT",
                    dataType: "json",
                    data: {
                        id: id,
                        name: name,
                        role_name: role_name,
                        email: email,
                        password: password,
                        _token: token
                    },
                    success: function(response) {
                        $("#responseMessage").html(`
                            <div class="alert alert-success">
                                ${response.message}
                            </div>
                        `);
                        $('#userModal').modal('hide');
                        getUsers();
                        console.log(response);
                        $('#userForm').trigger("reset");
                    }
                });
            }

            function getUsers() {
                $.ajax({
                    type: "GET",
                    url: "{{ url('get-users') }}",
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        let toAppend = "";
                        $.each(response.data, function(k, v) {
                            toAppend +=
                                `
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        ${v.name}
                                    </td>
                                    <td>
                                        ${v.role_name}
                                    </td>
                                    <div class="modal fade" id="modal-default${v.id}" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="h6 modal-title"> Message</h2><button type="button" class="btn-close"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                ${v.id}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <td><a href="#" class="btn btn-warning btn-sm" onclick='editUser(${v.id})'><i class="far fa-edit"></i></a>
                                    </td>
                                    <td><a href="#" class="btn btn-danger btn-sm" onclick='destroyUser(${v.id})'><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            `;
                        });
                        $('#toAppendUsers').html(toAppend);
                    }
                });
            }

            function destroyUser(id) {
                let token = "{{ csrf_token() }}";
                if (confirm("Are you sure?") == true) {
                    $.ajax({
                        url: "{{ url('/users') }}" + "/" + id,
                        method: "DELETE",
                        dataType: "json",
                        data: {
                            _token: token,
                        },
                        success: function(response) {
                            $("#responseMessage").html(`
                                <div class="alert alert-danger">
                                    ${response.message}
                                </div>
                        `);
                            console.log(response);
                            getUsers();
                        }
                    });
                }

            }
        </script>
    @endslot
</x-layout>
