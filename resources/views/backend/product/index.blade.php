@extends('backend.layouts.main')

@section('backend-title')
    Products
@endsection

@section('page-title')
    Products List
@endsection

@section('heading-content')
    Product Management
@endsection

@section('addButton')
    @can('add_product')
        <button type="button" class="btn btn-primary editSingleProductData" data-toggle="modal"
            data-target=".bd-example-modal-lg">
            <i class="fa fa-add"></i>
            Add Product
        </button>
    @endcan
@endsection

@section('backend-content')
    <!-- Starts :: Row  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Products List</h4>

                    <div class="row">
                        {{-- can('deleted_user') --}}
                        <div class="form-check col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-check-input" type="checkbox" value="R" id="deleted_products"
                                name="deleted_products">
                            <label class="form-check-label text-danger" for="deleted_products"
                                style="min-width: 189px !important;">
                                <span class="text-danger">View Deleted Products</span>
                            </label>
                        </div>
                        {{-- endcan --}}

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
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Qty</th>
                                        <th>Stock Status</th>
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
        $(document).ready(function(e) {


            // Edit or Add Form
            $(document).off('click', '.editSingleProductData');
            $(document).on('click', '.editSingleProductData', function() {
                var id = $(this).data('id');
                var url = "{{ route('admin.products.form') }}";
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
