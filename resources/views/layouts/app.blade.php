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

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="Fuerte Laravel">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href='/asset/css/bootstrap.min.css' rel="stylesheet">
    <link href='/asset/css/customslider.css' rel="stylesheet">

    {{-- Owl Carousel
    <link rel="stylesheet" href="/asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/asset/css/owl.theme.default.min.css"> --}}

    <style>
        a {
            color: {{ $appSetting->theme_color }}
        }

        a:hover {
            color: {{ $appSetting->theme_color }}
        }
    </style>

    {{-- ExZoom --}}
    <link rel="stylesheet" href="/asset/exzoom/jquery.exzoom.css">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rating.css') }}">
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
    <div id="app">

        @include('layouts.inc.frontend.navbar')

        <main class="">
            @yield('content')
        </main>

        @include('layouts.inc.frontend.footer')
    </div>
    <!-- Scripts -->
    <script src="\asset\js\bootstrap.bundle.min.js"></script>
    <script src="\asset\js\jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        window.addEventListener('message', event => {
            alertify.set('notifier', 'position', 'top-right');
            alertify.notify(event.detail.text, event.detail.type);
        });
    </script>
    <script src="\asset\js\owl.caousel.min.js"></script>
    <script src="\asset\exzoom\jqery.exzoom.js"></script>

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
    <script src="{{ asset('/assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('/assets/js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('/assets/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ asset('/assets/js/rating/jquery.barrating.js') }}"></script>
    <script src="{{ asset('/assets/js/rating/rating-script.js') }}"></script>
    <script src="{{ asset('/assets/js/ecommerce.js') }}"></script>
    <script src="{{ asset('/assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('/assets/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ asset('/assets/js/touchspin/input-groups.min.js') }}"></script>
    <script src="{{ asset('/assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('/assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('/assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('/assets/js/product-tab.js') }}"></script>
    <script src="{{ asset('/asset/js/dashboard/default.js') }}"></script>
    {{-- <script src="{{ asset('/asset/js/notify/index.js') }}"></script> --}}
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
    {{-- <script src="{{ asset('/asset/js/theme-customizer/customizer.js') }}"></script> --}}

    @yield('script')
    @livewireScripts
    @stack('scripts')
</body>

</html>
