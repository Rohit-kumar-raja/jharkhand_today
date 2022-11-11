<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link type="text/css" href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/notyf/notyf.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/fullcalendar/main.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/apexcharts/dist/apexcharts.css" rel="stylesheet">
    <link type="text/css" href="vendor/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/leaflet/dist/leaflet.css" rel="stylesheet">
    <link type="text/css" href="css/volt.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>


</html>
