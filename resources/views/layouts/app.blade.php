<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/backend/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('css/backend/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('css/backend/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('css/backend/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/backend/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('css/backend/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('css/backend/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('css/backend/summernote-bs4.min.css') }}">

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    {{-- <body class="font-sans antialiased"> --}}
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{ asset('image/backend/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
            </div>
            @include('layouts.includes.header')
            @include('layouts.includes.sidebar')
                @yield('content')
            @include('layouts.includes.footer')
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>

        </div>
       
        <!-- jQuery -->
        <script src="{{ asset('js/backend/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('js/backend/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('js/backend/bootstrap.bundle.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('js/backend/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('js/backend/sparkline.js') }}"></script>
        <!-- JQVMap -->
        {{-- <script src="{{ asset('js/backend/jquery.vmap.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('js/backend/jquery.vmap.usa.js') }}"></script> --}}
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('js/backend/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('js/backend/moment.min.js') }}"></script>
        <script src="{{ asset('js/backend/daterangepicker.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('js/backend/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('js/backend/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('js/backend/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/backend/adminlte.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        {{-- <script src="{{ asset('js/backend/demo.js') }}"></script> --}}
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('js/backend/dashboard.js') }}"></script>
        {{-- Alpine JS --}}
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}
    </body>
</html>
