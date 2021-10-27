<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--        <link rel="stylesheet" href="{{ asset('storage/adminlte/') }}/plugins/fontawesome-free/css/all.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" SameSite="None">
    <link rel="stylesheet" href="{{ asset('storage/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/adminlte/plugins/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('storage/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/adminlte/plugins/toastr/toastr.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="icon" href="https://objectstorage.ap-mumbai-1.oraclecloud.com/n/ax3lu1wopon6/b/Eclassroom-Storage/o/Eclassroom/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('header_main')
</head>
<style>
    v-cloak {
        display: none;
    }

    [v-cloak] > * {
        display: none;
    }

    legend {
        color: #666;
    }

    .bd-example-modal-lg .modal-dialog {
        display: table;
        position: relative;
        margin: 0 auto;
        top: calc(50% - 24px);
    }

    .bd-example-modal-lg .modal-dialog .modal-content {
        background-color: transparent;
        border: none;
        box-shadow: none;
    }

    @media (min-width: 0px) and (max-width: 425px) {
        body {
            font-family: 'Ubuntu Condensed', sans-serif;
        }
    }
</style>
@yield('style')

<body class="@yield('body_class')">
@yield('body')
@routes
{{--<script src="{{ mix('/js/manifest.js') }}"></script>--}}
{{--<script src="{{ mix('js/vendor.js') }}"></script>--}}
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('storage/adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('storage/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('storage/adminlte/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('storage/adminlte/plugins/toastr/toastr.min.js') }}"></script>
@if(Auth::check())
    @if(Auth::user()->hasRole('tester'))
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    @else
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    @endif
@else
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
@endif
<script src="{{ asset('storage/adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('storage/adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
@yield('script')
</body>

</html>
