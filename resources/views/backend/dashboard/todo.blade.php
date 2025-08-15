<style>
    .viewTodo,
    .deleteTodo,
    .editTodo {
        display: none !important;
    }

    .viewTodo {
        margin-right: 30px !important;
    }

    .editTodo {
        margin-right: 60px !important;
    }

    /* Show icons when hovering over the whole li */
    #todo_list li:hover .viewTodo,
    #todo_list li:hover .editTodo,
    #todo_list li:hover .deleteTodo {
        display: inline-block !important;
    }

    /* Optional: keep spacing and alignment clean */
    #todo_list li label {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    #todo_list li span {
        flex-grow: 1;
        margin-left: 35px;
    }
</style>

@forelse ($todoLists as $list)
    <li>
        <label>
            <input type="checkbox" class="todoTitleCheckBox" data-id="{{ $list->id }}"
                {{ $list->status == 'N' ? 'checked' : '' }}>
            <i></i>
            <span>{{ !empty($list->title) ? trimTodoText($list->title) : '' }}</span>
            <a href="javascript:void(0)" data-id="{{ $list->id }}" data-title="{{ $list->title }}"
                class="fa-solid fa-pencil text-primary editTodo">
                {{-- class="fa fa-solid fa-pen-to-square text-primary editTodo"> --}}
                {{-- <i class="fa-solid fa-pencil"></i> --}}
            </a>
            <a href="javascript:void(0)" data-id="{{ @$list->id }}" class="fa fa-regular fa-eye text-success viewTodo">
            </a>
            <a href="javascript:void(0)" data-id="{{ @$list->id }}" class="fa fa-trash text-danger deleteTodo"> </a>
        </label>
    </li>
@empty
    <li>
        <label>
            No Todo List
        </label>
    </li>
@endforelse

<script>
    $(document).ready(function() {
        /** Starts :: Delete Todo Title **/
        $(document).off('click', '.deleteTodo');
        $(document).on('click', '.deleteTodo', function() {

            Swal.fire({
                title: "Are you sure you want to delete permanently this todo title with todo list items ?",
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
                    var url = "{{ route('admin.todo-title.delete') }}";
                    $.post(url, data, function(response) {
                        if (response) {
                            if (response.type === 'success') {
                                toastr[response.type](response.message);
                                refreshTodoLists();
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
        /** Ends :: Delete Todo Title **/


        /** Starts :: View Todo Title With List **/
        $(document).off('click', '.viewTodo');
        $(document).on('click', '.viewTodo', function() {

            var id = $(this).data('id');

            var url = "{{ route('admin.todo-title.view') }}";
            var data = {
                id: id,
            };
            $.post(url, data, function(response) {
                $('.bd-example-modal-lg .modal-content').html(response);
                $('.bd-example-modal-lg').modal('show');
            });

        });
        /** Starts :: View Todo Title With List **/



        /** Starts :: Update Todo Title Satus **/
        $(document).off('change', '.todoTitleCheckBox');
        $(document).on('change', '.todoTitleCheckBox', function() {
            var messageId = $(this).data('id');
            var checked = $(this).is(':checked') ? 'checked' : 'notchecked';

            $.ajax({
                url: "{{ route('admin.todo-title.status.update') }}",
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
        /** Ends :: Update Todo Title Satus **/

    });
</script>
