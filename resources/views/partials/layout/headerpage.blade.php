<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Openagora">
    <meta name="description" content="@yield('description', 'Plataforma online de Gestión del Desempeño y Control de Gestión')">
    <meta name="keywords" content="gestion desempeño, control gestión, recursos humanos, evaluación">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' >
    <title>@section('title')Openagora @show</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700italic,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('components/vendor/bootstrap/dist/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('components/vendor/fontawesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('components/vendor/ionicons/css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('components/vendor/sweetalert/dist/sweetalert.css') }}" />
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}" />

    <!--[if lt IE 9]>
    <script src="{{ asset('components/vendor/html5shiv/dist/html5shiv.min.js') }}"></script>
    <script src="{{ asset('components/vendor/respond/dest/respond.min.js') }}"></script>
    <![endif]-->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" />
    
    {{-- Estos son los iconos cuando se colocan estas URL como accesos directos --}}

    <link rel="icon" href="{{ asset('images/icon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('images/icon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/icon-180x180.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('images/icon-270x270.png') }}">
</head>