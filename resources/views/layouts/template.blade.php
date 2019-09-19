<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('css/vendor/ionicons.css') }}">
    <!-- AdminLTE style -->
    <link rel="stylesheet" href="{{ asset('css/vendor/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="{{ asset('css/vendor/skin-blue-light.min.css') }}">

    <!-- Instant Style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>{{ config('app.name', 'Instant Solutions') }} - @yield('title')</title>
</head>
<body class="hold-transition @yield('bodyClass')">
    <div id="interface">
        @yield('content')
    </div>

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/vendor/adminlte.min.js') }}"></script>

    <!-- Instant Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>








<!-- Google Font -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
