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
            {{ !empty($prevTodo->title) ? $prevTodo->title : 'Your Todo' }}
        </h5>
        <button type="button" class="close" data-dismiss="modal"><span style="font-size: 25px !important;">×</span>
        </button>
    </div>
    <div class="modal-body">

        <!-- Starts :: Todo List with Title -->
        <form action="" method="POST"></form>
        <div class="card">

            <!-- Starts :: Form Section  -->
            <form action="{{ route('admin.todo-message.save') }}" method="POST" id="todoItemForm">
                @csrf
                <input type="hidden" name="titleId" id="titleId" value="{{ @$prevTodo->id }}">
                <input type="hidden" name="messageId" id="messageId" value="">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" style="margin-left: 22px;">
                        <input type="text" class="form-control" name="message" placeholder="Write new item...">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <button class="btn btn-primary saveTodoItem">Add Todo</button>
                    </div>
                </div>
            </form>
            <!-- Ends :: Form Section  -->


            <!-- Starts :: Todo List Section  -->
            <div class="card-body px-0">
                <div class="todo-list">
                    <div class="tdl-holder">
                        <div class="tdl-content widget-todo mr-4 ps ps--active-y" style="height: 100% !important;">
                            <ul class="todo-message" id="todo_list">
                                <!-- Todo Message List Appear Here -->
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Ends :: Todo List Section  -->

        </div>
        <!-- Ends :: Todo List with Title -->

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>


    <script>
        function refreshTodoMessagelist(titleId) {
            $.ajax({
                url: "{{ route('admin.todo-message.index') }}",
                type: "GET",
                data: {
                    id: titleId
                },
                success: function(response) {
                    $('.todo-message').html(response.todoMessageList);
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                }
            });
        }

        $(document).ready(function() {

            const titleId = $('#titleId').val();
            refreshTodoMessagelist(titleId);

            /**   Starts :: Validate Todo List tem Form */
            $('#todoItemForm').validate({
                rules: {
                    message: "required",
                },
                messages: {
                    message: {
                        required: "Please enter todo item."
                    },
                },
                highlight: function(element) {
                    $(element).addClass('border-danger')
                },
                unhighlight: function(element) {
                    $(element).removeClass('border-danger')
                },
            });
            /**   Ends :: Validate Todo List tem Form */


            /**   Starts :: Save Todo List Item */
            $('.saveTodoItem').off('click');
            $('.saveTodoItem').on('click', function(e) {
                e.preventDefault();

                if ($('#todoItemForm').valid()) {
                    $('#todoItemForm').ajaxSubmit({
                        success: function(response) {
                            if (response.type === 'success') {
                                toastr[response.type](response.message);
                                $('#messageId').val('');
                                $('#todoItemForm')[0].reset();
                                refreshTodoMessagelist(titleId);
                                $('.saveTodoItem')
                                    .removeClass('btn-success')
                                    .addClass('btn-primary')
                                    .html('Add Todo');
                            } else {
                                toastr['error'](response.message);
                            }
                        },
                        error: function(xhr) {
                            var response = xhr.responseJSON;
                            if (response) {
                                toastr['error'](response.message || 'An error occurred');
                            } else {
                                toastr['error']('Something went wrong');
                            }
                        }
                    });
                }
            });
            /**   Ends :: Save Todo List Item */


            /**  Starts  :: Update  Todo List Item */
            $(document).off('click', '.editTodoMessage');
            $(document).on('click', '.editTodoMessage', function() {
                var id = $(this).data('id');
                var message = $(this).data('message');

                $('#todoItemForm  input[name = "messageId"]').val(id)
                $('#todoItemForm  input[name = "message"]').val(message)
                $('.saveTodoItem')
                    .removeClass('btn-primary')
                    .addClass('btn-success')
                    .html('<i class="fa fa-save"></i> Update Todo');
            });
            /**  Ends :: Update  Todo List Item */


            /** Starts :: Delete Todo Title **/
            $(document).off('click', '.deleteTodoMessage');
            $(document).on('click', '.deleteTodoMessage', function() {

                Swal.fire({
                    title: "Are you sure you want to delete permanently this todo item ?",
                    text: "You won't be able to revert it !",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DB1F48",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Delete Permanently!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        showLoader();
                        var id = $(this).data('id');
                        var data = {
                            id: id,
                        };
                        var url = "{{ route('admin.todo-message.delete') }}";
                        $.post(url, data, function(response) {
                            if (response) {
                                if (response.type === 'success') {
                                    toastr[response.type](response.message);
                                    hideLoader();
                                    refreshTodoMessagelist(titleId);
                                } else {
                                    toastr[response.type](response.message);
                                    hideLoader();
                                }
                            }
                        });
                    }
                });

            });
            /** Ends :: Delete Todo Title **/


            /** Starts :: Update Todo List Item Satus **/
            $(document).off('change', '.messageCheckBox');
            $(document).on('change', '.messageCheckBox', function() {
                var messageId = $(this).data('id');
                var checked = $(this).is(':checked') ? 'checked' : 'notchecked';

                $.ajax({
                    url: "{{ route('admin.todo-message.status.update') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: messageId,
                        checkbox: checked
                    },
                    success: function(response) {
                        toastr.success(response.message);
                    },
                    error: function(xhr) {
                        toastr.error('Something went wrong.');
                    }
                });
            });
            /** Ends :: Update Todo List Item Satus **/
        });
    </script>
@endif
