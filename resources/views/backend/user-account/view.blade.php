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
            @if (!empty($userDetails->name))
                "{{ $userDetails->name }}"
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
                        @if (!empty($userDetails->name))
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{ $userDetails->name }}</td>
                            </tr>
                        @endif

                        @if (!empty($userDetails->email))
                            <tr>
                                <th> Email </th>
                                <td>{{ $userDetails->email }}</td>
                            </tr>
                        @endif

                        @if (!empty($userDetails->mobile_number))
                            <tr>
                                <th scope="row">Mobile Number</th>
                                <td>{{ $userDetails->mobile_number }}</td>
                            </tr>
                        @endif

                        <tr>
                            <th scope="row">Profile Picture</th>
                            <?php
                            $photo = asset('images/no-image.jpg');
                            if (!empty($userDetails->profile_picture)) {
                                $photo = asset('storage/user-account/' . $userDetails->profile_picture);
                            }
                            ?>
                            <td><img src="{{ $photo }}" height="100px" alt="Image">
                        </tr>

                        @if (!empty($userDetails->address))
                            <tr>
                                <th scope="row">Address</th>
                                <td>{{ strip_tags($userDetails->address) }}</td>
                            </tr>
                        @endif


                        @if (!empty($roles))
                            <tr>
                                <th scope="row">Roles</th>
                                <td>{{ implode(', ', $roles->toArray()) }}</td>
                            </tr>
                        @endif


                        <!-- Starts ::  -->
                        @if (!empty($userDetails->trashed_by))
                            <tr>
                                <th scope="row">Trashed By</th>
                                <td>{{ $userDetails->trashedByUser?->name ?? 'N/A' }}</td>
                            </tr>
                        @endif

                        @if (!empty($userDetails->deleted_by))
                            <tr>
                                <th scope="row">Deleted By</th>
                                <td>{{ strip_tags($userDetails->deletedByUser?->name ?? 'N/A') }}</td>
                            </tr>
                        @endif

                        @if (!empty($userDetails->deleted_at))
                            <tr>
                                <th scope="row">Deleted At</th>
                                <td>{{ strip_tags($userDetails->deleted_at) }}</td>
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
