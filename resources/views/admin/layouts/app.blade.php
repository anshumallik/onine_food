<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecommerce</title>
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('shopping-online.jpg')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @include('admin.layouts.header')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('admin.layouts.navbar')
    @include('admin.layouts.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('admin.layouts.footer')
</div>
@include('admin.layouts.script')
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>