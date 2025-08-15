<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('external-title')</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="{{ asset('backend/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('backend/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('backend/custom/css/login-form.css') }}">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/toastr/css/toastr.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('backend/custom/css/font-awesome.min.css') }}">

    <style>
        .label {
            color: #000000 !important;
            font-weight: bolder !important;
        }

        .no-space {
            margin-left: 0px !important;
            padding-left: 0px !important;
        }
    </style>

    @yield('external-styles')

</head>

<body>
    <div class="l-login">
        <div class="square blue-dark left-bottom hu_hu_animation ">
        </div>
        <div class="square red top-right hu__hu_r_ ">
        </div>

        <!-- Starts :: Form Contents -->
        @yield('external-pages')
        <!-- Ends :: Form Contents -->

        <div class="c-wind-turbine big">
            <div class="c-wind-turbine__inner">
                <svg version="1.1" id="Capa_1" class="c-wind-turbine__propeller big"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                    <circle style="fill:transparent;" cx="25" cy="25" r="25" />
                    <polyline style="fill:none;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
                        points="16,34 25,25 34,16" />
                    <polyline style="fill:none;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
                        points="16,16 25,25 34,34" />
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                </svg>
                <svg version="1.1" id="Capa_1_poll" class="c-wind-turbine__poll big" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100" height="225"
                    width="554.625px" height="554.625px" viewBox="0 0 554.625 554.625"
                    style="enable-background:new 0 0 554.625 554.625;" xml:space="preserve">
                    <g>
                        <polygon points="293.772,554.625 280.222,258.188 265.486,258.188 253.925,554.625" />
                        <circle cx="273.853" cy="212.766" r="19.823" />
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                </svg>
            </div>
        </div>
        <div class="c-wind-turbine">
            <div class="c-wind-turbine__inner">
                <svg version="1.1" id="Capa_1" class="c-wind-turbine__propeller" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                    style="enable-background:new 0 0 50 50;" xml:space="preserve">
                    <circle style="fill:transparent;" cx="25" cy="25" r="25" />
                    <polyline style="fill:none;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
                        points="16,34 25,25 34,16" />
                    <polyline style="fill:none;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;"
                        points="16,16 25,25 34,34" />
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                </svg>
                <svg version="1.1" id="Capa_1_poll" class="c-wind-turbine__poll" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100" height="225"
                    width="554.625px" height="554.625px" viewBox="0 0 554.625 554.625"
                    style="enable-background:new 0 0 554.625 554.625;" xml:space="preserve">
                    <g>
                        <polygon points="293.772,554.625 280.222,258.188 265.486,258.188 253.925,554.625 	" />
                        <circle cx="273.853" cy="212.766" r="19.823" />
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                </svg>
            </div>
        </div>
    </div>

    <!-- Starts :: Scripts -->
    <!-- Required vendors -->
    <script src="{{ asset('backend/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('backend/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('backend/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('backend/js/plugins-init/jquery.validate-init.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('backend/vendor/toastr/js/toastr.min.js') }}"></script>
    <!-- All init script -->
    <script src="{{ asset('backend/js/plugins-init/toastr-init.js') }}"></script>


    <!-- Jquery Form -->
    <script src="{{ asset('backend/custom/js/jquery.form.min.js') }}"></script>

    <script>
        var baseurl = '{{ url(' / ') }}';
        var token = "<?= csrf_token() ?>";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('external-scripts')

</body>

</html>
