<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center"><button id="sidebar-toggle"
                    class="sidebar-toggle me-3 btn btn-icon-only d-none d-lg-inline-block align-items-center justify-content-center"><svg
                        class="toggle-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg></button>
              <strong> <h3> {{ env('APP_NAME') }}  </h3> </strong>
            </div>
            <ul class="navbar-nav align-items-center">

                <li class="nav-item dropdown ms-lg-3"><a class="nav-link dropdown-toggle pt-1 px-0" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="media d-flex align-items-center"><img class="avatar rounded-circle"
                                alt="Image placeholder" src="{{ asset('assets/img/team/profile-picture-3.jpg') }}">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span   class="mb-0 font-small fw-bold text-gray-900"> {{ Auth::user()->name }} </span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1"><a
                            class="dropdown-item d-flex align-items-center border-bottom"
                            href="{{ route('allusers') }}">
                            <i class="fas fa-users"></i> &nbsp; All Users </a>

                        <a class="dropdown-item d-flex align-items-center" href="{{ route('messages') }}"> <i
                                class="fas fa-comment-alt-dots"></i> &nbsp; Messages </a>


                        <div role="separator" class="dropdown-divider my-1"></div>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button
                            class="dropdown-item d-flex align-items-center" ><svg
                                class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg> Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
