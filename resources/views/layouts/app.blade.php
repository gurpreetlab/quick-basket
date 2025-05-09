<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>{{ env('APP_NAME') }} @yield('title')</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}?v={{ filemtime(public_path('css/theme.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
    <!-- owl css -->
    <link rel="stylesheet"
        href="{{ asset('css/owl/owl.carousel.min.css') }}?v={{ filemtime(public_path('css/owl/owl.carousel.min.css')) }}">
    <link rel="stylesheet"
        href="{{ asset('css/owl/owl.theme.default.min.css') }}?v={{ filemtime(public_path('css/owl/owl.theme.default.min.css')) }}">
</head>

<body class="poppins-light">

    {{-- nav --}}
    <x-nav />

    <main class="container">
        @yield('content')
    </main>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery -->
    <script src="{{ asset('js/jquery.min.js') }}?v={{ filemtime(public_path('js/jquery.min.js')) }}"></script>
    <!-- owl js -->
    <script src="{{ asset('js/owl/owl.carousel.js') }}?v={{ filemtime(public_path('js/owl/owl.carousel.js')) }}"></script>

    @yield('scripts')

</body>

</html>
