@extends('frontend.auth.external')

@section('external-title')
    Login Page
@endsection

@section('external-styles')
    <style>
        #password-error {
            color: #ff0000 !important;
        }

        #email-error {
            color: #ff0000 !important;
        }
    </style>
@endsection

@section('external-pages')
    <div class="authincation">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form" style="min-width: 450px;">
                                    <h4 class="text-center mb-4">Login To <strong>{{ config('app.name') }}</strong> </h4>
                                    <form action="{{ route('admin.login') }}" method="POST" id="login_form">
                                        @csrf
                                        <!-- Starts :: Email-->
                                        <div class="form-group">
                                            <label class="label"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="Enter email address"
                                                name="email">
                                        </div>
                                        <!-- Ends :: Email-->


                                        <!-- Starts :: Password-->
                                        <div class="form-group">
                                            <label class="label"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Enter password"
                                                name="password">
                                        </div>
                                        <!-- Ends :: Password-->


                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <!-- Starts :: Remember Me Btn -->
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1"
                                                        name="remember_me">
                                                    <label class="form-check-label label no-space" for="basic_checkbox_1">
                                                        <span> Remember me</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Ends :: Remember Me Btn -->


                                            <!-- Starts :: Forgot Password-->
                                            <div class="form-group">
                                                <a href="" class="label" style="color: #ff0000 !important;">Forgot
                                                    Password?</a>
                                            </div>
                                            <!-- Ends :: Forgot Password-->
                                        </div>


                                        <!-- Starts :: Login Buttin-->
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary btn-block LoginBtn">Log
                                                In</button>
                                        </div>
                                        <!-- Ends :: Login Buttin-->

                                    </form>
                                    {{-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign
                                                up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('external-scripts')
    <!-- Starts :: Page Level Script  -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(function() {
                $('#login_form').validate({
                    errorClass: "help-block",
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        email: {
                            required: "Please enter your email",
                            email: "Please enter a valid email address"
                        },
                        password: {
                            required: "Please enter your password"
                        },
                    },
                    highlight: function(e) {
                        $(e).closest(".form-group").addClass("has-error")
                    },
                    unhighlight: function(e) {
                        $(e).closest(".form-group").removeClass("has-error")
                    },
                });


                $('.LoginBtn').off('click');
                $('.LoginBtn').on('click', function() {
                    if ($('#login_form').valid()) {
                        $('.LoginBtn').prop('disabled', true).html(
                            '<i class="fas fa-spinner fa-spin"></i> Loading...');

                        $('#login_form').ajaxSubmit({
                            success: function(response) {
                                toastr[response.type](response.message);

                                if (response.type === 'success') {
                                    $('#login_form')[0].reset();
                                    window.location.href = response.route;
                                    $('.LoginBtn').prop('disabled', false).html(
                                        'Sign In');
                                } else if (response.type === 'warning') {
                                    window.location.href = response.route;
                                    $('#login_form')[0].reset();
                                    $('.LoginBtn').prop('disabled', false).html(
                                        'Sign In');
                                } else {
                                    window.location.href = response.route;
                                    $('.LoginBtn').prop('disabled', false).html(
                                        'Sign In');
                                }
                            },
                            error: function() {
                                $('.LoginBtn').prop('disabled', false).html(
                                    'Sign In');
                                toastr[response.type](response.message);
                            }
                        });
                    }
                });

                /** starts:: click signing button on enter */
                $(document).keypress(function(e) {
                    if (e.which == 13) {
                        $('.LoginBtn').trigger('click');
                    }
                });
                /** Ends:: click signing button on enter */
            });
        });
    </script>
    <!-- Ends :: Page Level Script  -->
@endsection
