<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="{{asset('assets1/vendor/simplebar.min.css')}}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{asset('assets1/css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets1/css/app.rtl.css')}}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('assets1/css/vendor-material-icons.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets1/css/vendor-material-icons.rtl.css')}}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{asset('assets1/css/vendor-fontawesome-free.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets1/css/vendor-fontawesome-free.rtl.css')}}" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="{{asset('assets1/css/vendor-ion-rangeslider.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets1/css/vendor-ion-rangeslider.rtl.css')}}" rel="stylesheet">

    <!-- Flatpickr -->
    <link type="text/css" href="{{asset('assets1/css/vendor-flatpickr.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets1/css/vendor-flatpickr.rtl.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets1/css/vendor-flatpickr-airbnb.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets1/css/vendor-flatpickr-airbnb.rtl.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <link rel="icon" href="{{asset('logo-transparent.png')}}" sizes="32x32" />

    @yield('css')
</head>

<body class="layout-default">

    <div class="preloader">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets1.lottiefiles.com/datafiles/bEYvzB8QfV3EM9a/data.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
    </div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>
                <!-- Header -->
                    @yield('content')
                <!-- // END Header -->
            </div>

        </div>
        <!-- // END drawer-layout__content -->
        @include('layouts.partials.sidebar')
    </div>
    <!-- // END drawer-layout -->
    @include('layouts.partials.agenda')


    <!-- App Settings FAB -->
    <div id="app-settings" style="display: none;">
        <app-settings></app-settings>
    </div>

    <!-- jQuery -->
        <script src="{{asset('assets1/vendor/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{asset('assets1/vendor/popper.min.js')}}"></script>
        <script src="{{asset('assets1/vendor/bootstrap.min.js')}}"></script>

        <!-- Simplebar -->
        <script src="{{asset('assets1/vendor/simplebar.min.js')}}"></script>

        <!-- DOM Factory -->
        <script src="{{asset('assets1/vendor/dom-factory.js')}}"></script>

        <!-- MDK -->
        <script src="{{asset('assets1/vendor/material-design-kit.js')}}"></script>

        <!-- Range Slider -->
        <script src="{{asset('assets1/vendor/ion.rangeSlider.min.js')}}"></script>
        <script src="{{asset('assets1/js/ion-rangeslider.js')}}"></script>

        <!-- App -->
        <script src="{{asset('assets1/js/toggle-check-all.js')}}"></script>
        <script src="{{asset('assets1/js/check-selected-row.js')}}"></script>
        <script src="{{asset('assets1/js/dropdown.js')}}"></script>
        <script src="{{asset('assets1/js/sidebar-mini.js')}}"></script>
        <script src="{{asset('assets1/js/app.js')}}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{asset('assets1/js/app-settings.js')}}"></script>



        <!-- Flatpickr -->
        <script src="{{asset('assets1/vendor/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('assets1/js/flatpickr.js')}}"></script>

        <!-- Global Settings -->
        <script src="{{asset('assets1/js/settings.js')}}"></script>

        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

        <script src="https://momentjs.com/downloads/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    @yield('scripts')
    <script type="text/javascript">
        $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
         $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                    $(this).val(picker.startDate.format('DD.MM.YYYY') + '-' + picker.endDate.format('DD.MM.YYYY'));
                });

    });
    </script>
    
</body>

</html>
