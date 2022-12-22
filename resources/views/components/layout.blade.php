<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link type="text/css" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/notyf/notyf.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/fullcalendar/main.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/apexcharts/dist/apexcharts.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/leaflet/dist/leaflet.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link type="text/css" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/notyf/notyf.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ url('assets/js/pramukhime.js')}}"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    @include('include.aside')
    <main class="content">
        @include('include.nav')
        {{ $body }}
    </main>
    @include('include.footer')
</body>
<script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
<script src="{{ asset('vendor/nouislider/distribute/nouislider.min.js') }}"></script>
<script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('vendor/countup.js/dist/countUp.umd.js') }}"></script>
<script src="{{ asset('vendor/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/simple-datatables/dist/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/fullcalendar/main.min.js') }}"></script>
<script src="{{ asset('vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
<script src="{{ asset('vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<script src="{{ asset('vendor/notyf/notyf.min.js') }}"></script>
<script src="{{ asset('vendor/leaflet/dist/leaflet.js') }}"></script>
<script src="{{ asset('vendor/svg-pan-zoom/dist/svg-pan-zoom.min.js') }}"></script>
<script src="{{ asset('vendor/svgmap/dist/svgMap.min.js') }}"></script>
<script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('vendor/sortablejs/Sortable.min.js') }}"></script>
<script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('assets/js/volt.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

</html>
<script>
    // var all_th = document.getElementsByTagName('th')
    // console.log(all_th);
    // for (i = 0; i <= all_th.length; i++) {
    //     if (all_th[i].textContent == 'Action 1') {
    //         document.getElementsByTagName('th')[i].textContent = 'Edit'
    //     }
    //     if (all_th[i].textContent == 'Action 2') {
    //         document.getElementsByTagName('th')[i].textContent = 'Delete'
    //     }
    // }
</script>
