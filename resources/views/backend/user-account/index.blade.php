@extends('backend.layouts.main')

@section('backend-title')
    User's Details
@endsection

@section('page-title')
    User's Account List
@endsection

@section('heading-content')
    User Management
@endsection

@section('addButton')
    @can('add_user')
        <button type="button" class="btn btn-primary editSingleUserData " data-toggle="modal" data-target=".bd-example-modal-lg">
            <i class="fa fa-add"></i>
            Add User
        </button>
    @endcan
@endsection


@section('backend-content')
    <!-- Starts :: Row  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Datatable</h4>

                    <div class="row">
                        @can('deleted_user')
                            <div class="form-check col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-check-input" type="checkbox" value="R" id="deleted_users"
                                    name="deleted_users">
                                <label class="form-check-label text-danger" for="deleted_users"
                                    style="min-width: 150px !important;">
                                    <span class="text-danger">View Deleted User</span>
                                </label>
                            </div>
                        @endcan

                        <div class="form-check col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-check-input" type="checkbox" value="Y" id="trashed_file"
                                name="trashed_file">
                            <label class="form-check-label" for="trashed_file" style="min-width: 85px !important;">
                                View Trashed
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="userListTable" class="display dataTable" style="min-width: 845px" role="grid"
                                aria-describedby="example_info">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Profile</th>
                                        <th>Address</th>
                                        <th style="min-width: 94.55px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ends :: Row  -->
@endsection


@section('backend-script')
    <script>
        var table;

        $(document).ready(function() {

            table = $('#userListTable').DataTable({
                "sPaginationType": "full_numbers",
                "bSearchable": false,
                "lengthMenu": [
                    [5, 10, 15, 20, 25, -1],
                    [5, 10, 15, 20, 25, "All"]
                ],
                'iDisplayLength': 15,
                "sDom": 'ltipr',
                "bAutoWidth": false,
                "aaSorting": [
                    [0, 'desc']
                ],
                "bSort": false,
                "bProcessing": true,
                "bServerSide": true,
                "oLanguage": {
                    "sEmptyTable": "<p class='no_data_message'>No data available.</p>"
                },
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [1]
                }],
                'columnDefs': [{
                        "targets": 0, // your case first column
                        "className": "text-center",
                        "width": "4%"
                    },
                    {
                        "targets": 2,
                        "className": "text-right",
                    }
                ],
                "aoColumns": [{
                        "data": "sno"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "mobile_number"
                    },
                    {
                        "data": "profile_picture"
                    },
                    {
                        "data": "address"
                    },
                    {
                        "data": "action"
                    },
                ],
                "ajax": {
                    "url": "{{ route('admin.user-account.list') }}",
                    "type": "POST",
                    "data": function(d) {
                        d.type = $('#trashed_file').is(':checked') ? 'trashed' : 'nottrashed';
                        d.deleted_users = $('#deleted_users').is(':checked') ? 'R' : '';
                    }

                },
                "initComplete": function() {
                    // Ensure text input fields in the header for specific columns with placeholders
                    this.api().columns([1, 2, 3]).every(function() {
                        var column = this;
                        var input = document.createElement("input");
                        var columnName = column.header().innerText.trim();
                        // Append input field to the header, set placeholder, and apply CSS styling
                        $(input).appendTo($(column.header()).empty())
                            .attr('placeholder', columnName).css('width',
                                '100%') // Set width to 100%
                            .addClass(
                                'search-input-highlight') // Add a CSS class for highlighting
                            .on('keyup change', function() {
                                column.search(this.value).draw();
                            });
                    });
                }
            });


            // View trashed items - start
            $('#trashed_file').off('change');
            $('#trashed_file').on('change', function(e) {
                if ($(this).is(':checked')) {
                    $('#deleted_users').prop('checked', false);
                }
                table.draw();
            });
            // View trashed items - end

            // View deleted users - start
            $('#deleted_users').off('change');
            $('#deleted_users').on('change', function(e) {
                if ($(this).is(':checked')) {
                    $('#trashed_file').prop('checked', false);
                }
                table.draw();
            });
            // View deleted users - end


            // Edit user account
            $(document).off('click', '.editSingleUserData');
            $(document).on('click', '.editSingleUserData', function() {
                var id = $(this).data('id');
                var url = "{{ route('admin.user-account.form') }}";
                var data = {
                    id: id
                };
                $.post(url, data, function(response) {
                    $('.bd-example-modal-lg .modal-content').html(response);
                    $('.bd-example-modal-lg').modal('show');
                });
            });


            // View user account
            $(document).off('click', '.viewUserData ');
            $(document).on('click', '.viewUserData ', function() {
                var id = $(this).data('id');
                var type = $('#deleted_users').is(':checked') == true ? 'R' :
                    'nottrashed';

                var url = "{{ route('admin.user-account.view') }}";
                var data = {
                    id: id,
                    type: type,
                };
                $.post(url, data, function(response) {
                    $('.bd-example-modal-lg .modal-content').html(response);
                    $('.bd-example-modal-lg').modal('show');
                });
            });


            // Deleting User Account
            $(document).off('click', '.deleteUser');
            $(document).on('click', '.deleteUser', function() {

                var type = 'nottrashed'; // default

                if ($('#trashed_file').is(':checked')) {
                    type = 'trashed';
                } else if ($('#deleted_users').is(':checked')) {
                    type = 'R';
                }

                Swal.fire({
                    title: type === "nottrashed" ?
                        "Are you sure you want to trash this user account ?" :
                        "Are you sure you want to delete permanently this user account ?",

                    text: type === "nottrashed" ?
                        "You will be able to revert it !" : "You won't be able to revert it !",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DB1F48",
                    cancelButtonColor: "#d33",
                    confirmButtonText: type === "nottrashed" ?
                        "Yes, Move to Trash!" : "Yes, Delete Permanently!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        showLoader();
                        var id = $(this).data('id');
                        var data = {
                            id: id,
                            type: type,
                        };
                        var url = "{{ route('admin.user-account.delete') }}";
                        $.post(url, data, function(response) {
                            if (response) {
                                if (response.type === 'success') {
                                    toastr[response.type](response.message);
                                    table.draw();
                                    hideLoader();
                                } else {
                                    toastr[response.type](response.message);
                                    hideLoader();
                                }
                            }
                        });
                    }
                });
            });


            // Restore Data
            $(document).off('click', '.restoreUser ');
            $(document).on('click', '.restoreUser ', function() {

                var type = $('#trashed_file').is(':checked') == true ? 'trashed' :
                    'R';

                Swal.fire({
                    title: type === "trashed" ?
                        "Are you sure want to restore this user account from trash ?" :
                        "Are you sure want to restore this user ?",

                    text: "You will be able to delete it again !",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#2688DA !important",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Restore it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        showLoader();
                        var id = $(this).data('id');
                        var data = {
                            id: id,
                            type: type,
                        };
                        var url = "{{ route('admin.user-account.restore') }}";
                        $.post(url, data, function(response) {
                            if (response) {
                                if (response.type === 'success') {
                                    toastr[response.type](response.message);
                                    table.draw();
                                    hideLoader();
                                } else {
                                    toastr[response.type](response.message);
                                    hideLoader();
                                }
                            }
                        });
                    }
                });
            });

        });
    </script>
@endsection
