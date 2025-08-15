@extends('backend.layouts.main')

@section('backend-title')
    User's Role With Permissions
@endsection

@section('page-title')
    User's Role With Permissions
@endsection

@section('heading-content')
    User Management
@endsection

@section('addButton')
    @can('add_role_permission')
        <button type="button" class="btn btn-primary editSingleData" data-toggle="modal" data-target=".bd-example-modal-lg">
            <i class="fa fa-add"></i> Add Role
        </button>
    @endcan
@endsection


@section('backend-content')
    <!-- Starts :: Row  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User's Role With Permissions</h4>

                    <div class="row ms-0">
                        <div class="form-check col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-check-input" type="checkbox" value="Y" id="trashed_file"
                                name="trashed_file">
                            <label class="form-check-label" for="trashed_file">
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
                                        <th>Roles</th>
                                        <th>Role Description</th>
                                        <th>Permissions</th>
                                        <th style="min-width: 55.55px;">Action</th>
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
                        "data": "description"
                    },
                    {
                        "data": "permissions"
                    },
                    {
                        "data": "action"
                    },
                ],
                "ajax": {
                    "url": "{{ route('admin.user.roles.list') }}",
                    "type": "POST",
                    "data": function(d) {
                        var type = $('#trashed_file').is(':checked') == true ? 'trashed' :
                            'nottrashed';
                        d.type = type;
                    }
                },
                "initComplete": function() {
                    // Ensure text input fields in the header for specific columns with placeholders
                    this.api().columns([1, 3]).every(function() {
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


            // view trashed items-start
            $('#trashed_file').off('change');
            $('#trashed_file').on('change', function(e) {
                table.draw();
            });
            // view trashed items-ends


            // Edit user account
            $(document).off('click', '.editSingleData');
            $(document).on('click', '.editSingleData', function() {
                var id = $(this).data('id');
                var url = "{{ route('admin.user.roles.form') }}";
                var data = {
                    id: id
                };
                $.post(url, data, function(response) {
                    $('.bd-example-modal-lg .modal-content').html(response);
                    $('.bd-example-modal-lg').modal('show');
                });
            });

            // Move to trash
            $(document).off('click', '.deleteData');
            $(document).on('click', '.deleteData', function() {

                var type = $('#trashed_file').is(':checked') == true ? 'trashed' :
                    'nottrashed';

                Swal.fire({

                    title: type === "nottrashed" ? "Are you sure you want to trash this role ?" :
                        "Are you sure you want to delete permanently this role with permissions ?",

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
                        var url = "{{ route('admin.user.roles.delete') }}";
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
            $(document).off('click', '.restoreData ');
            $(document).on('click', '.restoreData ', function() {

                Swal.fire({
                    title: "Are you sure want to restore this role with permisisons from trash ?",
                    text: "You will be able to delete it!",
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
                        };
                        var url = "{{ route('admin.user.roles.restore') }}";
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
