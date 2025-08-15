@extends('backend.layouts.main')

@section('backend-title')
    Product Category
@endsection

@section('page-title')
    Product Category
@endsection

@section('heading-content')
    Product Management
@endsection

@section('backend-style')
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
        @can('add_category')
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Category Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('admin.product.category.save') }}" method="POST" id="productCategoryForm">
                                <input type="hidden" name="id" id="id" value="">
                                <div class="form-row">
                                    <!-- Starts :: Product Category Name -->
                                    <div class="form-group col-md-12">
                                        <label class="required" for="name">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter category name"
                                            id="name" name="name">
                                    </div>
                                    <!-- Ends :: Product Category Name -->


                                    <!-- Starts :: Product Category Order -->
                                    <div class="form-group col-md-12">
                                        <label class="required" for="sort_order">Order</label>
                                        <input type="number" class="form-control" placeholder="Enter category order"
                                            id="sort_order" name="sort_order">
                                    </div>
                                    <!-- Ends :: Product Category Order -->


                                    <!-- Starts :: Product Category Description -->
                                    <div class="form-group col-md-12">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" placeholder="Enter category description..." name="description" id="description"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Ends :: Product Category Description -->

                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="button" id="saveData" class="btn btn-success">
                                        <i class="fa fa-save"></i>
                                        Save
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
        <!-- Starts :: Form Section-->


        <!-- Starts :: Table Section-->
        @can('view_category')
            @php
                $tableColClass = auth()->user()->can('add_category') ? 'col-9' : 'col-12';
            @endphp
            <div class="{{ $tableColClass }}">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Category List</h4>

                        <div class="row">
                            @can('deleted_category')
                                <div class="form-check col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="form-check-input" type="checkbox" value="R" id="deleted_category"
                                        name="deleted_category">
                                    <label class="form-check-label text-danger" for="deleted_category"
                                        style="min-width: 182px !important;">
                                        <span class="text-danger">View Deleted Category</span>
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
                                <table id="productCategoryTable" class="display dataTable" style="min-width: 1px" role="grid"
                                    aria-describedby="example_info">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Category</th>
                                            <th>Order</th>
                                            <th>Description</th>
                                            <th style="width: 93.9125px;">Action</th>
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
    <script>
        var table;

        $(document).ready(function() {

            table = $('#productCategoryTable').DataTable({
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
                    [2]
                ],
                "bSort": true,
                "bProcessing": true,
                "bServerSide": true,
                "oLanguage": {
                    "sEmptyTable": "<p class='no_data_message'>No data available.</p>"
                },
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [0, 1, 3, 4]
                }],

                "aoColumns": [{
                        "data": "sno"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "sort_order"
                    },
                    {
                        "data": "description"
                    },
                    {
                        "data": "action"
                    },
                ],
                "ajax": {
                    "url": "{{ route('admin.product.category.list') }}",
                    "type": "POST",
                    "data": function(d) {
                        d.type = $('#trashed_file').is(':checked') ? 'trashed' : 'nottrashed';
                        d.deleted_category = $('#deleted_category').is(':checked') ? 'R' : '';
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


            // View trashed items - start
            $('#trashed_file').off('change');
            $('#trashed_file').on('change', function(e) {
                if ($(this).is(':checked')) {
                    $('#deleted_category').prop('checked', false);
                }
                table.draw();
            });
            // View trashed items - end

            // View deleted users - start
            $('#deleted_category').off('change');
            $('#deleted_category').on('change', function(e) {
                if ($(this).is(':checked')) {
                    $('#trashed_file').prop('checked', false);
                }
                table.draw();
            });
            // View deleted users - end

            // Validating Form
            $('#productCategoryForm').validate({
                rules: {
                    name: "required",
                    sort_order: "required",
                },
                messages: {
                    name: {
                        required: "Please enter category name."
                    },
                    sort_order: {
                        required: "Please enter category order."
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
                if ($('#productCategoryForm').valid()) {
                    showLoader();

                    $('#productCategoryForm').ajaxSubmit({
                        success: function(response) {
                            if (response.type === 'success') {
                                toastr.success(response.message);
                                table.draw();
                                $('#id').val('');
                                $('#productCategoryForm')[0].reset();
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


            // Edit Product Category
            // update Product Category
            $(document).off('click', '.editSingleCategoryData');
            $(document).on('click', '.editSingleCategoryData', function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var sort_order = $(this).data('sort_order');
                var description = $(this).data('description');

                $('#productCategoryForm input[name = "id"]').val(id);
                $('#productCategoryForm input[name = "name"]').val(name);
                $('#productCategoryForm textarea[name = "description"]').val(description);
                $('#productCategoryForm input[name="sort_order"]').val(sort_order);

                $('#saveData')
                    .removeClass('btn-success')
                    .addClass('btn-primary')
                    .html('<i class="fa fa-save"></i> Update');
            });

            // View Product Category
            $(document).off('click', '.viewCategoryData');
            $(document).on('click', '.viewCategoryData', function() {
                var id = $(this).data('id');
                var type = $('#deleted_category').is(':checked') == true ? 'R' :
                    'nottrashed';

                var url = "{{ route('admin.product.category.view') }}";
                var data = {
                    id: id,
                    type: type,
                };
                $.post(url, data, function(response) {
                    $('.bd-example-modal-lg .modal-content').html(response);
                    $('.bd-example-modal-lg').modal('show');
                });
            });


            // Deleting Product Category
            $(document).off('click', '.deleteCategory');
            $(document).on('click', '.deleteCategory', function() {

                var type = 'nottrashed'; // default

                if ($('#trashed_file').is(':checked')) {
                    type = 'trashed';
                } else if ($('#deleted_category').is(':checked')) {
                    type = 'R';
                }

                Swal.fire({
                    title: type === "nottrashed" ?
                        "Are you sure you want to trash this Product Category ?" :
                        "Are you sure you want to delete permanently this Product Category ?",

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
                        var url = "{{ route('admin.product.category.delete') }}";
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
            $(document).off('click', '.restoreCategory');
            $(document).on('click', '.restoreCategory', function() {

                var type = $('#trashed_file').is(':checked') == true ? 'trashed' :
                    'R';

                Swal.fire({
                    title: type === "trashed" ?
                        "Are you sure want to restore this Product Category from trash ?" :
                        "Are you sure want to restore this Product Category ?",

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
                        var url = "{{ route('admin.product.category.restore') }}";
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
