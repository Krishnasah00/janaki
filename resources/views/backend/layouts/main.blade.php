<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('backend-title') - {{ config('app.name') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="{{ asset('backend/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('backend/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">

    <!-- Datatable -->
    <link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/toastr/css/toastr.min.css') }}">

    <!-- Sweet alert -->
    <link href="{{ asset('backend/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> --}}


    <!-- Select 2 -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}">

    <!-- Calendar -->
    <link href="{{ asset('backend/vendor/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('backend/custom/css/font-awesome.min.css') }}"> --}}

    <!-- Custom Styles -->
    <link href="{{ asset('backend/custom/css/custom-style-css.css') }}" rel="stylesheet">

    <style>
        .error {
            color: #ff0000 !important;
        }

        label {
            color: #000;
            font-weight: 500;
        }

        .required::after {
            content: " *";
            color: #ff0000;
            font-weight: bold;
        }

        .text-for-modal {
            color: #ff0000 !important;
            font-weight: 900 !important;
        }

        .my-camera:hover {
            cursor: pointer !important;
        }
    </style>

    @yield('backend-style')
</head>

<body>


    <!-- Loader with Background Overlay -->
    <div id="loadingOverlay"
        style="display: none; position: fixed;top: 0px;left: 0px;width: 100%;height: 100%;background: rgb(10 10 10 / 64%);z-index: 9999999;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <div class="spinner-border spinner-border-lg  text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <!-- Loader with Background Overlay -->


    <!-- Starts :: Main Wrapper -->
    <div id="main-wrapper">

        <!-- Starts :: Nav Header Section -->
        @include('backend.layouts.nav-header')
        <!-- Ends :: Nav Header Section -->

        <!-- Starts :: Header Section -->
        @include('backend.layouts.header')
        <!-- Ends :: Header Section -->

        <!-- Ends :: Sidebar Section -->
        @include('backend.layouts.sidebar')
        <!-- Ends :: Sidebar Section -->

        <!--   Starts :: Body Contents   -->
        <div class="content-body">

            @hasSection('page-title')

                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">

                            <!-- Starts :: Page Title -->
                            @hasSection('page-title')
                                <h4>@yield('page-title')</h4>
                            @endif
                            <!-- Ends :: Page Title -->


                            <!-- Starts :: Page Heading -->
                            @hasSection('heading-content')
                                <p class="mb-0">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">@yield('heading-content')</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">@yield('page-title')
                                        </li>
                                    </ol>
                                </nav>
                                </p>
                            @endif
                            <!-- Ends :: Page Heading -->

                        </div>
                    </div>

                    <!-- Starts :: Add Button Section -->
                    @hasSection('addButton')
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    @yield('addButton')
                                </li>
                            </ol>
                        </div>
                    @endif
                    <!-- Ends :: Add Button Section -->
                </div>
            @endif

            <!-- row -->
            <div class="container-fluid">
                @yield('backend-content')


                <!-- Starts :: MOdal Section -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true"
                    style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Contents Will Be Here -->
                        </div>
                    </div>
                </div>
                <!-- Starts :: MOdal Section -->

            </div>
        </div>
        <!--   Ends :: Body Contents  -->


        <!-- Starts :: Footer Section  -->
        @include('backend.layouts.footer')
        <!-- Starts :: Footer Section  -->

    </div>
    <!-- Ends :: Main Wrapper -->

    <!-- Starts :: Scripts -->
    <!-- Required vendors -->
    <script src="{{ asset('backend/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('backend/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('backend/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('backend/js/plugins-init/jquery.validate-init.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('backend/vendor/toastr/js/toastr.min.js') }}"></script>
    <!-- All init script -->
    <script src="{{ asset('backend/js/plugins-init/toastr-init.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('backend/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    {{-- <script src="{{ asset('backend/js/plugins-init/sweetalert.init.js') }}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> --}}
        

    <!-- select2 -->
    <script src="{{ asset('backend/vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins-init/select2-init.js') }}"></script>


    <script src="{{ asset('backend/vendor/jqueryui/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/moment/moment.min.js') }}"></script>

    <script src="{{ asset('backend/vendor/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins-init/fullcalendar-init.js') }}"></script>

    <!-- Vectormap -->
    <script src="{{ asset('backend/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/morris/morris.min.js') }}"></script>


    <script src="{{ asset('backend/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('backend/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('backend/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('backend/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('backend/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>



    <script src="{{ asset('backend/custom/js/custom-script-js.js') }}"></script>

    <!-- Jquery Form -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script> --}}
    <script src="{{ asset('backend/custom/js/jquery.form.min.js') }}"></script>

    <script src="{{ asset('backend/js/dashboard/dashboard-1.js') }}"></script>


    <script>
        var baseurl = '{{ url(' / ') }}';
        var token = "<?= csrf_token() ?>";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right", // Make sure this matches your template's position class
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        // Custom CSS for Toastr (if needed)
        toastr.options.style = {
            "background-color": "#ff4d4d", // Adjust the color to match your template
            "color": "#fff",
            "font-weight": "bold"
        };

        function showLoader() {
            $('#loadingOverlay').show();
        }

        function hideLoader() {
            $('#loadingOverlay').hide();
        }
    </script>

    <script>
        $(document).ready(function() {
            let lastFocusedElement;

            $(document).on('shown.bs.modal', '.modal', function() {
                $(this).data('bs.modal')._config.backdrop = 'static';
                $(this).data('bs.modal')._config.keyboard = false;

                lastFocusedElement = document.activeElement; // Store the focused element
            });

            // Detect clicking outside the modal content and apply the shake effect
            $(document).on('click', '.modal', function(event) {
                let modal = $(this);
                let modalDialog = modal.find('.modal-dialog');

                // Check if clicked outside the modal dialog
                if (!modalDialog.is(event.target) && modalDialog.has(event.target).length === 0) {
                    event.preventDefault(); // Prevent any unintended actions

                    // Apply shake effect
                    modalDialog.addClass('shake-modal');

                    setTimeout(function() {
                        modalDialog.removeClass('shake-modal');
                    }, 500);
                }
            });

            // Allow closing only when clicking "Close" button or "X" button
            $(document).on('click', '.modal .close, .modal .close-modal', function() {
                let modal = $(this).closest('.modal');

                // Move focus back to the last focused element before closing the modal
                modal.on('hidden.bs.modal', function() {
                    if (lastFocusedElement) {
                        $(lastFocusedElement).trigger('focus');
                    }
                });

                modal.modal('hide');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#toastr-success-top-right').on('click', function() {
                toastr.success('This is an success message.');
            });

            $('#toastr-warning-top-right').on('click', function() {
                toastr.warning('This is a warning message.');
            });

            $('#toastr-danger-top-right').on('click', function() {
                toastr.error('This is an error message.');
            });

        });
    </script>

    @yield('backend-script')

</body>

</html>
