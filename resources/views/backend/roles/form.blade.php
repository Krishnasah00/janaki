 <style>
     .my-custom {
         font-size: 17px !important;
     }

     .my-custom .form-check-input {
         margin-top: 7px !important;
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
             {{ !empty($prevRole->id) ? ' Update Existing Role & Permissions' : 'Add New Role & Permissions' }}
         </h5>
         <button type="button" class="close" data-dismiss="modal"><span style="font-size: 25px !important;">×</span>
         </button>
     </div>
     <div class="modal-body">

         <form action="{{ route('admin.user.roles.save') }}" class="form-valide" method="POST" id="rolePermissionForm">
             <!--  Starts :: Form Section  -->
             <div class="form-validation">

                 <input type="hidden" name="id" type="id" value="{{ @$prevRole->id }}">

                 <div class="row">
                     <div class="col-xl-6">

                         <!-- Starts :: Name -->
                         <div class="form-group row">
                             <label class="col-lg-12 col-form-label" for="name">
                                 Role Name <span class="text-danger">*</span>
                             </label>
                             <div class="col-lg-12">
                                 <input type="text" class="form-control" id="name" name="name"
                                     placeholder="Enter a role name" value="{{ @$prevRole->name }}">
                             </div>
                         </div>
                         <!-- Ends :: Name -->


                         <!-- Starts :: Status -->
                         <div class="form-group row">
                             <label class="col-lg-12 col-form-label" for="status">Status
                                 <span class="text-danger">*</span>
                             </label>
                             <div class="col-lg-12">
                                 <select class="form-control" id="status" name="status">
                                     <option selected disabled>Please select Status</option>
                                     <option value="active"
                                         {{ !empty($prevRole->status) && $prevRole->status === 'Y' ? 'selected' : '' }}>
                                         Active</option>
                                     <option value="inactive"
                                         {{ !empty($prevRole->status) && $prevRole->status === 'N' ? 'selected' : '' }}>
                                         In-Active
                                     </option>
                                 </select>
                             </div>
                         </div>
                         <!-- Ends :: Status -->
                     </div>
                     <div class="col-xl-6">

                         <!-- Starts :: Description -->
                         <div class="form-group row">
                             <label class="col-lg-12 col-form-label" for="description">Description </label>
                             <div class="col-lg-12">
                                 <textarea class="form-control" id="description" name="description" rows="5"
                                     placeholder="Enter your role description">{{ @$prevRole->description }}</textarea>
                             </div>
                         </div>
                         <!-- Ends :: Description -->

                         <!-- Starts :: Profile Picture -->

                         <!-- Ends :: Profile Picture -->
                     </div>
                 </div>
             </div>
             <!--  Ends :: Form Section  -->

             <hr>

             <!--  Starts :: Permissions Section  -->
             <div class="basic-form ">
                 <div class="row my-custom mb-4">
                     <div class="col-4">
                         <div class="form-check">
                             <input type="checkbox" class="form-check-input" id="selectAllPermission">
                             <label class="form-check-label" for="selectAllPermission">Check All Permissions</label>
                         </div>
                     </div>
                     <div class="col-3">
                         <div class="form-check">
                             <input type="hidden" name="no_permissions">
                             <input type="checkbox" class="form-check-input" id="no_permissions" name="no_permissions"
                                 value="no_permissions">
                             <label class="form-check-label" for="no_permissions">No Permissions</label>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <input type="hidden" name="permission_ids[]">
                     @if ($allPermissions->isNotEmpty())
                         @foreach ($allPermissions as $perm)
                             <div class="col-3 mb-3">
                                 <div class="form-check">
                                     <input type="checkbox" class="form-check-input permission-checkbox"
                                         id="permission-{{ $loop->index }}" name="permission_ids[]"
                                         value="{{ $perm->id }}"
                                         @if (!empty(@$prevRole->permissions)) {
                                          @if ($prevRole->permissions->pluck('id')->contains($perm->id)) checked @endif
                                         } @endif
                                     >
                                     <label class="form-check-label"
                                         for="permission-{{ $loop->index }}">{{ $perm->name }}</label>
                                 </div>
                             </div>
                         @endforeach
                     @else
                         <div class="col-12 mb-3">
                             <label class="form-check-label text-danger">
                                 Please, create some permissions or Assign no permission
                             </label>
                         </div>
                     @endif

                 </div>
             </div>
             <!--  Ends :: Permissions Section  -->
         </form>

     </div>
     <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" id="saveRolePermission" class="btn btn-success"><i class="fa fa-save"></i>
             Save
         </button>
     </div>
 @endif


 <script>
     var userId = "{{ @$prevRole->id }}".trim();


     $(document).ready(function() {

         /*   Starts :: Change Save Button*/
         function chnageBtn() {
             if (userId && userId.trim() !== "") {
                 $('#saveRolePermission')
                     .removeClass('btn-success')
                     .addClass('btn-primary')
                     .html('<i class="fa fa-save"></i> Update');
             }
         }

         chnageBtn();
         /*   Ends :: Change Save Button*/

         // Select/Deselect All Roles
         $('#selectAllPermission').on('change', function() {
             $('.permission-checkbox').prop('checked', $(this).prop('checked'));
         });

         // Ensure "Select All" gets checked if all checkboxes are manually checked
         $('.permission-checkbox').on('change', function() {
             if ($('.permission-checkbox:checked').length === $('.permission-checkbox').length) {
                 $('#selectAllPermission').prop('checked', true);
             } else {
                 $('#selectAllPermission').prop('checked', false);
             }
         });


         //  Validate Role Form
         $('#rolePermissionForm').validate({
             rules: {
                 name: "required",
                 status: "required",
             },
             messages: {
                 name: {
                     required: "Please enter role name."
                 },
                 status: {
                     required: "Please select role status."
                 },
             },
             highlight: function(element) {
                 $(element).addClass('border-danger')
             },
             unhighlight: function(element) {
                 $(element).removeClass('border-danger')
             },
         });

         // Submit form data
         $('#saveRolePermission').off('click');
         $('#saveRolePermission').on('click', function() {
             if ($('#rolePermissionForm').valid()) {
                 showLoader();
                 //  alert('ok');

                 $('#rolePermissionForm').ajaxSubmit({
                     success: function(response) {
                         if (response.type === 'success') {
                             toastr[response.type](response.message);
                             $('#rolePermissionForm')[0].reset();
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
