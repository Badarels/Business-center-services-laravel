<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Authentification </title>
    <!-- Favicon icon -->
    <link rel="icon" type="template/image/png" sizes="16x16" href="{{url('template/images/bcs.png')}}">
    <link href="{{url('template/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
           @yield('form')
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('template/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('template/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('template/js/custom.min.js')}}"></script>
    <script src="{{asset('template/js/dlabnav-init.js')}}"></script>x

</body>

</html>