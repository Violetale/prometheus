<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{ asset('core/build/admin-lte/plugins/fontawesome-free/css/all.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('core/build/css/admin.css') }}" rel="stylesheet">
</head>

<body class="hold-transition login-page">

<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{ asset('core/build/js/admin.js') }}"></script>

</body>

</html>
