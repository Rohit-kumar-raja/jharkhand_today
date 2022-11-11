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
                    <li class="breadcrumb-item active" aria-current="page">{{ $page }}</li>
                </ol>
            </nav>



            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0 col-10">
                    <h1 class="h4">{{ $page }}</h1>

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
                            <th>Career name</th>
                            <th>name </th>
                            <th>Phone </th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Resume</th>
                            
                            <th>Message</th>
            
                            <th>Action 2</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot class="text-dark">
                        <tr>
                            <th>S.NO</th>
                            <th>Career name</th>
                            <th>name </th>
                            <th>Phone </th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Resume</th>
                            <th>Message</th>
                            <th>Action 2</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $career_applied)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @php
                                    $carrer = DB::table('careers')
                                        ->find($career_applied->career_id);
                                @endphp
                                <td>{{ $carrer->name }}</td>
                                <td> {{ $career_applied->name }} </td>
                                <td> {{ $career_applied->phone }} </td>
                                <td> {{ $career_applied->email }} </td>
                                <td> {{ $career_applied->created_at }} </td>
                                <td> <img src="{{ $career_applied->email }}" alt="{{ $career_applied->email }}"> </td>

                                @include('career_applied.maasage')
                                <td><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#modal-default{{ $career_applied->id }}"
                                        class="btn btn-info btn-sm"><i class="far fa-eye"></i></a> </td>

                                <td><a href="{{ route('career.apply.delete', $career_applied->id) }}"
                                        class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td><a href="{{ route('career.apply.status', $career_applied->id) }}"
                                        class="btn @if ($career_applied->status == 1) btn-success @endif btn-secondary  btn-sm">
                                        @if ($career_applied->status == 1)
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
