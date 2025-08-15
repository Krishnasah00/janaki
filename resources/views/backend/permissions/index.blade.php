@extends('backend.layouts.main')

@section('backend-title')
    Permissions
@endsection

@section('page-title')
    Role's Permission List
@endsection

@section('heading-content')
    User Management
@endsection

@section('backend-style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        #status-error {
            position: absolute;
            margin-top: 55px !important;
            margin-left: -47px !important;
        }

        textarea::placeholder {
            color: #6c757d !important;
            opacity: 1 !important;
        }
    </style>
@endsection


@section('backend-content')
    <!-- Starts :: Row 1  -->
    <div class="row">

        <!-- Starts :: Form Section-->
        @can('add_permission')
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Permission Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('admin.user.permissions.save') }}" method="POST" id="permissionForm">
                                <input type="hidden" name="id" id="id" value="">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="required" for="name">Permission Name</label>
                                        <input type="text" class="form-control" placeholder="Enter permission name"
                                            id="name" name="name">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="required" for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option selected disabled value="">Select Status</option>
                                            <option value="active" data-icon="fa-solid fa-check text-success">Active</option>
                                            <option value="inactive" data-icon="fa-solid fa-xmark text-danger">In-Active
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" placeholder="Enter permission description..." name="description" id="description"
                                            rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="button" id="saveData" class="btn btn-success"> <i class="fa fa-save"></i>
                                        Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
        <!-- Starts :: Form Section-->


        <!-- Starts :: Table Section-->
        @can('view_permission')
            @php
                $tableColClass = auth()->user()->can('add_permission') ? 'col-8' : 'col-12';
            @endphp
            <div class="{{ $tableColClass }}">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Permissions List</h4>

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
                                <table id="permissionTable" class="display dataTable" style="min-width: 1px" role="grid"
                                    aria-describedby="example_info">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Permissions</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th style="width: 53.9125px;">Action</th>
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
        @endcan
        <!-- Starts :: Table Section-->
    </div>
    <!-- Ends :: Row 1  -->
@endsection


@section('backend-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        var table;
        $(document).ready(function() {
            $('#status').select2({
                minimumResultsForSearch: Infinity, // This removes the search box
                templateResult: function(state) {
                    if (!state.id) return state.text;
                    return $('<span><i class="' + $(state.element).data('icon') + '"></i> ' + state
                        .text + '</span>');
                },
                templateSelection: function(state) {
                    if (!state.id) return state.text;
                    return $('<span><i class="' + $(state.element).data('icon') + '"></i> ' + state
                        .text + '</span>');
                }
            });


            // Table to display data
            table = $('#permissionTable').DataTable({
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
                        "data": "status"
                    },
                    {
                        "data": "action"
                    },
                ],
                "ajax": {
                    "url": "{{ route('admin.user.permissions.list') }}",
                    "type": "POST",
                    "data": function(d) {
                        var type = $('#trashed_file').is(':checked') == true ? 'trashed' :
                            'nottrashed';
                        d.type = type;
                    }
                },
                "initComplete": function() {
                    // Ensure text input fields in the header for specific columns with placeholders
                    this.api().columns([1]).every(function() {
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


            // Validating Form
            $('#permissionForm').validate({
                rules: {
                    name: "required",
                    status: "required",
                },
                messages: {
                    name: {
                        required: "Please enter permission name."
                    },
                    status: {
                        required: "Please select status."
                    },
                },
                highlight: function(element) {
                    $(element).addClass('border-danger')
                },
                unhighlight: function(element) {
                    $(element).removeClass('border-danger')
                },
            });

            // Save permission data
            $('#saveData').off('click');
            $('#saveData').on('click', function() {
                if ($('#permissionForm').valid()) {
                    showLoader();

                    $('#permissionForm').ajaxSubmit({
                        success: function(response) {
                            if (response.type === 'success') {
                                toastr.success(response.message);
                                table.draw();
                                $('#id').val('');
                                $('#permissionForm')[0].reset();
                                $('#permissionForm select[name="status"]').val('').trigger(
                                    'change.select2');
                                $('#saveData')
                                    .removeClass('btn-primary')
                                    .addClass('btn-success')
                                    .html('<i class="fa fa-save"></i> Save');
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
                                toastr.error(response.message || 'An error occurred');
                            } else {
                                toastr.error('An error occurred');
                            }
                        }
                    });
                }
            });

            // update permission data
            $(document).off('click', '.editSingleData');
            $(document).on('click', '.editSingleData', function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var status = $(this).data('status');
                var description = $(this).data('description');

                // status Conversion
                if (status === "Y") status = "active";
                else if (status === "N") status = "inactive";

                $('#permissionForm input[name = "id"]').val(id);
                $('#permissionForm input[name = "name"]').val(name);
                $('#permissionForm textarea[name = "description"]').val(description);
                $('#permissionForm select[name="status"]').val(status).trigger('change.select2');

                $('#saveData')
                    .removeClass('btn-success')
                    .addClass('btn-primary')
                    .html('<i class="fa fa-save"></i> Update');
            });


            // Move to trash
            $(document).off('click', '.deleteData');
            $(document).on('click', '.deleteData', function() {

                var type = $('#trashed_file').is(':checked') == true ? 'trashed' :
                    'nottrashed';


                Swal.fire({
                    title: type === "nottrashed" ?
                        "Are you sure you want to trash this permission ?" :
                        "Are you sure you want to delete permanently this permissions ?",

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
                        var url = "{{ route('admin.user.permissions.delete') }}";
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
            $(document).off('click', '.restore ');
            $(document).on('click', '.restore ', function() {

                Swal.fire({
                    title: "Are you sure want to restore this permission from trash ?",
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
                        var url = "{{ route('admin.user.permissions.restore') }}";
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
