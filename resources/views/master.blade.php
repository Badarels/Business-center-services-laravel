<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('template/template/template/images/bcs.png')}}">
    <link rel="stylesheet" href="{{ url('template/vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{ url('template/vendor/chartist/css/chartist.min.css')}}">
	<link rel="stylesheet" href="{{ url('template/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ url('template/css/style.css')}}">
	<link rel="stylesheet" href="{{ url('template/css/skin-2.css')}}">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
         <!--**********************************
            Header start
        ***********************************-->
        <!--**********************************
            Nav header start
        ***********************************-->
        <!--**********************************
            Nav header end
        ***********************************-->  
    
       
            @include('partials.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
            @include('partials.sidebar')
        <!--**********************************
             @include('partials.sidebar_Agent')
            Sidebar end
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
            @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
            @include('partials.footer')
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required template/vendors -->
        <script src="{{asset('template/vendor/global/global.min.js')}}"></script>
            <script src="{{asset('template/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
            <script src="{{asset('template/js/custom.min.js')}}"></script>
            <script src="{{asset('template/js/dlabnav-init.js')}}"></script>

            <!-- Chart ChartJS plugin files -->
            <script src="{{asset('template/vendor/chart.js/Chart.bundle.min.js')}}"></script>
            
            <!-- Chart piety plugin files -->
            <script src="{{asset('template/vendor/peity/jquery.peity.min.js')}}"></script>
            
            <!-- Chart sparkline plugin files -->
            <script src="{{asset('template/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
            
                <!-- Demo scripts -->
            <script src="{{asset('template/js/dashboard/dashboard-3.js')}}"></script>
            
            <!-- Svganimation scripts -->
            <script src="{{asset('template/vendor/svganimation/vivus.min.js')}}"></script>
            <script src="{{asset('template/vendor/svganimation/svg.animation.js')}}"></script>
            <script src="{{asset('template/js/styleSwitcher.js')}}"></script>
            
        </body>
</html>