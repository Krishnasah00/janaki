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
        .modal-body .card-inner .nk-block .table {
            color: #000000 !important;
        }
    </style>

    <div class="modal-header">
        <h5 class="modal-title">
            View
            @if (!empty($productCategory->name))
                "{{ $productCategory->name }}"
            @endif
            Details
        </h5>
        <button type="button" class="close" data-dismiss="modal"><span style="font-size: 25px !important;">×</span>
        </button>
    </div>
    <div class="modal-body">

        <div class="card-inner">
            <div class="nk-block">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Body</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($productCategory->name))
                            <tr>
                                <th scope="row">Category Name</th>
                                <td>{{ $productCategory->name }}</td>
                            </tr>
                        @endif

                        @if (!empty($productCategory->sort_order))
                            <tr>
                                <th>Order</th>
                                <td>{{ $productCategory->sort_order }}</td>
                            </tr>
                        @endif

                        @if (!empty($productCategory->mobile_number))
                            <tr>
                                <th scope="row">Mobile Number</th>
                                <td>{{ $productCategory->mobile_number }}</td>
                            </tr>
                        @endif


                        @if (!empty($productCategory->description))
                            <tr>
                                <th scope="row">Description</th>
                                <td>{{ strip_tags($productCategory->description) }}</td>
                            </tr>
                        @endif


                        @if (!empty($roles))
                            <tr>
                                <th scope="row">Roles</th>
                                <td>{{ implode(', ', $roles->toArray()) }}</td>
                            </tr>
                        @endif


                        <!-- Starts ::  -->
                        @if (!empty($productCategory->trashed_by))
                            <tr>
                                <th scope="row">Trashed By</th>
                                <td>{{ $productCategory->trashedByUser?->name ?? 'N/A' }}</td>
                            </tr>
                        @endif

                        @if (!empty($productCategory->deleted_by))
                            <tr>
                                <th scope="row">Deleted By</th>
                                <td>{{ strip_tags($productCategory->deletedByUser?->name ?? 'N/A') }}</td>
                            </tr>
                        @endif

                        @if (!empty($productCategory->deleted_at))
                            <tr>
                                <th scope="row">Deleted At</th>
                                <td>{{ strip_tags($productCategory->deleted_at) }}</td>
                            </tr>
                        @endif
                        <!-- Ends ::  -->

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
@endif
