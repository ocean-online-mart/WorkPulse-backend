<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <!-- <title>Work Pulse - HRM</title> -->
    <title>WorkPulse - @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/img/favicon.png')}}">
    <!-- Apple Touch Icon -->      
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('theme/img/apple-touch-icon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{asset('theme/plugins/icons/feather/feather.css')}}">
    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{asset('theme/plugins/tabler-icons/tabler-icons.css')}}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{asset('theme/plugins/select2/css/select2.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('theme/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/plugins/fontawesome/css/all.min.css')}}">
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{asset('theme/plugins/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/plugins/@simonwep/pickr/themes/nano.min.css')}}">
    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{asset('theme/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/dataTables.bootstrap5.min.css')}}">
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{asset('theme/plugins/summernote/summernote-lite.min.css')}}">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap-datetimepicker.min.css')}}">    
    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{asset('theme/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <!-- Main CSS -->                                                                                                                                              
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
</head>
<body>

     <div class="main-wrapper">
        <!-- Header -->
        @include('theme.header')
        <!-- /Header -->
        <!-- Sidebar -->
        @include('theme.sidebar')
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <main>
                @yield('content')
            </main>
             @include('theme.footer')
        </div>    
    </div>
</body>
</html>

<script>
    <script src="{{asset('theme/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>

    <script src="{{asset('theme/js/jquery-3.7.1.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/bootstrap.bundle.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/feather.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/jquery.slimscroll.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/plugins/summernote/summernote-lite.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/moment.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/plugins/daterangepicker/daterangepicker.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>  

    <script src="{{asset('theme/plugins/@simonwep/pickr/pickr.es5.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/jquery.dataTables.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/dataTables.bootstrap5.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/bootstrap-datetimepicker.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/plugins/select2/js/select2.min.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/plugins/theia-sticky-sidebar/ResizeSensor.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/todo.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/theme-colorpicker.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/js/script.js')}}" type="9b12272bde146536e011645b-text/javascript"></script>

    <script src="{{asset('theme/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="9b12272bde146536e011645b-|49" defer></script>

    <script src="{{asset ('theme/plugins/fullcalendar/index.global.min.js')}}" type="232feb7cdf923cee42842724-text/javascript"></script>
    <script src="{{asset ('theme/plugins/fullcalendar/calendar-data.js')}}" type="232feb7cdf923cee42842724-text/javascript"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"9817de8d083f7f66","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.9.1","token":"3ca157e612a14eccbb30cf6db6691c29"}'
        crossorigin="anonymous"></script>
</script>