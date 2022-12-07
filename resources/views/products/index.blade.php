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
                    <li class="breadcrumb-item active" aria-current="page">{{$page}}</li>
                </ol>
            </nav>


            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0 col-10">
                    <h1 class="h4">{{$page}}</h1>

                </div>
                <div class="col-2">
                    <a href="{{ route('products.product.insert.view') }}" class="btn btn-block btn-gray-800 mb-3 btn-sm">Add
                        new {{$page}}</a>

                </div>
            </div>
            @if (session('store'))
                <div class="alert alert-success">
                    {{ session('store') }}
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
            @if (session('update'))
                <div class="alert alert-success">
                    {{ session('update') }}
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-secondary">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('status1'))
                <div class="alert alert-success">
                    {{ session('status1') }}
                </div>
            @endif

        </div>
        </div>
        <div class="card">
            <div class="table-responsive py-4">
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <thead class="text-dark">
                        <tr>
                            <th>S.NO</th>
                            <th>category </th>
                            <th>Title </th>
                            <th>youtube</th>
                            {{-- <th>view360</th> --}}
                            <th>View</th>
                            <th>Action 1</th>
                            <th>Action 2</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot class="text-dark">
                        <tr>
                            <th>S.NO</th>
                            <th>category </th>
                            <th>Title </th>
                            <th>youtube</th>
                            {{-- <th>view360</th> --}}
                            <th>View</th>
                            <th>Action 1</th>
                            <th>Action 2</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $services)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td> {{ $services->categories->name }} </td>
                                <td> {{ $services->log_title }} </td>
                                <td> {{ $services->youtube }} </td>
                                {{-- <td> {{ $services->view360 }} </td> --}}


                                @include('products.maasage')
                                <td><a href="#" data-bs-toggle="modal" data-bs-target="#modal-default{{ $services->id}}"
                                        class="btn btn-info btn-sm"><i class="far fa-eye"></i></a> </td>
                                <td><a href="{{ route('products.product.edit', $services->id) }}"
                                        class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                                </td>
                                <td><a href="{{ route('products.product.delete', $services->id) }}"
                                        class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td><a href="{{ route('products.product.status', $services->id) }}"
                                        class="btn @if ($services->status == 1) btn-success @endif btn-secondary  btn-sm">
                                        @if ($services->status == 1)
                                            Active
                                        @else
                                            Deactive
                                        @endif
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endslot
</x-layout>
