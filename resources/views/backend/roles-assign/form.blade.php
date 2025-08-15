 <style>
     .my-custom {
         font-size: 17px !important;
     }

     .my-custom .form-check-input {
         margin-top: 7px !important;
     }

     .form-validation .custom-label {
         margin-left: 10px !important;
         color: #514c4c !important;
     }
 </style>

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
     <div class="modal-header">
         <h5 class="modal-title">
             Update Existing Role & Permissions
             {{ !empty($prevUserDetails->name) ? 'of "' . $prevUserDetails->name . '"' : '' }}
         </h5>
         <button type="button" class="close" data-dismiss="modal"><span style="font-size: 25px !important;">×</span>
         </button>
     </div>
     <div class="modal-body">

         <form action="{{ route('admin.user.assign-roles.save') }}" class="form-valide" method="POST"
             id="userRoleAssignForm">
             <input type="hidden" name="user_id" type="user_id" value="{{ @$prevUserDetails->id }}">

             <!--  Starts :: User Data Display Section  -->
             <div class="form-validation">
                 <div class="row">
                     <div class="col-xl-12 row">
                         @if (!empty($prevUserDetails->name))
                             <div class="col-lg-4">
                                 <label>User Name</label> <br />
                                 <div class="custom-label">- {{ $prevUserDetails->name }}</div>
                             </div>
                         @endif


                         @if (!empty($prevUserDetails->mobile_number))
                             <div class="col-lg-4">
                                 <label>Mobile Number</label> <br />
                                 <div class="custom-label">- {{ $prevUserDetails->mobile_number }}</div>
                             </div>
                         @endif


                         @if (!empty($Profile_Picture))
                             <div class="col-lg-4">
                                 <label>Profile Picture</label> <br />
                                 <div>
                                     <img src="{{ $Profile_Picture }}" alt="" width="75px">
                                 </div>
                             </div>
                         @endif
                     </div>
                 </div>
             </div>
             <!--  Ends :: User Data Display Section  -->

             <hr>

             <!--  Starts :: roless Section  -->
             <div class="basic-form ">
                 <div class="row my-custom mb-4">
                     <div class="col-4">
                         <div class="form-check">
                             <input type="checkbox" class="form-check-input" id="selectAllRoles">
                             <label class="form-check-label" for="selectAllRoles">Check All Roles</label>
                         </div>
                     </div>

                     <div class="col-4">
                         <div class="form-check">
                             <input type="hidden" name="no_roles">
                             <input type="checkbox" class="form-check-input" id="no_roles" name="no_roles"
                                 value="no_roles">
                             <label class="form-check-label" for="no_roles">No Roles</label>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     @if ($allRoles->isNotEmpty())
                         @foreach ($allRoles as $roledetails)
                             <div class="col-3 mb-3">
                                 <div class="form-check">
                                     <input class="form-check-input roles-checkbox" type="checkbox"
                                         value="{{ $roledetails->id }}" name="role_ids[]"
                                         id="role_{{ $roledetails->id }}"
                                         @if ($prevUserDetails->roles->pluck('id')->contains($roledetails->id)) checked @endif>
                                     <label class="form-check-label" for="role_{{ $roledetails->id }}">
                                         {{ $roledetails->name }}
                                     </label>
                                 </div>
                             </div>
                         @endforeach
                     @else
                         <div class="col-12 mb-3">
                             <label class="form-check-label text-danger">
                                 Please, create some roles or Assign no role
                             </label>
                         </div>
                     @endif
                 </div>
             </div>
             <!--  Ends :: roless Section  -->
         </form>

     </div>
     <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" id="saveUserRoles" class="btn btn-success"><i class="fa fa-save"></i>
             Update Roles
         </button>
     </div>
 @endif



 <script>
     $(document).ready(function() {
         // Select/Deselect All Roles
         $('#selectAllRoles').on('change', function() {
             $('.roles-checkbox').prop('checked', $(this).prop('checked'));
         });

         // Ensure "Select All" gets checked if all checkboxes are manually checked
         $('.roles-checkbox').on('change', function() {
             if ($('.roles-checkbox:checked').length === $('.roles-checkbox').length) {
                 $('#selectAllRoles').prop('checked', true);
             } else {
                 $('#selectAllRoles').prop('checked', false);
             }
         });


         // Submit form data
         $('#saveUserRoles').off('click');
         $('#saveUserRoles').on('click', function() {
             if ($('#userRoleAssignForm').valid()) {
                 showLoader();

                 $('#userRoleAssignForm').ajaxSubmit({
                     success: function(response) {
                         if (response.type === 'success') {
                             toastr[response.type](response.message);
                             $('#userRoleAssignForm')[0].reset();
                             $('#id').val('');
                             $('.bd-example-modal-lg').modal('hide');
                             table.draw();
                             hideLoader();
                         } else {
                             toastr[response.type](response.message);
                             hideLoader();
                         }
                     },
                     error: function(xhr) {
                         hideLoader();
                         var response = xhr.responseJSON;
                         if (response) {
                             toastr[response.type](response.message || 'An error occurred',
                                 'error');
                         } else {
                             toastr[response.type]('An error occurred');
                         }
                     }
                 });
             };
         });
     });
 </script>
