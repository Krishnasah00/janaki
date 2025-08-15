@if ($type == 'error')
    <div class="modal-header">
        <h5 class="modal-title">Error</h5>
        <button type="button" class="close" data-dismiss="modal"><span style="font-size: 25px !important;">×</span>
        </button>
    </div>
    <div class="modal-body text-for-modal">
        {{ $message }}
    </div>
@else
    <style>
        .col-form-label {
            color: #000 !important;
        }

        .info-div {
            color: #000 !important;
            font-size: 12px !important;
            font-weight: 550 !important;
        }

        .info-div .text-muted {
            color: #fc0000 !important;

        }

        .camera-background {
            position: absolute;
            width: 40px !important;
            height: 40px !important;
            background: #605d5d;
            border-radius: 50%;
            margin-left: 103px !important;
        }

        .my-camera {
            margin-left: 10px !important;
            margin-top: 10px !important;
            color: #ffffff;
            font-size: 20px !important;
        }

        .error {
            color: #fc0000 !important;
        }
    </style>
    <div class="modal-header">
        <h5 class="modal-title">
            {{ !empty($prevUserDetails->id) ? 'Update Existing User Account Details' : 'Add New User Account' }}
        </h5>
        <button type="button" class="close" data-dismiss="modal"><span style="font-size: 25px !important;">×</span>
        </button>
    </div>
    <div class="modal-body">

        <!--  Starts :: Form Section  -->
        <div class="form-validation">
            <form action="{{ route('admin.user-account.save') }}" class="form-valide" method="POST" id="userForm"
                enctype="multipart/form-data">

                <input type="hidden" name="id" type="id" value="{{ @$prevUserDetails->id }}">
                <div class="row">
                    <div class="col-xl-6">

                        <!-- Starts :: Name -->
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label" for="name">Full Name
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter a full name" value="{{ @$prevUserDetails->name }}">
                            </div>
                        </div>
                        <!-- Ends :: Name -->


                        <!-- Starts :: Mobile Number-->
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label" for="mobile_number">Mobile Number
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-12">
                                <input type="number" class="form-control" id="mobile_number" name="mobile_number"
                                    placeholder="Enter mobile number" value="{{ @$prevUserDetails->mobile_number }}">
                            </div>
                        </div>
                        <!-- Ends :: Mobile Number-->


                        <!-- Starts :: Address -->
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label" for="address">Address <span
                                    class="text-danger">*</span>
                            </label>
                            <div class="col-lg-12">
                                <textarea class="form-control" id="address" name="address" rows="5" placeholder="Enter your full address">{{ @$prevUserDetails->address }}</textarea>
                            </div>
                        </div>
                        <!-- Ends :: Address -->

                    </div>
                    <div class="col-xl-6">

                        <!-- Starts :: Email Address -->
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label" for="email">Email <span
                                    class="text-danger">*</span>
                            </label>
                            <div class="col-lg-12">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your valid email address" value="{{ @$prevUserDetails->email }}">
                            </div>
                        </div>
                        <!-- Ends :: Email Address -->


                        <!-- Starts :: User Role -->
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label" for="role">User Role
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-12">
                                <select class="form-control" id="role" name="role">
                                    <option selected disabled>User</option>
                                </select>
                            </div>
                        </div>
                        <!-- Ends :: User Role -->

                        <!-- Starts :: Profile Picture -->
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label" for="image">Profile Picture <span
                                    class="text-danger">*</span>
                            </label>

                            <div class="col-lg-12 img-rectangle">
                                <div class="camera-background">
                                    <label for="image" class="fa-solid fa-camera my-camera"></label>
                                    <input type="file" style="display: none;" class="image" id="image"
                                        name="profile_picture" accept="image/*">
                                </div>
                                <?php
                                $photo = asset('images/no-image.jpg');
                                if (!empty(@$prevUserDetails->profile_picture) && Storage::disk('public')->exists('user-account/' . @$prevUserDetails->profile_picture)) {
                                    $photo = asset('storage/user-account/' . $prevUserDetails->profile_picture);
                                }
                                ?>
                                <img src="{{ $photo }}" alt="Default Image" id="img_introduction" class="_image"
                                    style="width: 132px;">


                                <div class="info-div mt-2 ms-1">
                                    <p class="p-0 m-0">Accepted Format :
                                        <span class="text-muted"> jpg/jpeg/png</span>
                                    </p>
                                    <p class="p-0 m-0">File size :
                                        <span class="text-muted"> (300x475) in pixels</span>
                                    </p>
                                </div>
                            </div>


                        </div>
                        <!-- Ends :: Profile Picture -->
                    </div>
                </div>
            </form>
        </div>

        <!--  Ends :: Form Section  -->

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="saveUser" class="btn btn-success"><i class="fa fa-save"></i>
            Create User
        </button>
    </div>
@endif

<script>
    var userId = "{{ @$prevUserDetails->id }}".trim();

    $(document).ready(function() {
        /*   Starts :: Change Save Button*/
        function chnageBtn() {
            if (userId && userId.trim() !== "") {
                $('#saveUser')
                    .removeClass('btn-success')
                    .addClass('btn-primary')
                    .html('<i class="fa fa-save"></i> Update User');
            }
        }

        chnageBtn();
        /*   Ends :: Change Save Button*/


        /*  Starts :: Image Preview Script */
        $('#image').on('change', function(event) {
            const selectedFile = event.target.files[0];

            if (selectedFile) {
                $('._image').attr('src', URL.createObjectURL(selectedFile));
            }
        });
        /*  Ends :: Image Preview Script */


        /*  Starts :: Validate Form */
        $('#userForm').validate({
            rules: {
                name: "required",
                email: "required",
                mobile_number: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
            },
            messages: {
                name: {
                    required: "Please enter full name."
                },
                email: {
                    required: "Please enter email address."
                },
                mobile_number: {
                    required: "Please enter mobile number.",
                    digits: "Please enter only numbers",
                    minlength: "Mobile number must be exactly 10 digits",
                    maxlength: "Mobile number must be exactly 10 digits"
                },
            },
            highlight: function(element) {
                $(element).addClass('border-danger')
            },
            unhighlight: function(element) {
                $(element).removeClass('border-danger')
            },
        });
        /*  Ends :: Validate Form */


        /*  Starts :: SUbmit Form Data */
        $('#saveUser').off('click');
        $('#saveUser').on('click', function() {
            if ($('#userForm').valid()) {
                showLoader();

                $('#userForm').ajaxSubmit({
                    success: function(response) {
                        if (response.type === 'success') {
                            toastr[response.type](response.message)
                            $('#userForm')[0].reset();
                            $('#id').val('');
                            $('.bd-example-modal-lg').modal('hide');
                            table.draw();
                            hideLoader();
                        } else {
                            toastr['error'](response.message)

                            hideLoader();
                        }
                    },
                    error: function(xhr) {
                        hideLoader();
                        var response = xhr.responseJSON;
                        if (response) {
                            toastr['error'](response.message || 'An error occurred')
                        } else {
                            toastr['error'](response.message)

                        }
                    }
                });
            }
        });
        /*  Ends :: SUbmit Form Data */

    });
</script>
