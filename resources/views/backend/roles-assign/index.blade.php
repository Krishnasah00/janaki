@extends('backend.layouts.main')

@section('backend-title')
    Assign Roles To User
@endsection

@section('page-title')
    Assign Roles To User
@endsection

@section('heading-content')
    User Management
@endsection

@section('backend-style')
@endsection


@section('backend-content')
    <!-- Starts :: Row 1  -->
    <div class="row">
        <!-- Starts :: Table Section-->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User With Roles</h4>

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
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Profile</th>
                                        <th>Roles</th>
                                        <th style="width: 20.9125px;">Action</th>
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
        <!-- Starts :: Table Section-->
    </div>
    <!-- Ends :: Row 1  -->
@endsection


@section('backend-script')
    <script>
        var table;
        $(document).ready(function() {
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
                        "data": "mobile_number"
                    },
                    {
                        "data": "profile_picture"
                    },
                    {
                        "data": "roles"
                    },
                    {
                        "data": "action"
                    },
                ],
                "ajax": {
                    "url": "{{ route('admin.user.assign-roles.list') }}",
                    "type": "POST",
                    "data": function(d) {
                        var type = $('#trashed_file').is(':checked') == true ? 'trashed' :
                            'nottrashed';
                        d.type = type;
                    }
                },
                "initComplete": function() {
                    // Ensure text input fields in the header for specific columns with placeholders
                    this.api().columns([1, 2]).every(function() {
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
            $(document).off('click', '.editRoles ');
            $(document).on('click', '.editRoles ', function() {
                var id = $(this).data('id');
                var url = "{{ route('admin.user.assign-roles.form') }}";
                var data = {
                    id: id
                };
                $.post(url, data, function(response) {
                    $('.bd-example-modal-lg .modal-content').html(response);
                    $('.bd-example-modal-lg').modal('show');
                });
            });
        });
    </script>
@endsection
