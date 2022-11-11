<x-layout>
    @slot('body')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="#"><svg class="icon icon-xxs" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg></a></li>
                        <li class="breadcrumb-item"><a href="#">Volt</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users List</li>
                    </ol>
                </nav>
                <h2 class="h4">Users List</h2>
                <p class="mb-0">Your web analytics dashboard template.</p>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0"><a href="#"
                    class="btn btn-sm btn-gray-800 d-inline-flex align-items-center"><svg class="icon icon-xs me-2"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg> New User</a>
                <div class="btn-group ms-2 ms-lg-3"><button type="button"
                        class="btn btn-sm btn-outline-gray-600">Share</button> <button type="button"
                        class="btn btn-sm btn-outline-gray-600">Export</button></div>
            </div>
        </div>
        <div class="table-settings mb-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-9 col-lg-8 d-md-flex">
                    <div class="input-group me-2 me-lg-3 fmxw-300"><span class="input-group-text"><svg class="icon icon-xs"
                                x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg> </span><input type="text" class="form-control" placeholder="Search users"></div>
                    <select class="form-select fmxw-200 d-none d-md-inline" aria-label="Message select example 2">
                        <option selected="selected">All</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                        <option value="3">Pending</option>
                        <option value="3">Cancelled</option>
                    </select>
                </div>
                <div class="col-3 col-lg-4 d-flex justify-content-end">
                    <div class="btn-group">
                        <div class="dropdown me-1"><button
                                class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                    class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                                    </path>
                                </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                            <div class="dropdown-menu dropdown-menu-end pb-0"><span
                                    class="small ps-3 fw-bold text-dark">Show</span> <a
                                    class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg
                                        class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></a><a class="dropdown-item fw-bold" href="#">20</a> <a
                                    class="dropdown-item fw-bold rounded-bottom" href="#">30</a></div>
                        </div>
                        <div class="dropdown"><button
                                class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                    class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"></path>
                                </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0"><span
                                    class="small ps-3 fw-bold text-dark">Show</span> <a
                                    class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg
                                        class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></a><a class="dropdown-item fw-bold" href="#">20</a> <a
                                    class="dropdown-item fw-bold rounded-bottom" href="#">30</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body shadow border-0 table-wrapper table-responsive">
            <div class="d-flex mb-3"><select class="form-select fmxw-200" aria-label="Message select example">
                    <option selected="selected">Bulk Action</option>
                    <option value="1">Send Email</option>
                    <option value="2">Change Group</option>
                    <option value="3">Delete User</option>
                </select> <button class="btn btn-sm px-3 btn-secondary ms-3">Apply</button></div>
            <table class="table user-table table-hover align-items-center">
                <thead>
                    <tr>
                        <th class="border-bottom">
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck55"> <label class="form-check-label"
                                    for="userCheck55"></label></div>
                        </th>
                        <th class="border-bottom">Name</th>
                        <th class="border-bottom">Date Created</th>
                        <th class="border-bottom">Verified</th>
                        <th class="border-bottom">Status</th>
                        <th class="border-bottom">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck1"> <label class="form-check-label"
                                    for="userCheck1"></label>
                            </div>
                        </td>
                        <td><a href="#" class="d-flex align-items-center"><img
                                    src="../assets/img/team/profile-picture-1.jpg" class="avatar rounded-circle me-3"
                                    alt="Avatar">
                                <div class="d-block"><span class="fw-bold">Roy Fendley</span>
                                    <div class="small text-gray"><span class="__cf_email__"
                                            data-cfemail="1f767179705f7a677e726f737a317c7072">[email&#160;protected]</span>
                                    </div>
                                </div>
                            </a></td>
                        <td><span class="fw-normal">10 Feb 2020</span></td>
                        <td><span class="fw-normal d-flex align-items-center"><svg class="icon icon-xxs text-success me-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg> Email</span></td>
                        <td><span class="fw-normal text-success">Active</span></td>
                        <td>
                            <div class="btn-group"><button
                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                                        class="dropdown-item d-flex align-items-center" href="#"><svg
                                            class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd"></path>
                                        </svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg> View Details </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                            </path>
                                        </svg> Suspend</a></div>
                            </div><svg class="icon icon-xs text-danger ms-1" title="Delete" data-bs-toggle="tooltip"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck2"> <label class="form-check-label"
                                    for="userCheck2"></label>
                            </div>
                        </td>
                        <td><a href="#" class="d-flex align-items-center">
                                <div
                                    class="avatar d-flex align-items-center justify-content-center fw-bold rounded bg-secondary me-3">
                                    <span>SA</span>
                                </div>
                                <div class="d-block"><span class="fw-bold">Scott Anderson</span>
                                    <div class="small text-gray"><span class="__cf_email__"
                                            data-cfemail="4b22252d240b2e332a263b272e65282426">[email&#160;protected]</span>
                                    </div>
                                </div>
                            </a></td>
                        <td><span class="fw-normal">10 Feb 2020</span></td>
                        <td><span class="fw-normal d-flex align-items-center"><svg class="icon icon-xxs text-success me-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg> Email</span></td>
                        <td><span class="fw-normal text-success">Active</span></td>
                        <td>
                            <div class="btn-group"><button
                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                                        class="dropdown-item d-flex align-items-center" href="#"><svg
                                            class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd"></path>
                                        </svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg> View Details </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                            </path>
                                        </svg> Suspend</a></div>
                            </div><svg class="icon icon-xs text-danger ms-1" title="Delete" data-bs-toggle="tooltip"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck3"> <label class="form-check-label"
                                    for="userCheck3"></label>
                            </div>
                        </td>
                        <td><a href="#" class="d-flex align-items-center"><img
                                    src="../assets/img/team/profile-picture-2.jpg" class="avatar rounded-circle me-3"
                                    alt="Avatar">
                                <div class="d-block"><span class="fw-bold">George Driskell</span>
                                    <div class="small text-gray"><span class="__cf_email__"
                                            data-cfemail="f49d9a929bb4918c9599849891da979b99">[email&#160;protected]</span>
                                    </div>
                                </div>
                            </a></td>
                        <td><span class="fw-normal">10 Feb 2020</span></td>
                        <td><span class="fw-normal d-flex align-items-center"><svg class="icon icon-xxs text-success me-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg> Email</span></td>
                        <td><span class="fw-normal text-success">Active</span></td>
                        <td>
                            <div class="btn-group"><button
                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                                        class="dropdown-item d-flex align-items-center" href="#"><svg
                                            class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd"></path>
                                        </svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg> View Details </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                            </path>
                                        </svg> Suspend</a></div>
                            </div><svg class="icon icon-xs text-danger ms-1" title="Delete" data-bs-toggle="tooltip"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck4"> <label class="form-check-label"
                                    for="userCheck4"></label>
                            </div>
                        </td>
                        <td><a href="#" class="d-flex align-items-center"><img
                                    src="../assets/img/team/profile-picture-3.jpg" class="avatar rounded-circle me-3"
                                    alt="Avatar">
                                <div class="d-block"><span class="fw-bold">Bonnie Green</span>
                                    <div class="small text-gray"><span class="__cf_email__"
                                            data-cfemail="0b62656d644b6e736a667b676e25686466">[email&#160;protected]</span>
                                    </div>
                                </div>
                            </a></td>
                        <td><span class="fw-normal">10 Feb 2020</span></td>
                        <td><span class="fw-normal d-flex align-items-center"><svg class="icon icon-xxs text-success me-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg> Email</span></td>
                        <td><span class="fw-normal text-success">Active</span></td>
                        <td>
                            <div class="btn-group"><button
                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                                        class="dropdown-item d-flex align-items-center" href="#"><svg
                                            class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd"></path>
                                        </svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg> View Details </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                            </path>
                                        </svg> Suspend</a></div>
                            </div><svg class="icon icon-xs text-danger ms-1" title="Delete" data-bs-toggle="tooltip"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck5"> <label class="form-check-label"
                                    for="userCheck5"></label>
                            </div>
                        </td>
                        <td><a href="#" class="d-flex align-items-center"><img
                                    src="../assets/img/team/profile-picture-7.jpg" class="avatar rounded-circle me-3"
                                    alt="Avatar">
                                <div class="d-block"><span class="fw-bold">Ronnie Buchanan</span>
                                    <div class="small text-gray"><span class="__cf_email__"
                                            data-cfemail="7910171f16391c01181409151c571a1614">[email&#160;protected]</span>
                                    </div>
                                </div>
                            </a></td>
                        <td><span class="fw-normal">10 Feb 2020</span></td>
                        <td><span class="fw-normal d-flex align-items-center"><svg class="icon icon-xxs text-purple me-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg> Email</span></td>
                        <td><span class="fw-normal text-purple">Pending</span></td>
                        <td>
                            <div class="btn-group"><button
                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                                        class="dropdown-item d-flex align-items-center" href="#"><svg
                                            class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd"></path>
                                        </svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg> View Details </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                            </path>
                                        </svg> Suspend</a></div>
                            </div><svg class="icon icon-xs text-danger ms-1" title="Delete" data-bs-toggle="tooltip"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck6"> <label class="form-check-label"
                                    for="userCheck6"></label>
                            </div>
                        </td>
                        <td><a href="#" class="d-flex align-items-center">
                                <div
                                    class="avatar d-flex align-items-center justify-content-center fw-bold rounded bg-secondary me-3">
                                    <span>JR</span>
                                </div>
                                <div class="d-block"><span class="fw-bold">Jane Rinehart</span>
                                    <div class="small text-gray"><span class="__cf_email__"
                                            data-cfemail="81e8efe7eec1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</span>
                                    </div>
                                </div>
                            </a></td>
                        <td><span class="fw-normal">10 Feb 2020</span></td>
                        <td><span class="fw-normal d-flex align-items-center"><svg class="icon icon-xxs text-purple me-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg> Email</span></td>
                        <td><span class="fw-normal text-purple">Pending</span></td>
                        <td>
                            <div class="btn-group"><button
                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                                        class="dropdown-item d-flex align-items-center" href="#"><svg
                                            class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd"></path>
                                        </svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg> View Details </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                            </path>
                                        </svg> Suspend</a></div>
                            </div><svg class="icon icon-xs text-danger ms-1" title="Delete" data-bs-toggle="tooltip"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck7"> <label class="form-check-label"
                                    for="userCheck7"></label>
                            </div>
                        </td>
                        <td><a href="#" class="d-flex align-items-center"><img
                                    src="../assets/img/team/profile-picture-4.jpg" class="avatar rounded-circle me-3"
                                    alt="Avatar">
                                <div class="d-block"><span class="fw-bold">William Ginther</span>
                                    <div class="small text-gray"><span class="__cf_email__"
                                            data-cfemail="dfb6b1b9b09fbaa7beb2afb3baf1bcb0b2">[email&#160;protected]</span>
                                    </div>
                                </div>
                            </a></td>
                        <td><span class="fw-normal">10 Feb 2020</span></td>
                        <td><span class="fw-normal d-flex align-items-center"><svg class="icon icon-xxs text-purple me-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg> Email</span></td>
                        <td><span class="fw-normal text-purple">Pending</span></td>
                        <td>
                            <div class="btn-group"><button
                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                                        class="dropdown-item d-flex align-items-center" href="#"><svg
                                            class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd"></path>
                                        </svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg> View Details </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                            </path>
                                        </svg> Suspend</a></div>
                            </div><svg class="icon icon-xs text-danger ms-1" title="Delete" data-bs-toggle="tooltip"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck8"> <label class="form-check-label"
                                    for="userCheck8"></label>
                            </div>
                        </td>
                        <td><a href="#" class="d-flex align-items-center"><img
                                    src="../assets/img/team/profile-picture-5.jpg" class="avatar rounded-circle me-3"
                                    alt="Avatar">
                                <div class="d-block"><span class="fw-bold">Margaret Dow</span>
                                    <div class="small text-gray"><span class="__cf_email__"
                                            data-cfemail="dcb5b2bab39cb9a4bdb1acb0b9f2bfb3b1">[email&#160;protected]</span>
                                    </div>
                                </div>
                            </a></td>
                        <td><span class="fw-normal">10 Feb 2020</span></td>
                        <td><span class="fw-normal d-flex align-items-center"><svg class="icon icon-xxs text-danger me-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg> Email</span></td>
                        <td><span class="fw-normal text-danger">Suspended</span></td>
                        <td>
                            <div class="btn-group"><button
                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                                        class="dropdown-item d-flex align-items-center" href="#"><svg
                                            class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd"></path>
                                        </svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg> View Details </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                            </path>
                                        </svg> Suspend</a></div>
                            </div><svg class="icon icon-xs text-danger ms-1" title="Delete" data-bs-toggle="tooltip"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-0">
                            <div class="form-check dashboard-check"><input class="form-check-input" type="checkbox"
                                    value="" id="userCheck9"> <label class="form-check-label"
                                    for="userCheck9"></label>
                            </div>
                        </td>
                        <td class="border-0"><a href="#" class="d-flex align-items-center">
                                <div
                                    class="avatar d-flex align-items-center justify-content-center fw-bold rounded bg-purple text-white me-3">
                                    <span>MH</span>
                                </div>
                                <div class="d-block"><span class="fw-bold">Michael Hopkins</span>
                                    <div class="small text-gray"><span class="__cf_email__"
                                            data-cfemail="7c15121a133c19041d110c1019521f1311">[email&#160;protected]</span>
                                    </div>
                                </div>
                            </a></td>
                        <td class="border-0"><span class="fw-normal">10 Feb 2020</span></td>
                        <td class="border-0"><span class="fw-normal d-flex align-items-center"><svg
                                    class="icon icon-xxs text-danger me-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg> Email</span></td>
                        <td class="border-0"><span class="fw-normal text-danger">Suspended</span></td>
                        <td class="border-0">
                            <div class="btn-group"><button
                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a
                                        class="dropdown-item d-flex align-items-center" href="#"><svg
                                            class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd"></path>
                                        </svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg> View Details </a><a class="dropdown-item d-flex align-items-center"
                                        href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z">
                                            </path>
                                        </svg> Suspend</a></div>
                            </div><svg class="icon icon-xs text-danger ms-1" title="Delete" data-bs-toggle="tooltip"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div
                class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
                <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div>
            </div>
        </div>
    @endslot

</x-layout>
