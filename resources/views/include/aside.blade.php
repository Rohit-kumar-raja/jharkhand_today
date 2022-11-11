<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none justify-content-between justify-content-md-center pb-4">

        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center"><span
                        class="sidebar-icon">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </span><span class="mt-1 sidebar-text"></span></a></li>

            <li class="nav-item active"><a href="{{ route('dashboard') }}" class="nav-link"><span
                        class="sidebar-icon"><i class="far fa-tachometer-alt-fast"></i> </span><span
                        class="sidebar-text">Dashboard</span></a>
            </li>

            {{-- home start --}}
            <li class="nav-item"><span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-app1"><span><span class="sidebar-icon"><i
                                class="far fa-home-alt"></i> </span><span class="sidebar-text">Home</span>
                    </span><span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span></span>
                <div class="multi-level collapse" role="list" id="submenu-app1" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('slider') }}"><span
                                    class="sidebar-text-contracted">S</span>
                                <span class="sidebar-text">Slider</span></a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('edge') }}"><span
                                    class="sidebar-text-contracted">E</span> <span class="sidebar-text"> Edge
                                </span></a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('testimonial') }}"><span
                                    class="sidebar-text-contracted">T</span> <span class="sidebar-text"> Testimonial
                                </span></a></li>  --}}
                    </ul>
                </div>
            </li>

            {{-- home end --}}

            <li class="nav-item"><span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#about"><span><span class="sidebar-icon"><i
                                class="far fa-network-wired"></i> </span><span class="sidebar-text">About us</span>
                    </span><span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span></span>
                <div class="multi-level collapse" role="list" id="about" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}"><span
                                    class="sidebar-text-contracted">A</span>
                                <span class="sidebar-text">About</span></a></li>

                </div>
            </li>


            <li class="nav-item"><span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#products"><span><span class="sidebar-icon"><i
                                class="fab fa-product-hunt"></i></span><span class="sidebar-text">News</span>
                    </span><span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span></span>
                <div class="multi-level collapse" role="list" id="products" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('products.category') }}"><span
                                    class="sidebar-text-contracted">C</span>
                                <span class="sidebar-text">Category</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('products.product') }}"><span
                                    class="sidebar-text-contracted">S</span> <span class="sidebar-text">All
                                    News</span></a></li>
                    </ul>
                </div>
            </li>

            {{-- 
            <li class="nav-item"><span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-app"><span><span class="sidebar-icon"><i
                                class="far fa-hand-holding-box"></i> </span><span class="sidebar-text">Services</span>
                    </span><span class="link-arrow"><svg class="icon icon-sm" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span></span>
                <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('category') }}"><span
                                    class="sidebar-text-contracted">C</span>
                                <span class="sidebar-text">Category</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}"><span
                                    class="sidebar-text-contracted">S</span> <span class="sidebar-text">All
                                    Services</span></a></li>
                    </ul>
                </div>
            </li> --}}


            {{-- <li class="nav-item"><span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#career"><span><span class="sidebar-icon"><i
                                class="far fa-hand-holding-box"></i> </span><span class="sidebar-text">Career</span>
                    </span><span class="link-arrow"><svg class="icon icon-sm" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span></span>
                <div class="multi-level collapse" role="list" id="career" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('career') }}">
                                <span class="sidebar-text-contracted">C</span>
                                <span class="sidebar-text">Career</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('career.apply') }}">
                                <span class="sidebar-text-contracted">CA</span>
                                <span class="sidebar-text">Career Applied</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}


            {{-- <li class="nav-item"><a href="{{ route('offering') }}" class="nav-link"><span class="sidebar-icon"><i
                            class="far fa-gift"></i> </span><span class="sidebar-text">Offering</span></a></li> --}}

            {{-- <li class="nav-item"><a href="messages"
                    class="nav-link d-flex align-items-center justify-content-between"><span><span
                            class="sidebar-icon"><i class="far fa-comments"></i> </span><span
                            class="sidebar-text">Enquiry</span> </span></a>
            </li> --}}
            {{-- <li class="nav-item"><a href="{{ route('allusers') }}" class="nav-link"><span class="sidebar-icon"><i
                            class="far fa-users"></i> </span><span class="sidebar-text">Teams</span></a>
            </li>

            <li class="nav-item"><a href="{{ route('clients') }}" class="nav-link"><span class="sidebar-icon"><i
                            class="far fa-user-tie"></i></span><span class="sidebar-text">Our Client</span></a>
            </li> --}}
            <li class="nav-item"><a href="siteinfo" class="nav-link"><span class="sidebar-icon"><i
                            class="fa fa-info-circle"></i></span><span class="sidebar-text">Site Info</span></a>
            </li>

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700">

            </li>

            <li class="nav-item"><a href="{{ route('contactus') }}" class="nav-link"><span class="sidebar-icon"><i
                            class="far fa-address-book"></i> </span><span class="sidebar-text">Contact us</span></a>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700">

            </li>

        </ul>
    </div>
</nav>
