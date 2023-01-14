<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link href="{{url('template/css/login.css')}}" rel="stylesheet">
<script type="text/javascript"></script>
</head>
<body class="body-auth" style="color: #fff">
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6 text-black">
                <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <span class="h1 fw-bold mb-0">Logo</span>
                </div>
            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    @yield('form')
            </div>
    </section>
</body>
</html>
