@extends('backend.layouts.main')

@section('backend-title')
    Admin Dashboard
@endsection

@section('page-title')
    Hi, welcome back! <br />
    Your business dashboard template
    <a href="" target="_blank"><button class="btn btn-primary">Go Second Page</button></a>
    {{-- {{ route('second-page') }} --}}
    {{ auth()->user()->name }}
@endsection

@section('backend-content')
    <div class="row">
        <div class="col-lg-6 col-xl-4 col-xxl-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Timeline</h4>
                </div>
                <div class="card-body">
                    <div class="widget-timeline" style="height: 374px !important;">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge primary"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>10 minutes ago</span>
                                    <h6 class="m-t-5">Youtube, a video-sharing website, goes live.</h6>
                                </a>
                            </li>

                            <li>
                                <div class="timeline-badge warning">
                                </div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>20 minutes ago</span>
                                    <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                </a>
                            </li>

                            <li>
                                <div class="timeline-badge danger">
                                </div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>30 minutes ago</span>
                                    <h6 class="m-t-5">Google acquires Youtube.</h6>
                                </a>
                            </li>

                            <li>
                                <div class="timeline-badge success">
                                </div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>15 minutes ago</span>
                                    <h6 class="m-t-5">StumbleUpon is acquired by eBay. </h6>
                                </a>
                            </li>

                            <li>
                                <div class="timeline-badge warning">
                                </div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>20 minutes ago</span>
                                    <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                </a>
                            </li>

                            <li>
                                <div class="timeline-badge dark">
                                </div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>20 minutes ago</span>
                                    <h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6>
                                </a>
                            </li>

                            <li>
                                <div class="timeline-badge info">
                                </div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>30 minutes ago</span>
                                    <h6 class="m-t-5">Google acquires Youtube.</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!--  Starts :: Todo List Section-->
        <div class="col-xl-4 col-xxl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Todo</h4>
                </div>
                <div class="card-body px-0">
                    <div class="todo-list">
                        <div class="tdl-holder">
                            <div class="tdl-content widget-todo mr-4" style="height: 295px !important;">
                                <ul id="todo_list">
                                    <!-- Todo Title List Appear Here -->
                                </ul>
                            </div>
                            <div class="px-4">
                                <form action="" method="POST" id="todoForm">
                                    {{-- {{ route('admin.todo-title.save') }} --}}
                                    @csrf
                                    <input type="hidden" name="id" id="id" value="">
                                    <input type="text" name="title" class="tdl-new form-control"
                                        placeholder="Write new item and hit 'Enter'...">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Starts :: Todo List Section-->


        <div class="col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Sold</h4>
                    <div class="card-action">
                        <div class="dropdown custom-dropdown">
                            <div data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Option 1</a>
                                <a class="dropdown-item" href="#">Option 2</a>
                                <a class="dropdown-item" href="#">Option 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart py-4" style="height: 368px !important;">
                        <canvas id="sold-product"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sales Overview</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12 col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="m-t-10">
                        <h4 class="card-title">Customer Feedback</h4>
                        <h2 class="mt-3">385749</h2>
                    </div>
                    <div class="widget-card-circle mt-5 mb-5" id="info-circle-card">
                        <i class="ti-control-shuffle pa"></i>
                    </div>
                    <ul class="widget-line-list m-b-15">
                        <li class="border-right">92% <br><span class="text-success"><i class="ti-hand-point-up"></i>
                                Positive</span></li>
                        <li>8% <br><span class="text-danger"><i class="ti-hand-point-down"></i>Negative</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- // {{ route('admin.todo-title.index') }} --}}
@endsection

@section('backend-script')
    <script>
        function refreshTodoLists() {
            $.ajax({
                url: "",
                type: "GET",
                success: function(response) {
                    $('#todo_list').html(response.todoListHTML);
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                }
            });
        }

        $(document).ready(function() {
            refreshTodoLists();
        });


        $(document).ready(function() {
            $('.tdl-new').keypress(function(e) {
                if (e.which == 13) {
                    e.preventDefault();

                    let form = $('#todoForm');
                    let formData = form.serialize();

                    $.ajax({
                        url: form.attr('action'),
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            if (response.type === 'success') {
                                toastr.success(response.message);
                                form[0].reset();
                                $('#id').val('');
                            } else {
                                toastr.error(response.message);
                            }

                            refreshTodoLists();
                        },
                        error: function(xhr) {
                            let response = xhr.responseJSON;
                            toastr.error(response?.message || 'An error occurred');
                        }
                    });
                }
            });


            /**  Starts  :: Update  Todo  Item */
            $(document).off('click', '.editTodo');
            $(document).on('click', '.editTodo', function() {
                var id = $(this).data('id');
                var title = $(this).data('title');

                $('#todoForm  input[name = "id"]').val(id)
                $('#todoForm  input[name = "title"]').val(title)
            });
            /**  Ends :: Update  Todo  Item */


        });
    </script>
@endsection
