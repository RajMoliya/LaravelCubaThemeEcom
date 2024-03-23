<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') {{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
    <style>
        .form-control {
            border: 1px solid #ddd;
        }

        .sidebar .nav .nav-item.active {
            background-color: #e9e9e9;
        }
    </style>

    {{-- Cuba Theme Inclusion  --}}
    <link rel="icon" href="{{ asset('/asset/images/favicon.png" type="image/x-icon') }}">
    <link rel="shortcut icon" href="{{ asset('/asset/images/favicon.png" type="image/x-icon') }}">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/vendors/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/vendors/date-picker.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('/asset/css/color-1.css" media="screen') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/responsive.css') }}">

    @livewireStyles

</head>

<body>
    <div class="container-scroller">
        @include('layouts.inc.admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.inc.admin.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->'
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/js/data-table.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.bootstrap4.js') }}"></script>

    {{-- Cuba Theme Inclusion  --}}
    <!-- latest jquery-->
    <script src="{{ asset('/asset/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('/asset/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('/asset/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('/asset/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('/asset/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('/asset/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('/asset/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('/asset/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('/asset/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('/asset/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('/asset/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('/asset/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('/asset/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('/asset/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('/asset/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('/asset/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('/asset/js/notify/index.js') }}"></script>
    <script src="{{ asset('/asset/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('/asset/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('/asset/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('/asset/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('/asset/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('/asset/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('/asset/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('/asset/js/typeahead-search/typeahead-custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('/asset/js/script.js') }}"></script>
    <script src="{{ asset('/asset/js/theme-customizer/customizer.js') }}"></script>

    @yield('script')
    @livewireScripts
    @stack('script')
</body>

</html>
