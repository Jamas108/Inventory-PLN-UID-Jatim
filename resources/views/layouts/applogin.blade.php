<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- CSS --}}
    @vite(['/resources/css/login.css'])
    @vite(['/resources/css/login2.css'])

    {{-- JAVASCRIPT --}}
    @vite(['js/app.js'])
    @vite(['/resources/sass/app.scss'])

</head>
<body id="page-top">
    <div id="wrapper">
        @yield('content')
        {{-- @include('sweetalert::alert') --}}
        @vite('resources/js/app.js')
        @stack('scripts')
    </div>
</body>
</html>
