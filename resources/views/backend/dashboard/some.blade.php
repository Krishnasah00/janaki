@extends('backend.layouts.main')

@section('backend-title')
    Admin Dashboard
@endsection

@section('page-title')
    Hi, welcome back! <br />
    Your business dashboard template
@endsection

@section('backend-content')
    <div class="row">
        <div class="col-lg-6 col-xl-4 col-xxl-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Timeline</h4>
                </div>
                <div class="card-body">
                    <div class="widget-timeline">
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

        <!--  Starts :: ToDo Section-->
        <div class="col-xl-4 col-xxl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Todo</h4>
                </div>
                <div class="card-body px-0">
                    <div class="todo-list">
                        <div class="tdl-holder">
                            <div class="tdl-content widget-todo mr-4">
                                <ul id="todo_list">
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i></i>
                                            <span>Get up</span>
                                            <a href='{{ route('admin.login') }}' class="ti-user" style="margin-right: 30px;">
                                            </a>
                                            &nbsp; &nbsp;
                                            <a href='{{ route('admin.login') }}' class="ti-trash">
                                            </a>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-4">
                                <input type="text" class="tdl-new form-control"
                                    placeholder="Write new item and hit 'Enter'...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Starts :: ToDo Section-->


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
                    <div class="chart py-4">
                        <canvas id="sold-product"></canvas>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-xl-12 col-xxl-6 col-lg-6 col-md-12">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-facebook">
                            <span class="s-icon"><i class="fa fa-facebook"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-right">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="counter">89</span> k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="counter">119</span> k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-linkedin">
                            <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-right">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="counter">89</span> k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="counter">119</span> k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-googleplus">
                            <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-right">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="counter">89</span> k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="counter">119</span> k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-twitter">
                            <span class="s-icon"><i class="fa fa-twitter"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-right">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="counter">89</span> k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="counter">119</span> k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>












    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project</h4>
                </div>
                <div class="card-body">
                    <div class="current-progress">
                        <div class="progress-content py-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="progress-text">Website</div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="current-progressbar">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-40" role="progressbar"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                40%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-content py-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="progress-text">Android</div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="current-progressbar">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-60" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                60%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-content py-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="progress-text">Ios</div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="current-progressbar">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-70" role="progressbar"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                70%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-content py-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="progress-text">Mobile</div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="current-progressbar">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-90" role="progressbar"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                90%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="testimonial-widget-one p-17">
                        <div class="testimonial-widget-one owl-carousel owl-theme owl-loaded owl-drag" style="">



                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-690px, 0px, 0px); transition: all; width: 2417px;">
                                    <div class="owl-item cloned" style="width: 335.263px; margin-right: 10px;">
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial-author">TYRION LANNISTER</div>
                                                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 335.263px; margin-right: 10px;">
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial-author">TYRION LANNISTER</div>
                                                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 335.263px; margin-right: 10px;">
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial-author">TYRION LANNISTER</div>
                                                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 335.263px; margin-right: 10px;">
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial-author">TYRION LANNISTER</div>
                                                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 335.263px; margin-right: 10px;">
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial-author">TYRION LANNISTER</div>
                                                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 335.263px; margin-right: 10px;">
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial-author">TYRION LANNISTER</div>
                                                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 335.263px; margin-right: 10px;">
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="testimonial-author">TYRION LANNISTER</div>
                                                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                    class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button"
                                    role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Web Server</h4>
                </div>
                <div class="card-body">
                    <div class="cpu-load-chart">
                        <div id="cpu-load" class="cpu-load" style="padding: 0px; position: relative;"><canvas
                                class="flot-base" width="419" height="187"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335.263px; height: 150px;"></canvas>
                            <div class="flot-text"
                                style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                    style="position: absolute; inset: 0px;">
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 133px; left: 13px; text-align: right;">0</div>
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 100px; left: 7px; text-align: right;">25</div>
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 67px; left: 7px; text-align: right;">50</div>
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 34px; left: 7px; text-align: right;">75</div>
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 1px; left: 0px; text-align: right;">100</div>
                                </div>
                            </div><canvas class="flot-overlay" width="419" height="187"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335.263px; height: 150px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Country</h4>
                </div>
                <div class="card-body">
                    <div id="vmap13" class="vmap"
                        style="position: relative; overflow: hidden; background-color: transparent;"><svg width="537.9"
                            height="400">
                            <g transform="scale(0.5608967674661105) translate(0, 60.07185350436885)">
                                <path
                                    d="m244.66,512.25c-2.48,3.8 2.23,4.04 4.74,5.38 3.06,0.16 3.51,-4.28 2.66,-6.56 -2.72,-0.77 -5.01,-0.19 -7.41,1.19z m-9.31,3.97c-4.02,5.11 3.64,0.48 0.63,-0.09l-0.5,0.07 -0.14,0.02z m39.69,7.97c-0.62,2.09 1.91,6.73 4.39,6.2 2.41,-1.46 3.73,1.73 6.48,0.56 1.23,-1.48 -3.77,-3.2 -3.7,-6.08 -0.95,-3.8 -3.28,-3.2 -5.96,-1.28 -0.41,0.2 -0.81,0.4 -1.22,0.6z m19.94,10.03c3.58,0.95 7.91,2.99 11.25,0.47 -1.05,-1.63 -5.06,-0.59 -7.1,-0.86 -1.44,0.01 -3.54,-1.63 -4.15,0.39z m12.13,4.38c2.33,2.45 3.64,6.83 7.24,7.4 2.36,-0.69 6.84,-0.66 7.32,-3.43 -2.09,-2.51 -5.77,-3.35 -8.88,-4.29 -2.53,-1.2 -4.11,-3.25 -5.68,0.33z m-7.06,1c-0.29,3.69 5.55,3.98 3.67,0.55 -0.27,-1.25 -3.83,-1.74 -3.67,-0.55z m23.66,14.69c0.27,2.45 3.18,3.93 0.47,6.15 -0.65,2.42 -5.54,2.87 -2.52,5.53 2.36,1.46 2.01,4.85 2.92,7.14 -0.72,2.69 -1.43,6.78 1.72,8.06 2.8,2.95 4.5,-1.93 6.19,-3.68 1.27,-1.69 3.85,-4.1 5.94,-2.59 3.04,-0.81 6.3,-2.42 7.78,-5.22 -2.79,-1.31 -4.88,-3.19 -5.57,-6.29 -2.4,-5.33 -8.95,-6.26 -13.58,-8.98 -1.29,-0.52 -2.26,-1.62 -3.34,-0.11z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_hi" class="jqvmap-region"></path>
                                <path
                                    d="m107.84,436.56c-2.27,0.55 -4.87,0.32 -6.84,-0.34 -2.41,1.22 -5.63,4.03 -8.25,1.88 -3.1,0.93 -3.51,3.84 -5.22,5.97 -1.82,2.52 -4.21,3.65 -7.31,3.14 -2.5,-0.94 -5.49,-1.15 -7.5,0.98 2.03,4.34 6.39,8.13 5.82,13.23 -1.85,2.94 6.31,2.99 2.68,5.02 0.15,2.8 3.07,5.68 2.91,7.88 -2.35,2.21 -5.24,-0.38 -7.71,-1.06 -3.24,-0.64 -2.73,-3.35 -0.82,-5.22 -1.57,-1.51 -7.35,-1.81 -6.51,1.12 -2.01,0.04 -3.81,-1.66 -6.27,-0.77 -3.72,-0.44 -5.97,0.65 -2.94,4.05 3.68,1.45 1.06,4.72 1.17,7.57 0.76,2.63 3.66,4.89 6.67,4.17 3.2,-0.06 5.87,3.59 9.21,1.65 2.16,-1.3 5.33,-0.99 4.79,1.89 -2.53,2.07 -1.36,6.13 -2.78,8.75 -1.96,1.88 -4.53,1.59 -6.59,0.16 -1.52,1.37 -4.7,3.68 -6.28,2.22 0.72,-3.71 -4.77,-3.63 -5.51,-0.61 -1.21,3.97 -6.27,4.46 -8.31,7.63 -0.7,2.42 -1.55,6.7 1.74,6.3 1.26,1.11 -1.2,4.8 -2.77,5.52 1.62,2.19 2.65,4.59 2.72,7.34 1.71,1.55 6.35,1.98 7.5,-0.16 2.45,-0.95 1.79,4.1 2.08,5.97 2.47,2.95 -4.02,1.28 -1.61,4.56 -0.85,2.93 -1.76,5.02 2,2.72 2.76,-0.47 5.11,-0.69 5.66,2.09 2.59,-3.91 2.26,2.78 3.25,4.66 0.59,-0.75 1.3,-5.69 3.94,-3.06 -0.17,4.52 5.33,-0.45 5.78,-0.04 0.54,2.92 -1.63,4.24 -2.86,6.41 -1.51,2.24 -2.07,5.63 -4.21,7.17 -3.87,-0.42 -3.37,4.1 -5.5,5.02 -2.65,-0.72 -5.73,0.71 -8.44,1.41 -1.35,2.41 -3.61,4.2 -5.78,1.81 -2.56,0.05 -5.63,0.68 -7.63,2.33 -2.48,2.43 -6.32,3.11 -9.66,2.29 -2.78,-1.91 -7.11,3.41 -3.11,2.31 2.5,-1.91 4.66,0.64 7.25,0.63 2.21,-1.15 4.17,-2.75 6.84,-2.06 2.32,-3.35 5.1,-0.32 7.92,-1.16 2.31,-0.39 7.01,-3.91 5.26,0.66 0.09,-2.91 3.42,-2.73 5.54,-2.04 4.21,0.96 0.29,-3.16 2.08,-3.43 3.47,-2.05 7.52,-2.41 11.2,-3.72 5.48,-3.19 11.62,-5.7 16.21,-10.1 4.27,-2.97 -2.78,-3.48 -1.21,-6.32 1.68,-2.43 4.58,-3.81 7.47,-4.5 1.5,-3.07 3.53,-6.11 5.88,-8.52 2.49,-1.32 4.83,-3.39 7.83,-2.32 2.67,0.71 3.74,5.32 -0.52,3.66 -1.27,-1.88 -5.56,-0.09 -5.25,2.41 -0.21,2.44 -2.56,4.22 -3.06,6.66 4.79,0.85 0.24,3.54 -1.38,3.8 1.67,1.91 5.66,0.6 7.57,-1.14 1.25,-1.85 3.43,-3.8 5.41,-4.22 1.81,2.8 5.1,-1.16 5.74,2.72 0.71,2.78 6.02,-4.86 3.34,-3.1 -3.03,3.11 -3.78,2.86 -1.94,-1.24 1.43,-4.85 -1.76,6.17 -1.45,0.81 -0.81,-3.19 -0.93,-6.03 3.05,-6.4 2.7,-0.86 5.37,-0.87 5.79,2.52 0.42,3.48 3.8,2.84 5.95,4.76 2.41,2.2 4.76,1.95 7.8,1.78 4.34,-0.47 8.01,4.04 12.28,3.17 2.49,-0.42 5.1,-5.2 4.29,-0.23 -2.26,2.83 -0.02,4.12 2.5,5.41 3.13,1.35 5.87,3.14 7.94,5.85 1.31,3.02 6.05,0.28 6.18,2.43 -3.83,1.25 -1.23,3.54 0.21,5.47 1.81,1.95 0.33,5.72 3.64,5.82 1.14,1.28 3.49,7.44 4.01,5.38 -0.35,-2.32 -0.7,-7.86 1.61,-3.76 0.37,1.42 1.04,8.7 2.07,4.74 1.07,-4.88 3.18,0.18 2.22,2.93 3.33,1.69 -1.23,3.33 0.69,4.88 0.69,-3.24 1.31,-0.36 2.16,1.56 1.05,1 1.54,3.94 3.13,3.72 -1.68,-1.72 -2.94,-6.23 0.4,-3 2.42,2.79 4.05,2.12 2.74,-1.66 -2.65,-2.66 0.28,-4.96 2.58,-2.29 3.12,-0.05 2.84,5.21 5.28,4.53 3.31,-3.17 1.5,-7.87 0.69,-11.7 -3.3,-1.55 -7.04,-2.54 -10.22,-4.06 -1.5,-5.33 -6.29,-8.69 -8.4,-13.77 -0.44,-3.33 -4.71,-2.62 -5.75,-5.23 -2.32,-1.72 -2.7,-4.4 -4.56,-6.35 -1.65,-1.53 -5.22,0.95 -5.51,2.94 0.59,3.09 -3.23,3.04 -5.06,4.72 0.05,-4.27 -4.3,-6.15 -6.7,-9.1 -1.33,-1.99 -1.32,-5.36 -4.45,-2.34 -2.37,0.24 -6.38,-0.31 -5.34,-3.62 0.1,-27.7 0.2,-55.4 0.31,-83.09 -2.75,-1.88 -5.88,-4.17 -9.15,-4.4 -2.52,1.72 -5.07,1.09 -7.39,-0.62 -2.72,0.23 -5.12,-0.65 -7.7,-2.89 -3.08,-2.74 -8.58,0.17 -10.98,-3.65 1.13,-3.56 -3.22,-4.83 -5,-2.09 -2.09,0.26 -0.65,-4.31 -3.64,-4.93 -2.57,-2.85 -4.01,-1.28 -5.86,1.21z M36.38,480.63c-0.67,3.11 4.27,1.31 4.72,4.66 0.24,3.82 5.37,3.9 2.34,-0.08 -0.1,-3.22 -3.92,-1.83 -5.06,-4.43 -0.76,-2.02 -0.9,-1.86 -2,-0.16z m-17.16,23.16c2.57,4.06 1.45,1.37 0.13,-1.28 -0.36,0.01 0,1 -0.13,1.28z m21.84,14.81c1.27,1.79 4.99,5.58 6.22,2.03 2.26,-3.3 -3.27,-2.89 -5.23,-3.68 -1.83,-0.9 -0.88,0.54 -0.99,1.65z m91.72,18.78c0.06,3.21 2.81,-1.98 0,0z m-31.47,14.69c-3.2,2.91 -7.24,4.67 -10.56,7.38 0.22,2.75 0.99,7.64 4.67,5.15 2.5,-1.44 4.98,-2.9 7.45,-4.37 -1.84,-3.31 -0.81,-3.15 -4.55,-3.48 -4.15,0.09 1.06,-3.73 2.64,-1.62 3.74,-1.04 3.95,-2.36 1.5,-3.66 0.7,-1.08 -1,0.61 -1.16,0.59z M55.75,570.75c1.42,2.83 3.53,-1.99 0,0z m-35.78,0.34c0.53,2.46 -4.04,4.84 1.05,3.59 4.2,0.47 3.46,-4.35 0.01,-3.84 -0.35,0.08 -0.7,0.16 -1.06,0.24z m62.19,0.69c1.57,2.91 1.31,-2.03 0,0z M58.63,573.13c3.23,0.49 0.99,-3.05 0,0z m-49,0.09c-4.84,2.56 -0.44,1.81 2.29,0.58 2.89,0.16 5.05,-0.48 0.84,-1.46 -1.04,0.29 -2.08,0.58 -3.13,0.88z m7.25,1.38c1.28,0.21 -2.23,-0.59 0,0z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ak" class="jqvmap-region"></path>
                                <path
                                    d="m748.38,439.94c1.69,2.92 1.5,6.12 1.16,9.34 -4.12,0.54 -2.15,-4.69 -5.56,-3.99 -6.18,-0.07 -12.34,1.13 -18.54,1.19 -10.09,0.29 -20.37,2.14 -30.33,0.64 -2.57,-1.57 -2.84,-6.15 -6.5,-5.33 -9.12,-0.12 -18.18,1.79 -27.26,2.55 -5.82,0.63 -11.62,1.37 -17.43,2.12 -1.42,3.25 2.6,4.37 4.06,6.34 0.8,2.28 -1.56,8.42 2.19,7.1 4.11,-1.2 8.08,-2.93 12.48,-2.72 3.34,-0.82 6.63,-0.73 9.89,0.45 4.09,0.8 7.77,3.09 11.41,4.98 1.77,1.94 5.5,1.87 5.97,5 -0.14,3.27 4.32,-0.94 6.5,0.53 3.19,-0.8 5.24,-3.68 7.69,-5.5 4.86,1.69 0.62,-2.9 3.27,-3.97 3.13,-0.83 6.62,-1.39 9.35,0.79 3.04,0.57 5.43,2 6.57,4.99 3.68,0.02 2.88,4.13 5.48,5.3 2.96,0.49 2.98,4.52 6.3,4.3 2.91,0.36 5.45,1.15 5.84,4.45 2.05,2.11 3.92,4.26 3.09,7.41 0.18,3.68 0.12,7.33 -1.44,10.75 0.39,3.68 1.37,7.94 3.28,10.78 2.25,-3.46 0.17,-3.87 -1.74,-6.03 2.19,-1.76 4.86,-0.22 7.3,0.16 0.82,3.15 -2.16,5.6 -3.48,8.19 -3.3,2.21 1.65,4.09 2.73,6.3 3.11,3.34 4.35,7.94 7.53,11.26 0.78,2.29 2.51,7.47 4.63,3.09 2.54,-0.24 3.88,3.44 5.28,5.41 -0.02,2.26 1.93,7.04 3.59,6.44 2.88,-0.8 6.04,0.65 8.28,2.59 2.56,3.3 4.58,6.98 4.56,11.27 1.37,2.73 4.55,0.44 5.81,-1.14 3.74,0.45 7.26,-1.25 9.22,-4.47 -1.01,-2.36 -0.57,-4.83 -0.32,-7.17 -0.04,-2.18 4.33,-3.19 2.25,-6.51 -0.98,-6.33 -0.19,-12.96 -1.87,-19.25 -2.46,-6.93 -7.54,-12.74 -10.4,-19.56 -1.51,-2.41 -4.24,-3.92 -4.62,-7.04 -0.94,-2.28 -2.67,-4.95 -0.07,-6.71 -0.39,-3.56 -4.86,-5.42 -6.84,-8.41 -5.38,-5.57 -8.29,-12.94 -12.35,-19.44 -2.15,-5.53 -4.29,-11.07 -5.91,-16.78 -3.43,0.07 -7.3,-1.03 -10.46,-0.35l-0.34,0.37 -0.26,0.29z m52.91,109.22c-1.9,4.58 0.72,0.38 0.66,-1.91 -0.22,0.64 -0.44,1.27 -0.66,1.91z m-4.69,9.91c2.56,-1.97 3.68,-6.84 1.04,-1.68 -0.35,0.56 -0.69,1.12 -1.04,1.68z m-2.25,2.22c1.46,-1.22 2.04,-2.07 0.18,-0.18l-0.18,0.18z m-5.72,4.16c-5.23,3.69 4.03,-2.14 0.33,-0.19l-0.33,0.19z m-10.72,3.22c-3.41,3.16 5.71,-0.32 4.1,-0.81 -1.8,-0.56 -2.56,-0.71 -4.1,0.81z m-4.59,3.16c0.08,0.16 0.4,-0.3 0,0z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_fl" class="jqvmap-region"></path>
                                <path
                                    d="m862.56,94c-1.4,-0.41 -3.87,-0.72 -3.05,3 0.22,3.63 -0.73,7.84 2.23,10.59 0.33,2.78 0.08,5.36 -2.17,7.29 -0.19,2.83 -5.98,2.58 -3.35,5.32 1.16,7.35 -0.56,15.03 -0.62,22.51 1.2,1.95 0.98,4.39 0.76,6.75 -1.07,3.79 4.84,-0.05 6.89,0.06 3.93,-1.29 8.46,-1.74 12.04,-3.54 0.77,-3.1 4.37,-2.75 5.94,-4.96 2.59,-3.52 -3.01,-2.73 -2,-6.59 -3.83,0.01 -4.27,-2.46 -4.66,-5.62 -3.84,-11.98 -7.32,-24.45 -11.49,-36.1 -0.18,0.43 -0.35,0.85 -0.53,1.28z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_nh" class="jqvmap-region"></path>
                                <path
                                    d="M697.86,177.24L694.63,168.99L692.36,159.94L689.94,156.71L687.35,154.93L685.74,156.06L681.86,157.84L679.92,162.85L677.17,166.57L676.04,167.21L674.58,166.57C674.58,166.57 671.99,165.11 672.16,164.47C672.32,163.82 672.64,159.45 672.64,159.45L676.04,158.16L676.84,154.77L677.49,152.18L679.92,150.56L679.59,140.54L677.98,138.28L676.68,137.47L675.87,135.37L676.68,134.56L678.3,134.88L678.46,133.27L676.04,131L674.74,128.42L672.16,128.42L667.63,126.96L662.13,123.57L659.38,123.57L658.74,124.21L657.77,123.73L654.7,121.46L651.79,123.24L648.88,125.51L649.2,129.06L650.17,129.39L652.27,129.87L652.76,130.68L650.17,131.49L647.58,131.81L646.13,133.59L645.81,135.69L646.13,137.31L646.45,142.8L642.9,144.9L642.25,144.74L642.25,140.54L643.54,138.12L644.19,135.69L643.38,134.88L641.44,135.69L640.47,139.89L637.72,141.02L635.94,142.96L635.78,143.93L636.43,144.74L635.78,147.33L633.52,147.81L633.52,148.95L634.33,151.37L633.2,157.51L631.58,161.56L632.23,166.24L632.71,167.38L631.9,169.8L631.58,170.61L631.26,173.36L634.81,179.34L637.72,185.8L639.18,190.65L638.37,195.34L637.4,201.32L634.97,206.5L634.65,209.25L631.39,212.33L635.8,212.17L657.22,209.91L664.5,208.92L664.59,210.58L671.45,209.37L681.74,207.87L685.6,207.41L685.74,206.82L685.9,205.37L688,201.65L690,199.91L689.78,194.86L691.37,193.26L692.46,192.92L692.69,189.36L694.22,186.33L695.27,186.94L695.44,187.58L696.24,187.74L698.18,186.77L697.86,177.24z M581.62,82.06L583.45,80L585.62,79.2L590.99,75.31L593.28,74.74L593.74,75.2L588.59,80.34L585.28,82.29L583.22,83.2L581.62,82.06z M667.79,114.19L668.44,116.69L671.67,116.85L672.97,115.64C672.97,115.64 672.89,114.19 672.56,114.03C672.24,113.86 670.95,112.17 670.95,112.17L668.76,112.41L667.15,112.57L666.82,113.7L667.79,114.19z M567.49,111.21L568.21,110.63L570.96,109.82L574.51,107.56L574.51,106.59L575.16,105.94L581.14,104.97L583.57,103.03L587.93,100.93L588.09,99.64L590.03,96.73L591.81,95.92L593.1,94.14L595.37,91.88L599.73,89.46L604.42,88.97L605.55,90.1L605.23,91.07L601.51,92.04L600.06,95.11L597.79,95.92L597.31,98.35L594.88,101.58L594.56,104.17L595.37,104.65L596.34,103.52L599.89,100.61L601.19,101.9L603.45,101.9L606.68,102.87L608.14,104L609.59,107.08L612.34,109.82L616.22,109.66L617.68,108.69L619.29,109.99L620.91,110.47L622.2,109.66L623.33,109.66L624.95,108.69L628.99,105.14L632.39,104L639.02,103.68L643.54,101.74L646.13,100.45L647.58,100.61L647.58,106.27L648.07,106.59L650.98,107.4L652.92,106.91L659.06,105.3L660.19,104.17L661.65,104.65L661.65,111.6L664.88,114.67L666.17,115.32L667.47,116.29L666.17,116.61L665.37,116.29L661.65,115.81L659.55,116.45L657.28,116.29L654.05,117.75L652.27,117.75L646.45,116.45L641.28,116.61L639.34,119.2L632.39,119.85L629.96,120.66L628.83,123.73L627.54,124.86L627.05,124.7L625.6,123.08L621.07,125.51L620.42,125.51L619.29,123.89L618.48,124.05L616.54,128.42L615.57,132.46L612.39,139.46L611.22,138.42L609.85,137.39L607.9,127.1L604.36,125.73L602.31,123.45L590.19,120.7L587.33,119.67L579.1,117.5L571.21,116.36L567.49,111.21z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_mi" class="jqvmap-region"></path>
                                <path
                                    d="m833.16,106.59c0.19,6 4.65,11.21 3.72,17.28 -2.48,4.23 4.52,7.29 2.22,11.58 0.9,1.59 4.66,1.96 4.06,5.25 1.08,4.21 2.86,8.34 1.84,12.76 3.35,-0.51 7.06,-1.17 10.13,-1.97 -0.21,-2.13 1.51,-5.75 -0.53,-7.81 0.2,-7.64 1.01,-15.26 1.13,-22.91 -3.25,-2.41 0.32,-3.79 2.12,-5.18 1.96,-2.28 3.9,-5.07 2.6,-8.1 -2.62,-1.63 -1.02,-5.94 -2.39,-7.22 -8.3,2.1 -16.59,4.21 -24.89,6.31z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_vt" class="jqvmap-region"></path>
                                <path
                                    d="m889.88,40.22c-2.16,1.31 -3.69,2.74 -4.84,4.69 -2.29,0.6 -4.99,-1.37 -4.88,-3.94 -2.97,-0.82 -3.33,3.68 -4.37,5.71 -1.09,4.29 -3.27,8.39 -3.97,12.69 -0.06,3.04 1,6.63 -1.35,9.09 0.08,2.92 -0.75,6.18 2,8.16 -1.37,5.7 -6.23,10.36 -5.41,16.56 -4.27,-2.21 -1.74,2.47 -1.09,4.73 3.51,11.08 7.19,22.16 10.25,33.35 0.21,3.01 5.81,1.35 4.53,5.7 2.9,2 2.06,-3.92 2.66,-5.87 -1.01,-3.29 2.7,-4.63 0.66,-7.62 0.94,-1.05 2.92,-5.9 4.61,-3.46 2.03,1.03 5.28,-1.89 6.74,-3.19 -0.98,-4.02 4.21,-1.75 4.73,-5.32 -1.11,-2.61 0.74,-5.45 -0.57,-7.44 -2.42,-1.59 3.53,-4.63 3.31,-0.78 2.27,0.48 2.15,2.8 3.66,3.93 1.94,-2.82 -2.15,-3.81 0.35,-6.03 2.43,-0.81 3.1,-3.96 6,-3.31 -0.17,1.46 1.03,3.34 2.26,1.38 2.94,-2.9 5.24,-7.08 9.37,-8.34 1.17,-2.61 3.34,-5.74 0.71,-8.24 -0.55,-1.64 -3.68,-4.84 -4.15,-2.58 -0.75,2.6 -4.66,-0.65 -4.92,-2.22 0.1,-2.8 0.29,-7.17 -3.8,-5.81 -3.96,1.36 -3.64,-3.04 -4.69,-5.61C905.22,58.3 902.75,50.15 900.28,42c-2.86,-1.25 -5.71,-2.92 -8.81,-3.38 -0.53,0.53 -1.06,1.06 -1.59,1.59z m20.47,61c-2.81,1.7 1.87,5.16 1.13,1.22 1.48,-0.9 0.13,-2.4 -1.13,-1.22z m-7.81,7.81c3.16,6.67 2.63,-3.59 0,0z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_me" class="jqvmap-region"></path>
                                <path
                                    d="m871,164.28c1.15,4.66 2.29,9.31 3.44,13.97 2.56,-0.49 4.66,-2.29 5.84,-4.56 4.17,0.76 4,-2.64 1.51,-4.97 -1.79,-1.94 -3.16,-5.31 -5.74,-5.92 -1.68,0.49 -3.37,0.99 -5.05,1.48z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ri" class="jqvmap-region"></path>
                                <path
                                    d="m825.56,108.66c-2.7,1.12 -5.45,1.68 -8.33,1.43 -5.07,0.72 -10.17,2.73 -12.92,7.31 -2.84,3.43 -4.89,7.49 -7.18,11.2 -1.65,2.36 -5.82,3.73 -5.55,6.84 -0.17,3.56 5.77,0.73 4.43,4.38 -2.69,2.3 0.8,4.23 0.56,6.59 0.5,3.47 -4.26,1.99 -5.36,4 -1.62,2.71 -3.35,6.62 -7.22,6.05 -3.04,-0.43 -5.35,2.05 -7.98,2.63 -2.5,-0.75 -4.7,-2.05 -7.59,-1.31 -5.31,0.21 -10.62,1.98 -15.23,4.53 -0.29,1.77 0.61,6.25 3.17,6.14 1.55,2.48 2.09,4.96 -0.63,6.72 -1.51,1.76 -1.8,4.25 -4.16,5.3 -1.93,1.14 -2.68,3.51 -4.8,4.54 0.33,3.07 -0.22,7.29 4.08,5.12 22.14,-4.26 44.26,-8.68 66.23,-13.74 0.98,3.85 5.67,1.32 6.44,4 0.64,2.93 1.36,7.4 5.33,6.88 3.14,1.9 6.9,3.68 10.69,4.22 2.71,0.47 7.18,1.43 6.44,5.06 -0.33,1.97 -1.62,7.56 1.97,5.93 5.3,-1.65 10.96,-2.84 15.06,-6.85 3.23,-2.49 6.76,-4.64 9.35,-7.86 -2.99,-2.44 -4.65,0.46 -6.81,2.42 -2.91,1.56 -6.01,3.51 -9.16,4.32 -2.6,-0.63 -4.83,-0.86 -6.18,2.07 -1.03,2.04 -4.86,2.98 -3.98,-0.15 4.26,-1.87 -2.17,-3.97 -0.33,-6.21 1.19,-3.13 0.56,-6.87 0.42,-10.21 -1.43,-7.38 -3.69,-14.76 -2.54,-22.36 -0.08,-4.46 1.55,-8.97 -0.51,-13.21 -1.22,-2.56 -0.47,-6.83 -4.05,-7.34 -2.99,-0.66 0.75,-4.31 -1.57,-6.2 -1.7,-2.43 -3.17,-4.91 -1.54,-7.81 0.38,-5.77 -3.83,-10.57 -3.55,-16.35 -2.32,0.65 -4.65,1.29 -6.97,1.94z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ny" class="jqvmap-region"></path>
                                <path
                                    d="m798.88,181.63c-17.5,3.38 -34.87,7.42 -52.47,10.28 -0.61,-2 0.48,-8.42 -2.41,-4.31 -2.18,2.73 -5.48,3.74 -8.09,5.97 1.52,9.75 2.63,19.57 5.44,29.05 1.14,6.09 2.27,12.17 3.41,18.26 8.85,-1.42 17.79,-2.25 26.51,-4.41 16.39,-3.45 33.03,-6.46 49.33,-9.87 2.48,-3.07 8.03,-1.69 8.97,-6.19 0.64,-2.36 4.86,-3.99 4.33,-5.9 -2.3,-1.89 -5.94,-2.77 -6.39,-6.13 -3.14,1.09 -4.42,-3.94 -3.12,-5.32 3.86,-1.1 -0.49,-3.68 0.55,-5.96 2.52,-1.88 1.12,-5.15 2.81,-7.07 3.87,-2.7 -2.98,-1.1 -3.72,-3.99 -1.35,-2.18 -0.28,-7.24 -4.16,-5.92 -2.34,-1.13 -3.87,-3.75 -7.09,-1.7 -4.64,1.07 -9.28,2.15 -13.92,3.22z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_pa" class="jqvmap-region"></path>
                                <path
                                    d="m827.84,191.34c1.03,2.99 -1.82,4.8 -2.06,7.47 2.86,1.63 0.49,4.87 -0.92,5.73 -0.41,3.86 4.01,1.68 4.16,5.14 1.37,2.19 4.72,3.02 6.26,4.94 -0.15,2.61 -3.85,3.5 -4.69,6.06 -0.26,3.07 -4.09,3.19 -4.18,5.96 -0.99,2.38 -0.74,5.09 1.7,6.47 2.85,2.76 6.86,3.99 10.73,4.38 0.48,1.55 -1.84,7.18 1.1,3.59 1.5,-2.42 0.59,-5.95 3.11,-8.01 2.5,-4.08 5.03,-8.84 4.88,-13.61 -1.35,-4.07 0.8,-9.01 -1.81,-12.82 -1.1,1.32 -6.17,1.23 -4.13,-0.8 2.39,-1.39 3.37,-3.62 2.39,-6.31 0.21,-2.31 1.58,-5.42 -1.69,-6.19 -4.35,-1.15 -8.82,-2.13 -12.88,-4.26 -0.66,0.75 -1.31,1.5 -1.97,2.25z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_nj" class="jqvmap-region"></path>
                                <path
                                    d="m824.88,225.34c-3.72,0.25 -3.47,3.52 -1.91,6.13 3.35,6.89 3.86,14.58 6.03,21.81 3.45,0.11 6.81,-0.49 10.16,-1.25 -1.2,-2.17 -0.68,-6.38 -3.32,-6.38 -2.9,-1.2 -4.17,-3.69 -4.9,-6.58 -0.91,-3.11 -3.62,-4.96 -5.48,-7.35 -1.85,-1.82 0.94,-5.5 -0.26,-6.47l-0.33,0.09z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_de" class="jqvmap-region"></path>
                                <path
                                    d="m813.59,229.19c-17.31,3.18 -34.53,6.83 -51.78,10.28 0.74,3.02 1.31,6.08 1.78,9.16 2.14,-1.9 3.29,-5.35 6.59,-5.34 2.14,-1.85 2.67,-5.25 5.77,-3.55 3.46,0.18 5.43,-5.35 9.01,-3.85 2.63,1.63 5.66,2.79 7.34,5.59 4.19,0.11 3.68,3.73 5.74,4.96 2.73,1.11 5.02,1.18 6.38,-0.53 4.29,1.38 2.24,3.74 1.44,6.9 0.09,2.97 -3.7,4.92 -1.66,7.97 3.1,1.31 6.4,1.2 9.63,1.4 2.17,1.58 6.83,1.03 3.79,-2.1 0.41,-2.74 -3.08,-3.35 -3.32,-6.04 -1.7,-2.67 -1.42,-5.47 -0.36,-8.32 1.68,-2.42 -2.83,-3.82 -0.4,-5.41 1.25,-1.53 0.43,-4.16 2.98,-4.7 1.62,-3.02 5.1,-1.45 2.35,1.02 -2.54,2.98 -0.81,4.5 0.57,6.3 1.41,3.55 -0.68,5.07 -1.53,7.31 -0.22,-0.81 3.62,-1.01 3.22,1.79 -3.15,1.64 -1.45,6.12 1.09,7.31 2.98,0.99 5.58,-1.8 6.98,2.14 1.5,3.75 4.92,0.81 7.41,-0.02 2.74,-1.21 3.47,-4.93 2.78,-7.7 -1.13,-1.58 -4.82,0.92 -7.13,0.4 -3.86,1.26 -4.9,-1.25 -5.28,-4.64 -1.68,-5.97 -2.14,-12.33 -5.16,-17.9 -0.04,-4.32 -2.71,-4.2 -6.07,-2.91 -0.73,0.16 -1.45,0.31 -2.18,0.47z m10.94,32.59c1.32,0.99 0.59,4.97 2.06,4.63 -0.48,-1.31 -0.36,-4.99 -2.06,-4.63z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_md" class="jqvmap-region"></path>
                                <path
                                    d="m792.88,242.88c-0.16,1.46 0.24,5.89 -2.4,4.29 -2.58,-0.67 -6.42,-3.2 -8.23,-2.73 0.7,3.72 -1.46,6.77 -2.99,9.94 -3.05,1.14 -2.29,5.83 -5.84,5.58 -1.62,1.74 -1.47,5.31 -2.45,7.73 -3.09,1.14 -5.37,-0.48 -7.28,-1.75 0.11,6.5 -3.72,11.95 -5.91,17.84 -1.69,1.73 1.19,3.8 -0.74,5.77 -1.35,3.56 -3.79,2.72 -6.19,4.19 -2.72,1.1 -4.9,0.5 -5.4,4.61 -2.07,1.14 -4.83,2.63 -6.91,0.47 -2.38,1.51 -5.02,3.21 -7.81,1.6 -2.69,-0.01 -3.9,-6.55 -6.07,-2.94 -3.27,4.09 -7.89,7.48 -10.21,12.09 0.43,3.25 -4.46,3.32 -6.42,5.15 -4.27,1.95 3.62,-0.11 5.16,-0.07 5.56,-0.79 11.14,-1.37 16.76,-1.36 1.95,-2.65 4.98,-1.81 7.77,-1.65 7.86,-0.32 15.65,-2.12 23.48,-2.99 12.85,-1.4 25.44,-4.27 38.04,-7.05 11.65,-2.52 23.3,-5.03 34.96,-7.55 -1.64,-2.66 -2.75,-6.67 -6.42,-4.14 -1.99,2.03 -6.61,-1.82 -2.7,-2.48 2.65,-1.62 -1.75,-4.07 -1.8,-5.97 -2.73,-0.62 -2.88,-5.12 0.54,-3.6 -0.17,-1.37 -1.24,-3.62 -1.62,-5.68 1.47,-3.51 -0.84,-4.97 -3.72,-5.16 0.31,-3.42 -2.9,-2.93 -5.22,-3.97 -3.33,0.21 -7.06,-0.25 -9.91,-1.66 -1.22,-2.41 -0.91,-5.12 1.25,-6.88 1.39,-2.83 -0.28,-5.7 -3.3,-6.27 -2.65,-0.83 -6.97,-0.29 -5.73,-4.3 -0.83,-0.3 -2.05,-1.06 -2.69,-1.06z m39.16,21.59c0.44,4.71 -3.15,8.7 -2.62,13.48 -0.34,4.11 2.64,5.72 3.48,0.92 1.71,-3.04 -0.23,-6.47 0.8,-9.73 0.4,-2.53 3.66,-3.88 3.52,-6.73 -1.73,0.69 -3.46,1.38 -5.19,2.06z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_va" class="jqvmap-region"></path>
                                <path
                                    d="m739.75,223.25c-1.6,2.23 1.3,5.02 0.25,7.75 -0.18,4.04 -0.63,8.11 -0.84,12.13 -1.94,3.58 -4.43,7.35 -8.16,9.13 -3.15,-1.33 -3.92,3.25 -5.76,4.98 -1.56,2.28 2.64,4.93 -0.3,6.69 -2.57,3.58 -2.6,-4.8 -4.46,-0.71 -1.32,2.59 0.02,6.02 -1.35,8.33 -1.82,1.54 -0.53,5.19 -4.16,4.81 -2.23,0.13 -1.45,6.19 1,6.81 2.24,1.47 2.49,4.74 5.5,5.92 1.92,1.96 2.28,5.18 5.39,6.05 1.64,2.19 3.07,4.96 6.25,4.88 2.63,0.5 4.77,-3.86 7.22,-1.35 1.49,0.81 3.93,-0.57 4.58,-1.83 0.43,-4.57 3.42,-2.71 6.03,-4.39 2.39,-0.94 4.82,-0.98 5.62,-4.44 -1.26,-2.59 0.3,-5 1.56,-7.64 2.23,-4.81 4.72,-9.61 4.67,-15.05 2.65,-2.31 3.72,3.56 7.05,1.41 1.64,-1.77 1.12,-5.67 2.6,-7.59 3.47,0.39 2.97,-3.96 5.76,-5.21 2.29,-3.11 3.52,-6.8 3.06,-10.7 1.06,-1.29 5.1,1.62 7.23,2.15 3.3,3.35 4.34,-1.98 2.85,-4.05 -2,-2.28 -5.12,-3.7 -7.62,-4.75 -3.31,0.98 -5.44,5.47 -9.38,3.97 -1.86,-0.23 -2.38,3.98 -4.86,3.88 -2.89,0.71 -3.79,4.38 -6.03,6.22 -1.1,-0.06 -0.99,-4.82 -1.62,-6.64 -0.01,-3.93 -1.77,-5.3 -5.48,-3.82 -4.21,0.6 -8.41,1.23 -12.61,1.91 -1.17,-6.45 -2.29,-12.92 -3.44,-19.38l-0.35,0.35 -0.18,0.18z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_wv" class="jqvmap-region"></path>
                                <path
                                    d="m729.5,197.78c-4.85,2.06 -7.38,6.9 -11.47,9.97 -4.08,0.86 -8.09,1.75 -11.72,3.88 -3.41,1.61 -4.39,-4.09 -7.67,-2.63 -3.13,1.35 -5.49,-1.1 -8.11,-2.41 -8.6,1.15 -17.15,2.64 -25.66,4.38 1.45,17.83 4.12,35.53 5.87,53.33 -0.69,3.82 4.06,2.26 6.23,1.48 2.74,0.41 4.83,2.16 5.48,4.94 1.26,2.48 5.82,-0.87 6.96,2.54 2.19,1.53 4.46,-2.33 7.03,-0.58 2.52,0.04 5.62,1.51 6.84,-1.56 1.49,-0.55 5.37,-3.85 5.41,-0.71 0.38,2.53 3.82,3.57 5.77,4.7 3.53,0.63 2.32,-3.91 4.21,-5.51 -0.11,-2.74 0.21,-5.73 1.39,-8.13 2.53,-2.81 3.8,4.53 4.98,0.39 -2.02,-2.27 -0.99,-5.41 0.93,-7.41 1.07,-4.06 4.05,-2.41 6.5,-4.39 2.93,-3.16 6.59,-6.57 5.97,-11.27 0.44,-4.71 1.18,-9.75 -0.53,-14.23 1.47,-2.48 2.58,-4.29 0.96,-7.33 -2.04,-7.53 -2.56,-15.37 -3.93,-23.04 -1.81,1.2 -3.63,2.4 -5.44,3.59z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_oh" class="jqvmap-region"></path>
                                <path
                                    d="m658.66,210.31c-9.12,0.93 -18.35,1.98 -27.41,2.68 -2.6,0.39 -4.21,5.08 -6.89,2.98 -3.83,-2.84 -2.64,1.83 -2.41,4.45 1.1,14.81 2.73,29.61 3.44,44.42 -0.76,3.69 -1.39,7.89 1.36,10.91 0.1,2.99 1.4,6.28 -1.14,8.65 -1.83,2.73 -2.55,6.09 -5.02,8.42 0.09,2.08 -2.02,8.2 1.63,5.16 3.49,-0.6 7.25,-1.53 10.69,-1.34 2.36,4.08 2.67,-0.62 5.26,-1.29 2.03,-2.62 4.78,2.05 5.34,1.04 -1.26,-3.41 3.05,-3.77 5.1,-5.22 1.09,0.63 6.05,3.38 5.3,-0.64 -0.46,-2.47 2.02,-4.71 3.65,-6.34 3.11,-1.39 4.33,-3.9 4.16,-7.23 1.83,-1 4.93,-1.01 6.97,-2.47 4.23,-1.03 0.26,-3.48 1.22,-5.92 -0.83,-12.56 -2.8,-25.13 -4.08,-37.69 -0.85,-6.99 -1.44,-14.01 -2.14,-21.02 -1.68,0.16 -3.35,0.31 -5.03,0.47z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_in" class="jqvmap-region"></path>
                                <path
                                    d="m569.75,200.44c-0.29,2.58 4.2,1.83 3.73,5.07 2.07,2.09 5.71,4.21 4.38,7.77 -0.31,3.04 -2.61,5.44 -3.08,8.4 -2.38,2.71 -6.06,2.98 -9.31,3.94 -1.61,2.47 -1.05,4.91 1.28,6.47 0.63,3.25 -1.08,5.07 -2.74,7.38 1.41,3.63 -2.39,2.86 -3.56,5.02 1.08,3.12 -2.11,3.8 -2.53,6.64 0.19,3.95 1.33,8.21 3.28,11.58 3.68,3.96 7.38,7.9 12.21,10.47 -0.61,2.88 -0.64,6.7 3.43,5.71 2.05,0 6.18,0.38 6.26,2.68 -0.19,4.39 -3.6,8.24 -3.28,12.53 1.6,3.83 5.33,6.26 8.59,8.42 3.37,-0.29 5.36,1.27 5.9,4.6 1.01,2.64 3.84,4.73 1.73,7.67 0.55,1.74 2.58,7.7 4.31,4.05 1.21,-2.98 5.41,-4.78 8.07,-2.46 3.1,2.46 5.94,0.47 3.13,-2.8 -0.98,-3.39 2.61,-4.96 5.37,-5.33 1.01,-1.55 -1.6,-4.46 1.4,-5.97 1.8,-3.97 -0.56,-9.39 3.32,-12.49 1.43,-2.97 3.23,-5.97 4.4,-8.97 0.13,-3 -0.7,-5.7 -2.34,-8.16 -0.45,-4.59 1.31,-9.09 0.02,-13.65 -1.16,-15 -2.22,-30.05 -3.67,-45.01 -1.02,-3.1 -1.61,-6.46 -4.04,-8.77 -2.27,-1.83 -0.51,-5.93 -1.97,-7.32 -14.76,0.83 -29.52,1.67 -44.28,2.5z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_il" class="jqvmap-region"></path>
                                <path
                                    d="m865.78,165.41c-6.91,1.54 -13.81,3.08 -20.72,4.63 2.17,6.2 2.74,12.83 2.44,19.34 -2.62,4.3 2.61,2.38 3.97,-0.21 2.09,-1.89 4.19,-3.71 5.99,-5.88 2.06,1.35 4.78,-1.86 7.44,-1.46 2.98,-0.68 5.69,-2.24 8.56,-3.26 -1.15,-4.67 -2.29,-9.33 -3.44,-14 -1.42,0.28 -2.83,0.56 -4.25,0.84z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ct" class="jqvmap-region"></path>
                                <path
                                    d="m559.53,104.97c-4.06,2.75 -8.71,4.92 -13.53,5.84 -2.88,-1.08 -5.54,-1.12 -5.57,2.68 -0.48,3.34 0.51,7.03 -0.47,10.17 -2.02,3.26 -6.91,4.03 -7.36,8.38 -2.63,2.78 2.21,3.06 2.23,5.53 1.79,2.9 -2.13,4.74 -1.33,7.65 0.29,2.93 -0.4,6.49 1.14,8.93 1.33,3.48 5.88,0.21 6.64,3.93 1.56,2.26 5.47,1.03 6.19,4.78 2.15,5.1 9.7,4.85 11.21,10.39 0.68,3.38 0.35,7.34 1.94,10.32 3.26,1.05 1.94,4.34 0.25,6.21 -0.79,3.96 2.53,8.34 6.75,8.25 2.28,1.6 4.86,1.65 7.83,1.19 13.03,-0.77 26.07,-1.53 39.1,-2.3 -0.02,-4.45 -1.98,-8.61 -1.86,-13.13 -1.7,-2.04 -0.86,-4.17 -0.04,-6.39 0.32,-2.84 3.07,-4.93 1.51,-7.87 -1.05,-2.94 -0.88,-6.21 1.73,-8.27 -0.2,-2.83 -0.5,-5.03 -0.16,-7.93 -1.14,-4.2 2.64,-7.5 3.69,-11.36 0.92,-1.13 3.15,-8.34 0.73,-4.93 -2.65,3.81 -4.99,8.01 -8.18,11.29 -0.86,2.06 -3.21,4.55 -5.21,4.5 -2.57,-1.26 0.28,-4.49 0.9,-6.41 0.47,-2.94 3.2,-4.25 4.09,-6.85 -3.31,-1.29 -2.77,-5.03 -3.54,-7.92 0.02,-3.09 -1.23,-5.08 -4.29,-5.57 -2.14,-3.67 -7.04,-2.78 -10.59,-4.12 -7.13,-1.87 -14.21,-4.39 -21.67,-4.99 -2.48,-0.54 -2.84,-5.51 -5.51,-4.73 -1.71,-1.54 -3.85,-0.7 -5.82,0.13 -2.8,-1.32 0.68,-4.59 1.5,-6.38 2.18,-1.34 -1.53,-2.14 -2.31,-1z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_wi" class="jqvmap-region"></path>
                                <path
                                    d="m830.06,295.97c-18.3,3.8 -36.53,8 -54.86,11.65 -12.74,1.51 -25.38,4.07 -38.18,4.94 -3.32,-0.82 -1.17,3.72 -2.5,5.53 -2.62,1.34 -3.49,4.59 -5.03,6.38 -3.24,-1.36 -5.07,1.46 -6.34,3.97 -1.09,-0.57 -2.96,0.03 -3.41,-1.41 -2.02,1.96 -4.37,3.73 -4.31,6.81 -3.66,1.1 -6.31,3.82 -9.28,5.96 -2.64,0.94 -5.76,2.16 -7.4,4.35 0.73,4.06 -2.98,3.3 -5.1,5.29 -1.98,4.69 2.74,2.66 5.58,2.5 6.41,-1.19 13.32,-0.49 19.18,-3.73 5.04,-1.9 9.41,-5.9 15.06,-5.67 6.5,-0.64 13.15,-0.6 19.62,-0.69 2.99,0.53 3.36,4.79 5.58,5.01 5.37,-0.81 10.87,-1.67 16.25,-1.79 5.38,1.36 9.61,5.45 14.52,7.93 3.59,2.64 6.93,5.66 10.43,8.44 3.15,-0.86 6.32,-1.58 9.59,-1.72 1.06,-4.55 2.04,-9.29 5.39,-12.78 4.2,-4.27 9.23,-8.29 15.33,-9.29 2.91,1.95 3.69,-2.9 5.27,-4.53 2.72,-5 -2.44,3.91 -2.46,-1.22 -3.87,0.7 -5.43,-0.26 -3.29,-4 2.77,-4.25 -2.73,-2.51 -2.12,-6.02 -1.42,-3.76 2.84,2.19 5.06,0.81 2.81,0.12 5.1,-1.87 5.59,-4.6 0.45,-2.9 4.59,-2.7 3.28,-6.48 -4.02,-2.43 4.25,-0.66 0.4,-3.93 -3.52,-3.44 -5.24,-8.33 -7.23,-12.76 -1.54,0.35 -3.08,0.71 -4.63,1.06z m17.13,23.72c1.55,2.61 -4.64,4.26 -0.52,2.69 1.38,-1.92 0.21,-5.22 0.24,-7.62 -0.74,-2.05 0.37,4.57 0.28,4.94z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_nc" class="jqvmap-region"></path>
                                <path d="m803.44,248.16c2.67,3.43 3.85,-1.02 0.55,-0.75l-0.29,0.4 -0.25,0.35z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_dc" class="jqvmap-region"></path>
                                <path
                                    d="m877.59,144.41c-1.04,3.1 -4.01,3.5 -6.79,4.13 -8.62,2.32 -17.17,4.6 -25.96,6.12 -0.11,4.77 -1.17,9.59 -0.03,14.31 10.66,-2.6 21.54,-4.29 32,-7.44 3.57,2.81 6.01,6.73 8.28,10.59 2.13,-0.78 0.01,-5.15 3.77,-5.38 2.93,-3.28 1.83,4.78 3.17,2.62 2.13,-3.09 6.1,-3.9 9.41,-5.21 -0.11,-3.41 -2.21,-8.55 -6.38,-7.53 1.64,-0.1 4.89,0.87 4.91,3.82 0.85,2.24 -2.55,3.71 -4.35,4.24 -3.37,0.51 -4.99,-1.76 -6.32,-4.47 -1.38,-2.05 -3.58,-6.56 -6.3,-3.6 -1.89,-1.72 -3.13,-4.04 -1.33,-6.3 2.3,-2.34 1.23,-6.2 -1.28,-7.16 -0.93,0.41 -1.86,0.82 -2.79,1.24z M902.25,172.69c-1.6,2.76 3.05,-2.44 0.08,-0.32l-0.08,0.32z m-11.28,1.28c1.59,0.78 6.09,-2.26 1.78,-2.03 -0.59,0.68 -1.19,1.35 -1.78,2.03z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ma" class="jqvmap-region"></path>
                                <path
                                    d="m730.41,314.34c-8.87,-0.11 -17.76,1.5 -26.57,2.73c-10.24,2.86 -20.99,2.66 -31.48,4.02c-16.34,1.45 -32.65,3.29 -48.96,4.95c-4.57,-1.71 -0.43,5.74 -5.06,4.14c-6.97,0.06 -13.87,1.23 -20.84,0.71c-0.95,4.26 -1.37,9.04 -3.6,12.76c1.03276,2.6246 -1.94104,7.30425 -2.59092,9.90471c-2.52529,1.78965 -2.61104,1.92035 -0.46104,4.90035c3.07759,1.94598 -1.38459,5.12506 1.90081,3.86506c33.91,-3.26 65.53115,-6.30012 99.44115,-9.56012c-0.23,-2.54 0.72,-5.31 3.53,-5.69c3.11,-0.4 0.99,-5.41 4.88,-5.81c2.77,-2.02 6.49,-2.19 8.62,-5.18c1.76,-2.26 6.31,-1.64 5.78,-5.38c1.19,-1.77 3.1,-3.84 5.03,-4.85c1.04,-0.39 0.28,1.78 1.72,1.19c2.38,0.56 2.2,-4.36 5.22,-3.86c3.3,1.27 2.68,-2.92 4.96,-4.18c2.05,-0.94 3.81,-6.68 0.92,-6.59c-0.81,0.64 -1.63,1.27 -2.44,1.91l0,0.02z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_tn" class="jqvmap-region"></path>
                                <path
                                    d="m509.47,335.31c1.73,4.9 1.5,10.02 1.53,15.12c2.15,12.21 1.13,24.64 1.47,36.97c0.02,3.71 0.04,7.42 0.06,11.13c2.06,3.2 5.05,-1.45 7.69,1.47c1.53,1.76 -0.88,7.54 2.97,6.49c17.61,-0.36 35.23,-0.72 52.84,-1.08c1.97,-2.6 0.41,-5.9 -1.28,-8.22c3.3,-1.61 -1.59,-3.96 0.84,-6.53c0.75,-2.77 0.62,-6.34 3.78,-7.69c-1.88,-3.07 2.08,-5.24 3.19,-7.88c3.77,-0.38 1.58,-3.3 2.64,-5.42c1.12,-2.67 2.56,-5.28 4.85,-6.58c1.2,-4.12 0.21,-2.67 -1.53,-5.61c-2.76,-3.32 1.95,-3.50023 2.36,-6.84c0.17988,-0.90552 3.08012,-6.46012 1.22,-6.75c-2.65,0.85 -5.34,-0.18 -8.02,-0.33c-0.09,-3.38 4.4,-3.88 4.22,-7.3c0.58,-3.87 -3.58,-3.68 -6.34,-3.26c-24.17,0.77 -48.34,1.54 -72.5,2.31l0.01,0z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ar" class="jqvmap-region"></path>
                                <path
                                    d="m490.44,245.63c-2.39,-0.46 -0.19,4.05 0.07,5.6 2.45,3.32 4.51,7.86 8.55,9.22 2.81,-0.24 3.61,2.67 2.79,4.84 -3.22,1.64 -1.72,5.03 0.19,7.07 0.9,2.55 4.61,3.05 4.89,5.61 2.1,12.97 1.12,26.14 1.51,39.22 0,5.72 0.08,11.44 0.72,17.13 24.99,-0.94 49.98,-1.8 74.97,-2.51 3.02,-1.12 4.35,1.72 5.31,3.98 0.52,3.48 -2.86,4.46 -4.14,6.86 2.37,0.64 5.57,0.65 8.21,-0.08 1.46,-3.59 1.87,-7.45 2.38,-11.22 0.84,-2.83 5.27,-2.89 4.61,-6.03 1.37,-2.94 0.14,-4.6 -2.22,-4.28 -2.15,-1.81 -2.84,-5.03 -2.86,-7.6 1.45,-2.84 -2.08,-5.07 -2.44,-7.89 -0.66,-3.24 -5.34,-0.87 -6.89,-3.66 -2.64,-2.34 -6.24,-3.94 -6.91,-7.76 -0.94,-3.21 1.52,-6.47 2.17,-9.64 2.2,-3.53 -1.34,-4.7 -4.33,-4.5 -2.66,0.39 -5.34,-1.15 -4.81,-4.1 0.86,-4.07 -4.71,-4.05 -6.43,-6.93 -2.7,-3.4 -6.72,-6.05 -7.25,-10.67 -1.1,-3.16 -2.12,-6.86 -0.62,-10.06 -2.3,-1.34 -2.28,-5.77 -5.37,-4.89 -20.69,0.77 -41.38,1.53 -62.06,2.3z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_mo" class="jqvmap-region"></path>
                                <path
                                    d="m672.78,356c-0.74,7.06 4.28,12.69 5.29,19.4 1.36,6.57 3.44,12.96 5.03,19.44 0.94,4.88 2.17,9.95 5.53,13.75 -0.85,3.5 3.37,3.17 2.59,6.44 -1.89,4.45 -3.57,9.65 -0.84,14.13 0.05,2.63 0.94,5.4 -0.38,7.88 2.95,0.94 1.45,4.01 3.07,6.01 1.35,2.67 3.68,4.75 6.83,4 12.35,-0.01 24.69,-1.31 37.03,-1.92 3.32,-0.58 6.67,-0.74 10.04,-0.59 -0.78,4.24 3.04,4.15 2.09,-0.09 -0.9,-2.14 -2.94,-6.23 0.59,-6.62 3.2,0.5 6.42,0.91 9.66,1.02 -0.84,-3.8 -0.8,-7.57 0.5,-11.27 0.2,-3.54 2.62,-6.73 2.21,-10.21 -0.72,-2.93 3.26,-5.26 2.85,-8.05 -2.19,1.37 -5.29,-0.71 -5.34,-3.19 -0.56,-3.12 -2.71,-5.83 -6.03,-6.06 -1.33,-3.9 -2.62,-8.17 -4.99,-11.43 -3.12,-1.07 -6.13,-2.99 -7.17,-6.29 -2.06,-2.33 -5.23,-3.21 -6.66,-6.16 -2.08,-2.2 -5.24,-2.83 -7.66,-4.19 -0.76,-2.53 -3.21,-4.09 -3.94,-6.67 -1.36,-2.63 -2.97,-4.65 -6.15,-3.77 -2.33,-1.57 -7.15,-3.38 -5.31,-6.97 2.02,-2.01 3.76,-4.11 -0.8,-3.11 -12.68,1.51 -25.37,3.01 -38.05,4.52z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ga" class="jqvmap-region"></path>
                                <path
                                    d="m737.03,343.19c-4.26,0.4 -8.64,0.43 -12.24,3.07 -3.2,1.75 -6.48,3.19 -9.88,4.49 2.21,3.31 -4.28,2.74 -2.34,6.44 2.27,2.24 5.2,4.13 8.5,3.28 2.53,3.15 3.83,6.94 6.53,9.88 0.91,2.76 5.13,2.06 6.85,4.46 2.18,1.38 2.96,4.25 5.62,5.01 2.99,1.95 3.36,6.38 7.26,7.24 3.61,0.62 3.77,4.77 5.34,7.38 0.38,3.35 2.02,4.84 4.79,5.96 3.36,1.79 1.76,7.23 5.67,8.16 3.63,-1.38 5.8,-4.63 8.38,-7.34 -2.35,-3.93 0.29,-3.32 3.01,-4.44 1.95,-2.4 5.02,-3.3 6.25,-6.28 2.17,-2 3.86,-4.52 5.4,-6.9 2.81,-0.17 3.42,-3.58 4.92,-5.03 -0.28,-4.13 1.3,-7.89 3.12,-11.47 1.03,-2.11 7.03,-4.5 3.47,-6.34 -5.97,-5.35 -12.78,-9.5 -19.71,-13.47 -4.45,-2.68 -9.74,-0.07 -14.57,-0.06 -2.57,-0.23 -6.63,2.48 -7.32,-1.28 -1.66,-4.5 -6.93,-2.82 -10.63,-2.96 -2.8,0.07 -5.61,0.14 -8.41,0.21z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_sc" class="jqvmap-region"></path>
                                <path
                                    d="m675,267.5c-2.76,-0.77 -6,1.11 -3.38,3.78 1.52,3.15 -3.12,4.12 -5.19,5.27 -2.94,0.53 -4.71,1.29 -4.3,4.82 -1.15,2.66 -5.3,3.24 -6.32,6.32 -2.16,1.4 0.74,6.22 -2.84,5.92 -3.06,0.61 -4.36,-2.79 -7.09,0.11 -2.26,0.51 -1.1,6.98 -3.85,3.1 -2.27,-2.54 -5.57,0.14 -6.16,2.81 -1.91,1.07 -3.4,-3.73 -6.02,-1.91 -3.32,0.61 -7.48,0.47 -9.92,2.91 0.08,2.65 -3.39,3.78 -1.7,6.05 2.34,2.66 -2.23,2.68 -3.86,3.3 -3.57,1.35 -0.68,4.35 -0.76,6.72 0.33,3.45 -3.76,1.44 -5.49,0.72 -2.5,-2.29 -6.26,-0.38 -7.13,2.53 2.86,2.28 -0.04,4.76 0.41,7.66 -3.47,2.04 -3.19,2.73 0.94,2.35 5.84,0.01 11.64,-0.95 17.5,-0.76 -0.7,-3.74 0.98,-4.99 4.56,-4.19 24.33,-3.01 48.82,-4.7 73.16,-7.43 4.3,-0.7 8.2,-2.38 11.75,-4.88 3.3,-0.8 4.04,-2.71 5.12,-5.35 3.46,-4.09 7.13,-8.06 10.79,-12 -3.27,-1.24 -3.03,-5.51 -6.21,-6.95 -2.6,-1.25 -2.07,-4.66 -5.16,-5.36 -2.38,-2.64 0.8,-7.28 -3.02,-8.87 -3.02,-0.01 -2.37,-4.65 -4.57,-3.51 -2.95,0.61 -3.67,4.78 -7.02,3.29 -2.69,-0.23 -5.51,-1.19 -7.82,0.71 -3,0.83 -3.99,-3.61 -7.44,-2.06 -3.51,0.82 -2.17,-5.19 -5.65,-5.26C677.17,266.43 676.21,267.17 675,267.5z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ky" class="jqvmap-region"></path>
                                <path
                                    d="m628.53,359.63c-0.2,14.37 0.12,28.75 -0.54,43.12 -0.04,9.01 -0.88,18.1 -0.07,27.07 1.55,10 2.94,20.01 3.85,30.09 3.07,1.09 3.69,-1.92 4.4,-4.18 -0.3,-3.89 4.27,-3.02 4.89,-0.04 0.72,2.06 4.08,5.27 0.77,6.65 -0.15,0.92 6.17,-0.9 5.88,-2.89 -0.44,-3.01 0.64,-6.86 -2.87,-8.19 -2.29,-0.88 -3.03,-5.59 -0.32,-5.67 14.08,-1.86 28.21,-3.59 42.35,-4.8 2.7,1.07 6.76,-0.25 2.97,-2.5 -1.8,-2 0.95,-5.03 -0.27,-7.65 -0.31,-3.1 -2.63,-5.9 -1.31,-9.15 0.01,-2.92 2.49,-5.36 1.93,-8.3 -3.52,-0.45 -1.34,-5.11 -4.26,-6.7 -3.48,-5.82 -3.36,-13.04 -5.96,-19.21 -2.02,-8.09 -3.34,-16.41 -7.25,-23.88 -0.51,-2.39 -1.08,-4.85 -0.72,-7.31 -14.49,1.18 -28.98,2.35 -43.47,3.53z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_al" class="jqvmap-region"></path>
                                <path
                                    d="m521.09,407.28c0.1,7.53 -0.24,15.32 1.67,22.61 2.08,2.49 2.82,5.51 3.15,8.67 1.87,2.78 5.27,4.95 4.59,8.72 1.61,2.18 -0.21,5.69 0.08,8.38 0.42,2.64 -4.36,4.89 -2.01,7.12 1.07,2.26 -0.92,5.31 -0.53,7.95 0.38,3.22 -2.37,5.7 -1.55,8.93 5.18,-2.4 10.98,-0.86 16.47,-1.09 5.72,1.7 11.56,4.87 17.56,4.26 2.93,-2.25 5.94,0.36 8.98,0.93 1.08,-3.4 -4.22,-0.81 -5.8,-2.2 -1.91,-0.36 -2.89,-2.3 -1.17,-3.4 2.08,-1.1 4.08,-1.09 5.66,0.04 2.15,-1.39 5.6,-0.24 6.26,2.38 -0.33,3.62 3.42,1.7 5.28,3.15 3.83,1.5 -1.41,4.07 0.83,5.37 2.88,0.97 5.73,2.94 8.62,3.29 3.51,-0.05 2.81,-4.53 6.47,-4.17 1.83,-2.9 4.44,-0.25 4.39,2.31 1.53,1.64 4,-3.68 1.98,-3.66 0.22,-3.37 2.17,-3.21 4.31,-5.41 1.59,0.95 0.91,2.82 1.41,4.16 3.33,0.39 7.44,1.09 9.34,4.06 2.79,0.08 5.17,1.1 5.56,-2.56 -2.68,-0.27 -4.15,-3.88 -7.35,-3.19 -2.31,0.06 -6.3,-1.62 -6.15,-3.77 1.62,-3.62 2.23,-1.74 2.03,-4.38 2.88,1.09 5.69,-2.27 3.22,-4.47 0.46,-4.62 -3.73,-0.15 -3.34,2.19 -1.36,1.21 -6.35,-0.96 -4.6,-3.27 1.71,-1.84 4.2,-4.5 2.19,-6.95 -0.13,-3.26 -2.69,-5.21 -4.47,-7.38 0.52,-2.7 2.26,-7.35 -2.36,-5.46 -10.43,1.28 -20.97,0.69 -31.45,1.12 -1.61,-3.72 -0.02,-7.76 0.16,-11.59 2.66,-4.86 5.46,-9.65 8.25,-14.44 -2.04,-2.82 3.52,-4.45 -0.74,-6.48 -0.53,-2.15 -1.29,-4.65 -2.32,-6.83 -0.08,-3.1 0.9,-7.3 -3.62,-5.79 -17,0.28 -34,0.57 -51,0.85z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_la" class="jqvmap-region"></path>
                                <path
                                    d="m591.03,363.5c-1.45,1.74 -4.03,3.15 -4.63,6.03 -1.4,2.22 1.43,5.74 -2.69,6.07 -1.48,1.97 -4.77,4.42 -3.4,7.17 -1.36,1.83 -3.59,3.95 -3.48,7.01 -2.16,2.66 1.55,5.28 -0.27,7.12 -0.45,1.84 2.25,4.42 1.35,7.03 -1.92,2.71 -1.63,6.55 -0.61,9.53 1.6,2.4 0.78,5.54 3.73,6.94 -0.95,2.53 -1.41,3.75 -1.87,6.31 -2.55,4.96 -6.07,9.62 -7.89,14.84 0.01,2.98 -1.44,6.14 -0.14,8.97 11.4,-0.36 22.87,0.25 34.19,-1.5 2.75,2.21 -2.19,6.39 1.33,8.15 2.82,1.62 2.28,5.18 3.89,7.63 2.07,-1.86 2.51,-6.19 5.82,-4.07 3.21,-0.67 6.85,-3.02 9.89,-0.64 3.62,0.73 6.01,-0.27 4.42,-4.26 -0.81,-10.1 -2.99,-20.07 -3.84,-30.15 0.14,-21.99 1.48,-43.98 0.64,-65.97 -12.15,1.26 -24.29,2.52 -36.44,3.78z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ms" class="jqvmap-region"></path>
                                <path
                                    d="m476.25,181.16c-3.42,-0.05 -2.16,5.68 0.72,6.29 0.54,2.07 -0.75,5.06 -1.41,7.35 -2.13,2.82 -0.93,5.45 1.04,7.92 1.22,4.34 2.24,8.85 4.05,13.06 0.6,3.22 1.29,6.38 3.41,9 0.02,3.49 1.27,6.69 2.3,9.91 -0.04,3.54 0.03,7.05 2.08,10.09 22.2,-1.02 44.44,-1.75 66.66,-2.63 0.77,1.43 3.25,7.11 4.37,4.25 -0.96,-2.5 1.19,-4.52 3.57,-4.72 -0.88,-2.62 1.19,-4.59 2.5,-6.28 1.27,-2.92 -1.39,-4.02 -2.41,-6.31 0.69,-2.9 1.79,-5.3 5.13,-5.46 2.88,-0.83 6.57,-1.81 6.65,-5.41 1.76,-3.04 3.73,-8.01 -0.26,-10.18 -2.74,-1.06 -1.75,-5.27 -5.21,-5.14 -0.64,-1.97 -0.85,-4.76 -4.19,-4.21 -2.75,-0.8 -4.55,-3.47 -5.37,-6 -1.36,-2.89 2.01,-4.72 1.65,-7.28 -3.82,-0.4 -1.19,-6.5 -5.03,-5.47 -26.75,0.41 -53.5,0.81 -80.25,1.22z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ia" class="jqvmap-region"></path>
                                <path
                                    d="m497.03,53.84c-0.69,2.52 0.93,7.42 -1.31,8.34 -9.65,-0.01 -19.29,-0.02 -28.94,-0.03 1.16,2.87 2.18,5.76 0.97,8.81 0.05,5.74 -0.79,11.86 2.51,16.95 2.04,3.78 0.64,8.47 1.5,12.6 0.82,6.84 1.76,13.67 3.55,20.32 0.05,3.83 0.88,7.8 0.03,11.53 -1.57,1.74 -4.91,3.29 -2.22,5.78 1.89,1.83 5.05,2.94 4.58,6.1 0.28,11.9 0.25,23.83 0.42,35.75 26.72,-0.38 53.44,-0.75 80.16,-1.13 -0.15,-3.62 -0.46,-7.93 -4.36,-9.47 -3.02,-1.66 -6.24,-3.1 -7.63,-6.5 -0.72,-3.61 -5.32,-1.16 -6.05,-4.61 -1.56,-2.09 -5.29,-0.37 -6.57,-3.78 -1.66,-2.1 -0.52,-5.5 -1.1,-8.1 -1.34,-2.93 1.65,-4.99 1.47,-7.54 -0.2,-3.22 -5.36,-3.85 -2.24,-7.43 0.41,-4.47 5.39,-5.33 7.61,-8.59 0.24,-3.87 -0.73,-8.14 0.52,-11.77 1.76,-3.14 5.17,-5.1 8.28,-6.26 1.92,-2.08 3.66,-4.57 6.13,-5.81 2.54,-4.97 6.04,-9.99 11.81,-11.4 4.55,-1.98 9.12,-3.92 13.6,-6.04 0.73,-3.15 -3.7,-0.18 -5.06,0.03 -0.82,-3.87 -4.2,-3.09 -7.28,-2.87 -2.25,-0.87 -5.34,2.83 -6,-0.66 -1.13,-3.5 -4.51,0.72 -5.88,2.13 -2.33,1.63 -6.22,1.16 -8.06,-0.56 0.94,-3.05 -4.61,-0.39 -4.53,-3.96 -0.16,-2.3 -3.48,1.3 -5.77,-1.2 -3.04,-0.91 -5.5,-3.22 -8.29,-4.38 -2.49,0.4 -5.86,-2.38 -6.7,1.5 -1.17,0.79 -7.15,1.83 -5.93,-1.54 -2.99,0.03 -6.03,-0.05 -7.53,-1.75 -2.6,0.59 -5.72,-0.41 -5.9,-3.43 -0.88,-3.28 -1.44,-6.61 -1.88,-9.98 -1.23,-0.6 -2.54,-1.02 -3.91,-1.06z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_mn" class="jqvmap-region"></path>
                                <path
                                    d="m363.31,330.03c17.51,1.12 35.04,1.73 52.56,2.47 -1.37,13.62 -2.89,27.23 -2.83,40.93 -0.92,3.93 3.48,5.78 6.14,7.66 0.56,-5.56 2.96,1.46 4.25,-1.31 0.93,-1.5 5.57,1.68 3.39,4.42 1.59,0.66 4.76,0.51 6.73,1.82 2.79,-0.99 5.16,3.32 7.03,1.26 1.82,-1.93 5.59,-0.31 6.5,2.02 2.44,0.79 1.71,5.84 4.76,3.05 1.39,-1.65 6.25,-1.17 6.69,1.21 1.28,1.5 5.69,3.72 7.39,1.92 0.33,-2.75 3.38,-5.95 4.59,-1.83 3.59,0.38 6.96,2 10.46,3 2.28,-1.86 2.44,-4.68 6.53,-3.41 2.53,1.92 3.8,-1.41 6.31,-1.16 0.85,2.42 5.2,2.41 6.19,-0.5 3.2,-0.2 3.66,3.71 6.55,4.35 1.86,0.4 6.31,3.63 5.36,0.18 -0.32,-12.27 0.1,-24.59 -0.7,-36.82 -1.15,-6.03 -1.01,-12.18 -1.43,-18.25 -1.32,-5.29 -2.05,-10.73 -2.07,-16.18 -20.01,0.66 -40.04,-0.04 -60.06,-0.22 -27.85,-1.32 -55.73,-2.3 -83.53,-4.56 -0.27,3.31 -0.54,6.63 -0.81,9.94z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ok" class="jqvmap-region"></path>
                                <path
                                    d="m359.47,330.97c2.34,-0.11 -0.86,-1.81 0,0z m0.72,18.31c-1.64,20.84 -2.52,41.75 -4.68,62.55 -0.51,4.33 -0.99,8.66 -1.51,12.98 -17.84,-0.87 -35.67,-1.93 -53.42,-3.89 -4.16,-0.41 -8.32,-0.76 -12.48,-1.11 -0.67,3.74 2.27,3.68 4.04,6.12 2.26,1.83 1.13,6.03 4.65,6.5 3.52,0.48 2.9,4.6 5.45,6.34 3.38,3.15 5.5,7.91 10.27,9.06 1.91,1.27 4,3.22 4.53,5.46 0.69,3.96 4.53,7.02 3.47,11.33 -0.88,5.15 2.22,9.63 5.93,12.88 2.18,2.95 5.14,4.76 8.63,5.78 1.88,1.95 3.01,3.88 5.72,4.88 2.59,0.18 5.38,4.34 7.35,1.18 2.59,-3.14 5.48,-6.41 6.05,-10.55 1.26,-2.82 3.58,-4.32 6.5,-5.06 2.72,-1.59 5.32,-2.13 7.47,0.62 4.91,0.57 10.2,0.53 14.79,2.22 2.83,1.43 2.56,4.53 5.17,6.33 1.73,2.05 4.83,3.37 5.81,5.82 1.37,2.07 2.66,4.26 2.69,7.03 1.62,4.34 4.17,8.51 5.31,12.94 -0.24,2.77 4.65,2.49 4.95,5.51 2.24,4.08 4.37,9.17 9.21,10.49 3.28,2 0.03,5.04 0.91,7.5 3.28,0.87 -0.01,4.68 0.94,6.67 2.53,1.36 4.37,3.2 4.22,6.44 0.39,3.34 2.13,6.83 5.69,7.54 3.01,1.93 6.69,2.13 9.87,3.4 2.28,1.79 5.15,4.09 8.16,2.83 3.46,0.46 6.77,1.29 9.37,3.75 1.43,2.54 6.51,-0.91 4.31,-2.89 -2.04,-3.39 -1.3,-7.79 -2.83,-11.46 -0.63,-3.07 -2.39,-5.95 -0.99,-9.1 1.17,-4.9 2.87,-9.76 4.04,-14.71 -3.37,-1.01 -2.07,-5.47 1.21,-4.71 3.99,0.42 3.65,-6.43 7.81,-6.05 5.25,-1.56 9.07,-6 14.16,-8.05 6.91,-2.81 13.62,-6.46 18.72,-12.05 2.58,-2.98 7.09,-3.95 8.69,-7.75 5,-2.22 9.8,-4.93 15.22,-6 -0.97,-2.64 0.52,-4.86 1.32,-7.22 0.39,-2.99 0.19,-6.07 1.18,-8.94 -3.15,-2.27 0.38,-4.91 1.38,-7.41 -0.2,-2.8 1.42,-6.25 0.09,-8.66 0.3,-2.93 -1.49,-5.14 -3.35,-7.29 -2.46,-2.64 -1.11,-6.91 -3.87,-9.52 -2.53,-4.57 -1.59,-10.19 -2.25,-15.22 0.02,-5 0.19,-10 -0.5,-14.97 -2.63,-2.31 -5.52,2.33 -7.52,-1.37 -3.1,-2.07 -7.66,-2.1 -9.73,-5.68 -2.31,-2.48 -3.82,2.84 -7.18,0.96 -1.91,-2.73 -3.59,0.03 -5.98,0.18 -2.27,-1.15 -6.07,-1.48 -6.09,1.76 -2.76,2.37 -5.95,-0.93 -8.94,-1.28 -3,1.38 -5.23,-3.83 -6.3,-1.87 -0.15,2.66 -2.52,5.1 -5.13,3.34 -3.23,-0.15 -4.91,-2.49 -6.57,-3.89 -2.95,-1.74 -4.3,2.32 -6.94,0.88 -1.48,-1.39 -1.87,-3.6 -3.92,-5.65 -3.06,-2.83 -5.03,3.17 -7.13,0.23 -2.05,-2.11 -5.57,-0.83 -7.94,-2.69 -3.56,0.59 -5.54,-0.24 -4.13,-4.11 -1.89,-1.85 -2.28,1.21 -4.77,-0.14 -0.59,-0.41 -3.45,1.78 -5,-1.11 -1.9,-1.9 -5.13,-3.22 -4.18,-6.45 0.03,-10.58 0.25,-21.15 1.66,-31.65 0.3,-2.99 0.6,-5.98 0.89,-8.98 -17.65,-0.63 -35.3,-1.27 -52.94,-2.22 -0.52,6.07 -1.04,12.15 -1.56,18.22z M466.53,518.63c-5.2,7.17 2.93,-3.27 0,0z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_tx" class="jqvmap-region" fill-opacity="1">
                                </path>
                                <path
                                    d="m242.72,428.78c4.82,0.63 9.65,1.25 14.47,1.88 0.43,-3.33 0.85,-6.67 1.28,-10 9.7,0.89 19.4,1.86 29.09,2.78 -0.9,-3.14 -1.39,-5.98 2.84,-4.5 18.29,1.28 36.48,3.79 54.81,4.49 2.45,-0.6 7.66,2.13 7.99,-1.01 3.06,-22.93 3.75,-46.09 5.59,-69.14 0.54,-7.79 1.39,-15.56 2.02,-23.34 3.21,0.65 1.17,-4.81 2.07,-6.86 1.79,-4.38 -2.87,-3.37 -5.73,-3.85 -32.35,-3.3 -64.71,-6.59 -97.06,-9.89 -5.79,39.81 -11.58,79.63 -17.38,119.44z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_nm" class="jqvmap-region"></path>
                                <path
                                    d="m380.53,320.34c25.06,1.17 50.11,2.71 75.19,3.35 17.22,0.07 34.44,0.63 51.66,0.18 -0.25,-12.69 0.23,-25.42 -0.47,-38.08 -0.61,-2.83 -0.17,-6.27 -1.38,-8.74 -3.04,-2.03 -6.02,-5.19 -6.68,-8.77 -0.43,-2.51 4.3,-4.59 1.29,-6.64 -3.02,0.54 -4.05,-3.34 -7.17,-2.43 -36.21,-0.82 -72.43,-1.33 -108.63,-2.5 -1.27,21.21 -2.54,42.42 -3.81,63.63z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ks" class="jqvmap-region" fill-opacity="1">
                                </path>
                                <path
                                    d="m353.38,230.59c10.76,0.96 21.27,2.72 32.03,3.66 -0.37,7.11 -0.71,14.23 -1.06,21.34 36.49,1.29 73,1.84 109.5,2.56 -0.31,-1.17 -3.13,-4.05 -4.03,-6.15 -1.99,-2.11 -0.36,-5.13 -2.45,-7.34 -2.42,-3.19 -1.66,-7.14 -2.2,-10.79 -1.66,-2.86 -1.45,-6.25 -2.29,-9.26 -2.94,-2.85 -2.34,-7.01 -3.95,-10.49 -1.13,-3.1 -2.18,-6.19 -2.62,-9.47 -3.51,1.32 -2.89,-3.07 -4.85,-4.29 -2.4,-1.68 -5.57,-1.85 -7.72,-3.93 -3.79,0.07 -7.65,1.04 -11.13,1.94 -2.52,-2.2 -6.03,-3.13 -7.91,-6.06 -13.61,0.96 -27.23,-0.49 -40.83,-1.11 -15.5,-1.05 -31.02,-1.79 -46.51,-2.86 -1.67,14.08 -2.83,28.17 -4,42.25z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ne" class="jqvmap-region"></path>
                                <path
                                    d="m357.44,187.41c25.68,1.58 51.37,3.15 77.06,4.26 3.58,-0.01 7.34,-0.51 10.81,-0.23 1.8,2.9 5.24,3.85 7.69,6 3.55,-1.45 7.52,-1.89 11.25,-1.91 2.45,2.67 7.26,2.29 9.15,5.33 1.32,4.76 3.27,1.86 0.18,-1.15 -1.53,-2.17 1.46,-4.6 1.56,-6.99 1.2,-2.87 1.38,-5.28 -1.58,-6.75 -0.5,-2.04 -0.73,-6.65 2.41,-5.84 2.62,-0.28 0.39,-5.28 1.06,-7.5 -0.32,-9.7 0.19,-19.47 -0.64,-29.13 -0.24,-3.58 -6.26,-4.19 -5.42,-8.4 1.09,-1.22 5.81,-4.38 2.75,-5.4 -27.23,-0.89 -54.5,-1.01 -81.67,-3.15 -9.79,-0.62 -19.57,-1.24 -29.36,-1.86 -1.75,20.91 -3.5,41.81 -5.25,62.72z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_sd" class="jqvmap-region"></path>
                                <path
                                    d="m362.88,123.72c26.46,1.49 52.89,3.7 79.4,3.91 10.84,0.26 21.67,0.52 32.51,0.78 0.01,-5.53 -1.38,-10.82 -2.5,-16.17 -1.27,-7.42 -2.05,-14.89 -2.13,-22.42 -2.61,-4.16 -4.11,-9 -3.48,-13.94 -0.44,-3.25 0.67,-6.57 0.3,-9.7 -0.15,-4.01 -2.83,-4.61 -6.31,-4.12 -25.15,-0.47 -50.33,-1.05 -75.41,-3.06 -5.17,-0.49 -10.33,-0.98 -15.5,-1.47 -2.29,22.06 -4.58,44.13 -6.88,66.19z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_nd" class="jqvmap-region"></path>
                                <path
                                    d="m240.16,217.84c37.4,4.49 74.29,8.23 111.69,12.72 2.5,-29.2 5.5,-57.65 8,-86.84 -35.26,-4.45 -70.52,-8.9 -105.78,-13.34 -4.64,29.16 -9.27,58.31 -13.91,87.47z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_wy" class="jqvmap-region"></path>
                                <path
                                    d="m192.59,52.19c0.84,2.76 3.25,5.4 3.2,8.23 -1.5,2.79 -1,5.49 0.52,8.15 3.4,0.39 4.18,3.44 5.26,6.16 1.43,3.34 2.55,6.88 5.37,9.34 0.88,2.21 5.27,1.18 4.34,4.72 -2.23,6.21 -5.45,12.23 -7.06,18.56 0.02,3.34 3.4,5.25 5.73,2.22 1.61,-2.43 5.63,-3.04 4.69,0.97 -0.5,5.3 1.81,10.35 2.59,15.53 1.9,2 5.27,3.44 5.68,6.31 -0.71,1.91 -0.39,8.78 2.32,5.14 1.85,-1.89 4.93,-0.29 6.85,0.86 3.28,-1.63 7.26,-1.21 10.34,0.69 3.69,0.41 1.52,-5 5.95,-4.08 2.71,-0.42 2.01,6.69 3.21,4.1 0.56,-3.26 1.09,-6.54 1.68,-9.8 35.57,4.49 71.15,8.96 106.72,13.44 2.9,-28.44 5.79,-56.88 8.69,-85.31 -28.84,-2.29 -57.55,-5.91 -86.19,-9.99 -26.71,-4.12 -53.36,-8.71 -79.73,-14.68 -3.05,-0.61 -6.99,-2.59 -6.53,2.19 -1.21,5.75 -2.42,11.51 -3.62,17.26z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_mt" class="jqvmap-region"></path>
                                <path
                                    d="m260.17,308.53c39.89,4.09 79.51,8.26 119.39,11.91 1.61,-28.46 3.23,-56.92 4.84,-85.38 -37.47,-4.17 -74.94,-8.33 -112.41,-12.5 -4.03,28.98 -7.8,56.99 -11.83,85.97z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_co" class="jqvmap-region"></path>
                                <path
                                    d="m169.84,91.72c0.52,3.07 2.27,5.25 4.94,6.78 0.4,3.02 -0.61,5.46 -3.03,7.31 -2.3,2.7 -4.38,5.97 -6.09,8.83 0.39,2.93 -2.57,3.54 -4.23,4.8 -1.77,2.31 -4.28,4.3 -3.93,7.5 -0.64,2.43 4.69,0.57 4.09,4.34 -5.19,11.17 -6.78,23.51 -10.13,35.32 -0.79,3.16 -1.22,4.91 -2.01,8.08 56.92,12.84 62.26,13.45 93.58,19.41 2.75,-17.6 5.5,-35.21 8.25,-52.81 -2.66,-0.84 -0.58,-6.52 -4.23,-4.97 -1.24,1.7 -1.62,4.95 -5.17,3.47 -3.11,-1.99 -6.81,-1.34 -10.13,-0.56 -2.53,-1.76 -5.91,-2.01 -7.69,0.88 -1.75,-0.05 -3.29,-3.39 -2.79,-5.36 1.91,-3.98 -2.85,-5.89 -5.05,-8.27 -0.98,-5.88 -3.48,-11.64 -2.5,-17.69 -1.86,-0.01 -4.25,2.69 -6.47,3.63 -2.21,0.18 -4.52,-3.09 -4.1,-5.31 1.19,-5.37 4.07,-10.37 5.88,-15.6 1.95,-2.64 1.12,-5.57 -2.41,-5.62 -1.55,-3.37 -4.92,-5.66 -5.61,-9.53 -1.31,-2.63 -1.42,-6.47 -5.06,-6.76 -0.99,-1.85 -3.18,-4.47 -1.91,-6.73 2.09,-2.98 -0.34,-5.7 -1.53,-8.5 -2.13,-3.05 0.55,-6.68 0.67,-10.01 0.9,-4.35 1.8,-8.69 2.69,-13.04 -4.18,-0.78 -8.35,-1.56 -12.53,-2.34 -4.5,20.92 -9,41.83 -13.5,62.75z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_id" class="jqvmap-region"></path>
                                <path
                                    d="m176.34,297.78c27.57,3.92 55.15,7.83 82.72,11.75 4.04,-29.08 8.08,-58.17 12.13,-87.25 -10.83,-1.14 -21.65,-2.33 -32.47,-3.59 1.43,-7.93 2.82,-15.85 3.84,-23.84 -15.27,-2.85 -30.54,-5.71 -45.81,-8.56 -6.8,37.17 -13.6,74.33 -20.41,111.5z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ut" class="jqvmap-region"></path>
                                <path
                                    d="m173.19,314.66c-2.49,-0.06 -3.05,4.43 -6.38,2.94 -0.74,-2.87 -3.59,-2.82 -5.59,-4.22 -3.74,0.74 -2.37,4.58 -2.68,7.41 -0.52,5.04 -0.42,10.21 -0.89,15.22 -2.19,2.33 -2.44,5.78 -0.24,8.19 2.32,2.62 0.58,7.52 4.09,9.09 0.98,3.59 -2.89,4.83 -5.41,6.09 -3.29,2.46 -3.28,6.86 -3.88,10.47 -1.25,2.44 -4.81,2.39 -4.92,4.97 0.47,2.18 6.18,0.38 3.42,4.54 -0.65,2.75 -3.14,3.45 -5.62,3.78 -3.6,1.45 -2.69,4.7 0.77,5.44 14.69,7.84 28.52,17.13 43.01,25.32 5.79,3.19 11.27,7.21 17.27,9.88 11.71,2.83 23.75,3.45 35.68,4.87 5.71,-39.38 11.42,-78.75 17.13,-118.13 -27.58,-3.93 -55.17,-7.85 -82.75,-11.78 -1,5.31 -2,10.63 -3,15.94z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_az" class="jqvmap-region"></path>
                                <path
                                    d="m84.84,232.41c22.96,34.61 45.92,69.23 68.88,103.84 3.66,2.65 3.19,-3.47 3.27,-5.71 0.37,-5.43 0.36,-11.24 1.08,-16.44 2.05,-2.03 4.26,-2 6.08,-0.39 2.62,-0.16 3.86,5.9 6.03,1.27 2.74,-0.82 2.66,-3.64 3.13,-6.41 7.5,-40.87 15,-81.75 22.51,-122.62 -30.72,-6.81 -61.44,-13.63 -92.16,-20.44 -6.27,22.3 -12.54,44.6 -18.81,66.91z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_nv" class="jqvmap-region"></path>
                                <path
                                    d="M67.16,62.81C64.24,70.42 62.73,78.57 58.5,85.63c-2.86,8.53 -5.96,16.93 -10.17,24.89 -3.06,6.61 -8,12.31 -11.32,18.7 -1.03,6.5 -0.64,13.05 -0.36,19.6 37.23,8.7 74.46,16.69 111.69,25.39 3.45,-13.15 6.51,-25.75 10.19,-38.81 1.2,-2.48 3.15,-6.06 -1.1,-5.42 -2.58,-1.78 -0.23,-4.45 -0.38,-6.91 2.3,-2.82 4.36,-5.82 7.47,-7.75 1.75,-5.08 5.43,-9.19 9.03,-13.06 1.66,-3.48 -2.46,-3.92 -3.39,-6.47 -0.25,-3.79 -3.56,-4.26 -6.62,-4.99 -7.63,-2.2 -15.38,-4.2 -23.21,-5.54 -4.9,0.03 -9.79,0.06 -14.69,0.09 -0.95,-2.84 -4.67,1.86 -7.11,0.5 -2.61,0.82 -4.42,-2.63 -6.57,-1.28 -2.61,-0.06 -5.23,0.11 -7.15,-1.87 -3.09,-1.53 -6.33,-1.81 -9.5,-3.1 -1.87,3.03 -5.69,1.22 -8.53,1.31 -1.65,-1.64 -5.79,-3.02 -6.03,-4.81 1.1,-2.44 0.78,-5.93 0.53,-8.59 -0.42,-3.92 -4.72,-2.63 -6.25,-4.49C74.59,58.67 69.45,62.45 67.16,62.81z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_or" class="jqvmap-region"></path>
                                <path
                                    d="m101.38,8.72c0.05,2.75 2.93,5.39 3.25,8.16 -1.92,2.33 -1.78,5.19 -1.32,7.71 -1.81,2.64 1.63,4.82 0.67,7.42 -3.6,1.52 -2.43,-3.7 -4.86,-4.99 -3.34,-2.24 1.47,-3.87 1.17,-5.42 -2.5,-1.11 -2.24,3.88 -3.69,4.17C92.33,26.39 88.86,23.04 84.76,22.57 79.82,20.66 75.28,17.69 72.25,13.25c-3.13,-0.98 -1.96,4.97 -3.25,6.95 -0.63,2.8 2.59,5.06 1.41,8.21 0.52,3.86 -1.29,7.55 0.18,11.29 -1.06,2.88 4.75,5.54 2.94,6.39 -3.45,-1.05 -6.2,3.2 -2.25,4.34 1.57,0.97 -0.61,6.32 -3.3,5.43 -1.83,2.15 1.28,6.86 4.14,4.17 3.77,-1.55 2.75,3.51 5.83,3.13 2.81,-0.24 4.26,3.31 4.54,5.61 0.04,2.48 -0.15,6.02 -0.26,7.78 2.63,1.76 5.01,4.26 8.46,3.62 3.2,0.66 4.7,-3.26 7.97,-0.5 3.01,0.48 6.37,1.55 8.79,3.66 3.03,0.92 6.02,-1.78 8.19,1.05 3.44,1.3 6.67,0.03 9.84,-1.4 0.99,1.78 4.42,1.32 7,1.3 5.35,-0.19 10.68,-0.16 15.82,1.55 6.99,1.44 13.78,3.45 20.65,5.4 4.47,-20.85 8.94,-41.71 13.41,-62.56 -19.81,-3.93 -39.37,-9.21 -58.73,-14.66 -7.27,-1.53 -14.4,-3.52 -21.46,-5.87L101.75,8.45 101.38,8.72z M95.5,15.16C94.05,13.72 92.15,14.26 94.72,17.63 94.39,13.84 99.19,18.11 98.98,14.18 98.24,12.75 96.05,14.08 95.5,15.16z m2.31,1.91c-3.13,3.04 1.36,2.18 0.16,-0.25l-0.16,0.25z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_wa" class="jqvmap-region"></path>
                                <path
                                    d="m35.06,153.94c-0.1,4.04 0.4,8.21 -1.99,11.75 -1.86,3.68 -2.55,8.24 -6.48,10.38 -1.19,2.11 -3.49,3.38 -3.59,6.45 -1.94,3.49 2.49,5.65 2.91,8.98 1.54,3.39 2.34,6.94 1.63,10.65 0,2.92 -2.79,5.01 -2.24,8.14 0.05,2.97 -2.24,5.87 0.04,8.54 2.58,5 6.38,9.93 6.71,15.69 -0.54,2.77 -0.99,5.37 1.81,7.17 1.6,1.95 4.49,3.66 2.79,6.46 -1.73,3.87 -1.14,8.04 -1.09,12.16 1.68,2.67 2.83,6.76 6.66,6.53 1.48,2.33 0.97,4.84 -0.22,7.13 -2.5,1.53 -4.36,2.73 -3.66,6.08 0.27,3.49 4.27,5.34 4.36,9.01 1.46,6.2 4.13,11.92 7.59,17.25 0.71,2.57 2.16,4.34 2.9,6.41 -0.24,3.33 -1.93,6.49 -2.41,9.87 -1.66,2.61 1.19,5.52 3.99,5.12 4.03,0.15 7.27,3.31 11.01,4.04 3,-0.55 4.74,2.9 6.07,5.11 1.54,2.71 2.37,6 5.76,6.88 2.51,1.14 6.19,0.05 7.17,3.45 2.41,2.72 -2.39,5.05 1.41,5.17 2.73,1.87 5.56,-1.74 7.56,-0.74 2.13,2.06 4.05,4.2 4.93,7.05 4.3,4.9 1.44,11.77 2.79,17.52 14.73,1.94 29.44,4.72 44.27,5.38 2.78,1.19 6.19,-4.43 2.84,-4.65 -3.13,0.64 -2.83,-4.02 -1.36,-4.66 3.15,-0.88 4.92,-3.83 4.65,-7.04 0.47,-3.98 3.27,-7.43 7.22,-8.4 3.43,-2.04 -0.33,-3.58 -0.79,-5.79 -0.23,-3.65 -1.95,-6.81 -3.62,-9.89 2.02,-3.66 -2.22,-3.32 -3.16,-6.24 -22.6,-34.1 -45.2,-68.19 -67.81,-102.29 6.27,-22.44 12.54,-44.88 18.81,-67.31 -22.04,-5.16 -44.08,-10.31 -66.13,-15.47 -0.45,1.38 -0.9,2.75 -1.34,4.13z m24.13,184.72c-0.27,3.05 7.99,3.06 4.7,2.07 -1.63,-0.35 -3.17,-2.46 -4.7,-2.07z m-5.16,0.38c0.33,3.71 5.81,0.51 1.31,-0.04 -0.44,0.01 -0.88,0.02 -1.31,0.04z M79.69,357.5c-0.2,1.58 4.42,6 3.16,2.37C82.22,358.91 80.8,357.6 79.69,357.5z M77.75,369.13c-0.14,1.55 3.2,3.89 1.32,1.26C78.6,369.72 77.39,366.55 77.75,369.13z"
                                    stroke="rgb(88, 115, 254)" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-opacity="0.25" fill="rgb(88, 115, 254)"
                                    original="rgb(88, 115, 254)" id="jqvmap1_ca" class="jqvmap-region"></path>
                            </g>
                        </svg>
                        <div class="jqvmap-zoomin">+</div>
                        <div class="jqvmap-zoomout">−</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New Orders</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Product</th>
                                    <th>quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>Lew Shawon</td>
                                    <td><span>Dell-985</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-success">Done</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>Lew Shawon</td>
                                    <td><span>Asus-565</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>lew Shawon</td>
                                    <td><span>Dell-985</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-success">Done</span></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>Lew Shawon</td>
                                    <td><span>Asus-565</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>lew Shawon</td>
                                    <td><span>Dell-985</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-success">Done</span></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>Lew Shawon</td>
                                    <td><span>Asus-565</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="row">
        {{-- <img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" --}}
        {{-- alt=""> --}}

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-intro-title">Calendar</h4>

                    <div class="">
                        <div id="external-events" class="my-3">
                            <p>Drag and drop your event or click in the calendar</p>
                            <div class="external-event" data-class="bg-primary"><i class="fa fa-move"></i>New Theme
                                Release
                            </div>
                            <div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>My Event
                            </div>
                            <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Meet manager
                            </div>
                            <div class="external-event" data-class="bg-dark"><i class="fa fa-move"></i>Create New theme
                            </div>
                        </div>
                        <!-- checkbox -->
                        <div class="checkbox checkbox-event pt-3 pb-5">
                            <input id="drop-remove" class="styled-checkbox" type="checkbox">
                            <label class="ml-2 mb-0" for="drop-remove">Remove After Drop</label>
                        </div>
                        <a href="javascript:void()" data-toggle="modal" data-target="#add-category"
                            class="btn btn-primary btn-event w-100">
                            <span class="align-middle"><i class="ti-plus"></i></span> Create New
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div id="calendar" class="app-fullcalendar"></div>
                </div>
            </div>
        </div>
        <!-- BEGIN MODAL -->
        <div class="modal fade none-border" id="event-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Add New Event</strong></h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                            event</button>

                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                            data-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Add Category -->
        <div class="modal fade none-border" id="add-category">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Add a category</strong></h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text"
                                        name="category-name">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Choose Category Color</label>
                                    <select class="form-control form-white" data-placeholder="Choose a color..."
                                        name="category-color">
                                        <option value="success">Success</option>
                                        <option value="danger">Danger</option>
                                        <option value="info">Info</option>
                                        <option value="pink">Pink</option>
                                        <option value="primary">Primary</option>
                                        <option value="warning">Warning</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                            data-dismiss="modal">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Single select boxes</h4>
                        <p>Select2 can take a regular select box like this...</p>
                    </div>

                    <select id="single-select" data-select2-id="single-select" tabindex="-1"
                        class="select2-hidden-accessible" aria-hidden="true">
                        <option value="AL" data-select2-id="2">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="1" style="width: 80px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-single-select-container"><span
                                    class="select2-selection__rendered" id="select2-single-select-container"
                                    role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Multi-select boxes</h4>
                        <p>Select2 also supports multi-value select boxes. The select below is declared with
                            the multiple <mark class="text-primary">attribute</mark>.</p>
                    </div>
                    <select class="multi-select select2-hidden-accessible" name="states[]" multiple=""
                        data-select2-id="3" tabindex="-1" aria-hidden="true">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="UI">dlf</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="4" style="width: 75.0125px;"><span class="selection"><span
                                class="select2-selection select2-selection--multiple" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                <ul class="select2-selection__rendered">
                                    <li class="select2-search select2-search--inline"><input
                                            class="select2-search__field" type="search" tabindex="0"
                                            autocomplete="off" autocorrect="off" autocapitalize="none"
                                            spellcheck="false" role="textbox" aria-autocomplete="list"
                                            placeholder="" style="width: 0.75em;"></li>
                                </ul>
                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Dropdown option groups</h4>
                        <p>In HTML, <code>&lt;option&gt;</code> elements can be grouped by wrapping them
                            with in <br> an <code>&lt;optgroup&gt;</code> element: </p>
                    </div>

                    <select class="dropdown-groups select2-hidden-accessible" data-select2-id="5" tabindex="-1"
                        aria-hidden="true">
                        <optgroup label="Group Name">
                            <option data-select2-id="7">Nested option 1</option>
                            <option>Nested option 2</option>
                            <option>Nested option 3</option>
                        </optgroup>
                        <optgroup label="Another Group Name">
                            <option>Nested option 1</option>
                            <option>Nested option 2</option>
                            <option>Nested option 3</option>
                        </optgroup>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="6" style="width: 134.4px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-5p1m-container"><span class="select2-selection__rendered"
                                    id="select2-5p1m-container" role="textbox" aria-readonly="true"
                                    title="Nested option 1">Nested
                                    option 1</span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Disabling options</h4>
                        <p>Select2 will correctly handle disabled options when <code>disabled</code>
                            attribute is set) and from remote srouces where the object has <code>disabled:
                                true</code> set.</p>
                    </div>
                    <select class="disabling-options select2-hidden-accessible" data-select2-id="8" tabindex="-1"
                        aria-hidden="true">
                        <option value="one" data-select2-id="10">First</option>
                        <option value="two" disabled="disabled">Second (disabled)</option>
                        <option value="three">Third</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="9" style="width: 134.4px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-3vas-container"><span class="select2-selection__rendered"
                                    id="select2-3vas-container" role="textbox" aria-readonly="true"
                                    title="First">First</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Disabling a Select2 control</h4>
                        <p>Select2 will respond to the <code>disabled</code> attribute on
                            <code>&lt;select&gt;</code> elements. You can also initialize Select2 with
                            <code>disabled: true</code> to get the same effect.
                        </p>
                    </div>

                    <div class="mb-3">
                        <select class="js-example-disabled select2-hidden-accessible" data-select2-id="11"
                            tabindex="-1" aria-hidden="true">
                            <option value="AL" data-select2-id="13">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="12" style="width: 80px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-6vwk-container"><span class="select2-selection__rendered"
                                        id="select2-6vwk-container" role="textbox" aria-readonly="true"
                                        title="Alabama">Alabama</span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="mb-3">
                        <select class="js-example-disabled-multi select2-hidden-accessible" name="states[]"
                            multiple="" data-select2-id="14" tabindex="-1" aria-hidden="true">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="15" style="width: 75.0125px;"><span class="selection"><span
                                    class="select2-selection select2-selection--multiple" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                    <ul class="select2-selection__rendered">
                                        <li class="select2-search select2-search--inline"><input
                                                class="select2-search__field" type="search" tabindex="0"
                                                autocomplete="off" autocorrect="off" autocapitalize="none"
                                                spellcheck="false" role="textbox" aria-autocomplete="list"
                                                placeholder="" style="width: 0.75em;"></li>
                                    </ul>
                                </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>

                    <button class="btn btn-primary mr-2" id="js-programmatic-enable">Enable</button>
                    <button class="btn btn-primary" id="js-programmatic-disable">Disable</button>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Select2 With Labels</h4>
                        <p>You can, and should, use a <code>&lt;label&gt;</code> with Select2, just like any
                            other <code>&lt;select&gt;</code> element.</p>
                    </div>

                    <label class="mb-4 select2-label" for="id_label_single">
                        Click this to highlight the single select element <br>

                        <select class="select2-with-label-single js-states d-block select2-hidden-accessible"
                            id="id_label_single" data-select2-id="id_label_single" tabindex="-1"
                            aria-hidden="true">
                            <option value="AL" data-select2-id="17">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="16" style="width: 80px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-id_label_single-container"><span
                                        class="select2-selection__rendered" id="select2-id_label_single-container"
                                        role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span>
                    </label>

                    <label class="select2-label" for="id_label_multiple">
                        Click this to highlight the multiple select element <br>

                        <select class="select2-with-label-multiple js-states select2-hidden-accessible"
                            id="id_label_multiple" multiple="" data-select2-id="id_label_multiple" tabindex="-1"
                            aria-hidden="true">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="18" style="width: 75.0125px;"><span class="selection"><span
                                    class="select2-selection select2-selection--multiple" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                    <ul class="select2-selection__rendered">
                                        <li class="select2-search select2-search--inline"><input
                                                class="select2-search__field" type="search" tabindex="0"
                                                autocomplete="off" autocorrect="off" autocapitalize="none"
                                                spellcheck="false" role="textbox" aria-autocomplete="list"
                                                placeholder="" style="width: 0.75em;"></li>
                                    </ul>
                                </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">container-fluid Width</h4>
                        <p>The two Select2 boxes below are styled to <code>50%</code> and <code>75%</code>
                            width respectively to support responsive design:</p>
                    </div>

                    <div class="mb-3">
                        <select class="select2-width-50 select2-hidden-accessible" style="width: 50%"
                            data-select2-id="19" tabindex="-1" aria-hidden="true">
                            <option value="AL" data-select2-id="21">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="20" style="width: 50%;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-cys9-container"><span class="select2-selection__rendered"
                                        id="select2-cys9-container" role="textbox" aria-readonly="true"
                                        title="Alabama">Alabama</span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="mb-3">
                        <select class="select2-width-75 select2-hidden-accessible" multiple="" style="width: 75%"
                            data-select2-id="22" tabindex="-1" aria-hidden="true">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="23" style="width: 75%;"><span class="selection"><span
                                    class="select2-selection select2-selection--multiple" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                    <ul class="select2-selection__rendered">
                                        <li class="select2-search select2-search--inline"><input
                                                class="select2-search__field" type="search" tabindex="0"
                                                autocomplete="off" autocorrect="off" autocapitalize="none"
                                                spellcheck="false" role="textbox" aria-autocomplete="list"
                                                placeholder="" style="width: 0.75em;"></li>
                                    </ul>
                                </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Themes</h4>
                        <p>Select2 supports custom themes using the <code>theme</code> option so you can
                            style Select2 to match the rest of your application.</p>
                    </div>

                    <div class="mb-4">
                        <select class="js-example-theme-single select2-hidden-accessible" data-select2-id="24"
                            tabindex="-1" aria-hidden="true">
                            <option value="AL" data-select2-id="26">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select><span class="select2 select2-container select2-container--classic" dir="ltr"
                            data-select2-id="25" style="width: 80px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-e7w8-container"><span class="select2-selection__rendered"
                                        id="select2-e7w8-container" role="textbox" aria-readonly="true"
                                        title="Alabama">Alabama</span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>

                    <div class="">
                        <select class="js-example-theme-multiple select2-hidden-accessible" name="states[]"
                            multiple="" data-select2-id="27" tabindex="-1" aria-hidden="true">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                        </select><span class="select2 select2-container select2-container--classic" dir="ltr"
                            data-select2-id="28" style="width: 75.0125px;"><span class="selection"><span
                                    class="select2-selection select2-selection--multiple" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                    <ul class="select2-selection__rendered">
                                        <li class="select2-search select2-search--inline"><input
                                                class="select2-search__field" type="search" tabindex="0"
                                                autocomplete="off" autocorrect="off" autocapitalize="none"
                                                spellcheck="false" role="textbox" aria-autocomplete="list"
                                                placeholder="" style="width: 0.75em;"></li>
                                    </ul>
                                </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Ajax (remote data)</h4>
                        <p>Select2 comes with AJAX support built in, using jQuery's AJAX methods. In this
                            example, we can search for repositories using GitHub's API:</p>
                    </div>

                    <select class="js-data-example-ajax w-100 select2-hidden-accessible" data-select2-id="29"
                        tabindex="-1" aria-hidden="true">

                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="30" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-8pt2-container"><span class="select2-selection__rendered"
                                    id="select2-8pt2-container" role="textbox" aria-readonly="true"><span
                                        class="select2-selection__placeholder">Search for a
                                        repository</span></span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Loading array data</h4>
                        <p>You may use the <code>data</code> configuration option to load dropdown options
                            from a local array.</p>
                    </div>

                    <select class="js-example-data-array select2-hidden-accessible" data-select2-id="31"
                        tabindex="-1" aria-hidden="true">

                        <option value="0" data-select2-id="32">enhancement</option>
                        <option value="1" data-select2-id="33">bug</option>
                        <option value="2" data-select2-id="34">duplicate</option>
                        <option value="3" data-select2-id="35">invalid</option>
                        <option value="4" data-select2-id="36">wontfix</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="37" style="width: 107.2px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-v2we-container"><span class="select2-selection__rendered"
                                    id="select2-v2we-container" role="textbox" aria-readonly="true"
                                    title="enhancement">enhancement</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Automatic Selection</h4>
                        <p>Select2 can be configured to automatically select the currently highlighted
                            result when the dropdown is closed by using the <code>selectOnClose</code>
                            option:
                        </p>
                    </div>

                    <select id="automatic-selection" data-select2-id="automatic-selection" tabindex="-1"
                        class="select2-hidden-accessible" aria-hidden="true">
                        <option value="AL" data-select2-id="39">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="38" style="width: 80px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-automatic-selection-container"><span
                                    class="select2-selection__rendered" id="select2-automatic-selection-container"
                                    role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Remain open after selection</h4>
                        <p>Select2 will automatically close the dropdown when an element is selected,
                            similar to what is done with a normal select box. You may use the
                            <code>closeOnSelect</code> option to prevent the dropdown from closing when a
                            result is selected:
                        </p>
                    </div>

                    <select id="remain-open" data-select2-id="remain-open" tabindex="-1"
                        class="select2-hidden-accessible" aria-hidden="true">
                        <option value="AL" data-select2-id="41">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="40" style="width: 80px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-remain-open-container"><span
                                    class="select2-selection__rendered" id="select2-remain-open-container"
                                    role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Dropdown placement</h4>
                        <p>The <code>dropdownParent</code> option allows you to pick an alternative element
                            for the dropdown to be appended to:</p>
                    </div>

                    <select id="dropdown-placement" data-select2-id="dropdown-placement" tabindex="-1"
                        class="select2-hidden-accessible" aria-hidden="true">
                        <option value="AL" data-select2-id="43">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="42" style="width: 80px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-dropdown-placement-container"><span
                                    class="select2-selection__rendered" id="select2-dropdown-placement-container"
                                    role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                    <div id="select2-modal">

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Limiting the number of selections</h4>
                        <p>Select2 multi-value select boxes can set restrictions regarding the maximum
                            number of options that can be selected. The select below is declared with the
                            <code>multiple</code> attribute with <code>maximumSelectionLength</code> in the
                            select2 options.
                        </p>
                    </div>

                    <select id="limit-selection" name="states[]" multiple="" data-select2-id="limit-selection"
                        tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="BY">Lorem</option>
                        <option value="DY">Ipsum</option>
                        <option value="MY">Dolor</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="44" style="width: 75.0125px;"><span class="selection"><span
                                class="select2-selection select2-selection--multiple" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                <ul class="select2-selection__rendered">
                                    <li class="select2-search select2-search--inline"><input
                                            class="select2-search__field" type="search" tabindex="0"
                                            autocomplete="off" autocorrect="off" autocapitalize="none"
                                            spellcheck="false" role="textbox" aria-autocomplete="list"
                                            placeholder="" style="width: 0.75em;"></li>
                                </ul>
                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Dynamic option creation</h4>
                        <p>In addition to a prepopulated menu of options, Select2 can dynamically create new
                            options from text input by the user in the search box. This feature is called
                            "tagging". To enable tagging, set the <code>tags</code> option to
                            <code>true</code>:
                        </p>
                    </div>
                    <select id="dynamic-option-creation" data-select2-id="dynamic-option-creation" tabindex="-1"
                        class="select2-hidden-accessible" aria-hidden="true">
                        <option value="AL" data-select2-id="46">Red</option>
                        <option value="WY">Green</option>
                        <option value="BY">Yellow</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="45" style="width: 62.4px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-dynamic-option-creation-container"><span
                                    class="select2-selection__rendered" id="select2-dynamic-option-creation-container"
                                    role="textbox" aria-readonly="true" title="Red">Red</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Tagging with multi-value select boxes</h4>
                        <p>Tagging can also be used in multi-value select boxes. In the example below, we
                            set the <code>multiple="multiple"</code> attribute on a Select2 control that
                            also has <code>tags: true</code> enabled:</p>
                    </div>

                    <select id="multi-value-select" multiple="" data-select2-id="multi-value-select"
                        tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                        <option selected="selected" data-select2-id="48">orange</option>
                        <option>white</option>
                        <option selected="selected" data-select2-id="49">purple</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="47" style="width: 59.8875px;"><span class="selection"><span
                                class="select2-selection select2-selection--multiple" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                <ul class="select2-selection__rendered">
                                    <li class="select2-selection__choice" title="orange" data-select2-id="50"><span
                                            class="select2-selection__choice__remove" role="presentation">×</span>orange
                                    </li>
                                    <li class="select2-selection__choice" title="purple" data-select2-id="51"><span
                                            class="select2-selection__choice__remove" role="presentation">×</span>purple
                                    </li>
                                    <li class="select2-search select2-search--inline"><input
                                            class="select2-search__field" type="search" tabindex="0"
                                            autocomplete="off" autocorrect="off" autocapitalize="none"
                                            spellcheck="false" role="textbox" aria-autocomplete="list"
                                            placeholder="" style="width: 0.75em;"></li>
                                </ul>
                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Single select placeholders</h4>
                        <p>Select2 supports displaying a placeholder value using the
                            <code>placeholder</code> configuration option. The placeholder value will be
                            displayed until a selection is made.
                        </p>
                    </div>

                    <select class="single-select-placeholder js-states select2-hidden-accessible" data-select2-id="52"
                        tabindex="-1" aria-hidden="true">

                        <option value="Alaska" data-select2-id="54">Alaska</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="California">California</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="53" style="width: 81.6px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-abjq-container"><span class="select2-selection__rendered"
                                    id="select2-abjq-container" role="textbox" aria-readonly="true"
                                    title="Alaska"><span class="select2-selection__clear"
                                        data-select2-id="55">×</span>Alaska</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Multi-select placeholders</h4>
                        <p>For multi-selects, you must <strong>not</strong> have an empty
                            <code>&lt;option&gt;</code>element:
                        </p>
                    </div>

                    <select class="multi-select-placeholder js-states select2-hidden-accessible" multiple=""
                        data-select2-id="56" tabindex="-1" aria-hidden="true">
                        <option value="Alaska">Alaska</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="California">California</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="57" style="width: 76.6875px;"><span class="selection"><span
                                class="select2-selection select2-selection--multiple" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                <ul class="select2-selection__rendered">
                                    <li class="select2-search select2-search--inline"><input
                                            class="select2-search__field" type="search" tabindex="0"
                                            autocomplete="off" autocorrect="off" autocapitalize="none"
                                            spellcheck="false" role="textbox" aria-autocomplete="list"
                                            placeholder="Select a state" style="width: 333.663px;"></li>
                                </ul>
                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Default selection placeholders</h4>
                        <p>Alternatively, the value of the <code>placeholder</code> option can be a data
                            object representing a default selection (<code>&lt;option&gt;</code>). In this
                            case the <code>id</code> of the data object should match the
                            <code>value</code> of the corresponding default selection.
                        </p>
                    </div>

                    <select class="default-placeholder select2-hidden-accessible" data-select2-id="58" tabindex="-1"
                        aria-hidden="true">

                        <option value="Alaska" data-select2-id="60">Alaska</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="California">California</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="59" style="width: 81.6px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-g4pi-container"><span class="select2-selection__rendered"
                                    id="select2-g4pi-container" role="textbox" aria-readonly="true"
                                    title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Customizing how results are matched</h4>
                        <p>When users filter down the results by entering search terms into the search box,
                            Select2 uses an internal "matcher" to match search terms to results. You may
                            customize the way that Select2 matches search terms by specifying
                            a callback for the <code>matcher</code> configuration option.</p>
                    </div>

                    <select class="customize-result select2-hidden-accessible" data-select2-id="61" tabindex="-1"
                        aria-hidden="true">
                        <option value="Alaska" data-select2-id="63">Alaska</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="California">California</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="62" style="width: 81.6px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-2zoc-container"><span class="select2-selection__rendered"
                                    id="select2-2zoc-container" role="textbox" aria-readonly="true"
                                    title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Matching grouped options</h4>
                        <p>Only first-level objects will be passed in to the <code>matcher</code> callback.
                            If you are working with nested data, you must iterate through the
                            <code>children</code> array and match them individually. This allows for more
                            advanced matching when working with nested objects, allowing you to handle them
                            however you want.
                        </p>
                    </div>

                    <select class="match-grouped-options select2-hidden-accessible" data-select2-id="64"
                        tabindex="-1" aria-hidden="true">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option data-select2-id="66">Alaska</option>
                            <option>Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option>California</option>
                            <option>Nevada</option>
                            <option>Oregon</option>
                            <option>Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option>Arizona</option>
                            <option>Colorado</option>
                            <option>Idaho</option>
                            <option>Mountana</option>
                            <option>Nebraska</option>
                            <option>New Mexico</option>
                            <option>Utah</option>
                            <option>Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option>Alabama</option>
                            <option>Arkansas</option>
                            <option>Illinois</option>
                            <option>Lowa</option>
                            <option>Kansas</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option>Connecticut</option>
                            <option>Delaware</option>
                            <option>Florida</option>
                            <option>Georgia</option>
                            <option>Indiana</option>
                            <option>Maine</option>
                            <option>Maryland</option>
                            <option>Massachusetts</option>
                            <option>Michigan</option>
                        </optgroup>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="65" style="width: 131.2px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-ooe1-container"><span class="select2-selection__rendered"
                                    id="select2-ooe1-container" role="textbox" aria-readonly="true"
                                    title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Minumum search term length</h4>
                        <p>You may set a minimum search term length by using the
                            <code>minimumInputLength</code> option:
                        </p>
                    </div>

                    <select class="minimum-search-length select2-hidden-accessible" data-select2-id="67"
                        tabindex="-1" aria-hidden="true">
                        <option value="Alaska" data-select2-id="69">Alaska</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="California">California</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="68" style="width: 81.6px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-uy5q-container"><span class="select2-selection__rendered"
                                    id="select2-uy5q-container" role="textbox" aria-readonly="true"
                                    title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Maximum search term length</h4>
                        <p>You may limit the maximum length of search terms by using the
                            <code>maximumInputLength</code> option:
                        </p>
                    </div>

                    <select class="maximum-search-length select2-hidden-accessible" data-select2-id="70"
                        tabindex="-1" aria-hidden="true">
                        <option value="Alaska" data-select2-id="72">Alaska</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="California">California</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="71" style="width: 81.6px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-413x-container"><span class="select2-selection__rendered"
                                    id="select2-413x-container" role="textbox" aria-readonly="true"
                                    title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Programmatically add new options</h4>
                        <p>New options can be added to a Select2 control programmatically by creating a new
                            Javascript <code>Option</code> object and appending it to the control:</p>
                    </div>

                    <select class="add-new-options select2-hidden-accessible" data-select2-id="73" tabindex="-1"
                        aria-hidden="true">

                        <option value="1" data-select2-id="75">New Item</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="74" style="width: 81.6px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-m3gc-container"><span class="select2-selection__rendered"
                                    id="select2-m3gc-container" role="textbox" aria-readonly="true"
                                    title="New Item">New
                                    Item</span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Create if not exists</h4>
                        <p>You can use <code>.find</code> to select the option if it already exists, and
                            create it otherwise:</p>
                    </div>

                    <select class="create-if-not-exists select2-hidden-accessible" data-select2-id="76" tabindex="-1"
                        aria-hidden="true">
                        <option value="Alaska">Alaska</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="California">California</option>
                        <option value="1" selected="" data-select2-id="78">New Item</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="77" style="width: 81.6px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-x0l1-container"><span class="select2-selection__rendered"
                                    id="select2-x0l1-container" role="textbox" aria-readonly="true"
                                    title="New Item">New
                                    Item</span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Using jQuery selector</h4>
                        <p>Selected items can also be accessed via the <code>:selected</code> jQuery
                            selector:
                        </p>
                    </div>

                    <select class="jquery-selector select2-hidden-accessible" data-select2-id="79" tabindex="-1"
                        aria-hidden="true">
                        <option value="Alaska" data-select2-id="81">Alaska</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="California">California</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="80" style="width: 81.6px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-chbh-container"><span class="select2-selection__rendered"
                                    id="select2-chbh-container" role="textbox" aria-readonly="true"
                                    title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">RTL support</h4>
                        <p>Select2 will work on RTL websites if the <code>dir</code> attribute is set on the
                            <code>&lt;select&gt;</code><span class="copy-to-clipboard" title="Copy to clipboard"></span>
                            or any parents of it. You can also
                            initialize Select2 with the <code>dir: "rtl"</code><span class="copy-to-clipboard"
                                title="Copy to clipboard"></span>
                            configuration option.
                        </p>
                    </div>

                    <select class="rtl-select2 select2-hidden-accessible" data-select2-id="82" tabindex="-1"
                        aria-hidden="true">
                        <option value="Alaska" data-select2-id="84">Alaska</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="California">California</option>
                    </select><span class="select2 select2-container select2-container--default" dir="rtl"
                        data-select2-id="83" style="width: 81.6px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-8yqz-container"><span class="select2-selection__rendered"
                                    id="select2-8yqz-container" role="textbox" aria-readonly="true"
                                    title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Destroying the Select2 control</h4>
                        <p>The <code>destroy</code> method will remove the Select2 widget from the target
                            element. It will revert back to a standard <code>select</code> control:</p>
                    </div>

                    <div class="mb-4">
                        <select class="destroy-selector select2-hidden-accessible" data-select2-id="85" tabindex="-1"
                            aria-hidden="true">
                            <option value="Alaska" data-select2-id="87">Alaska</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="California">California</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="86" style="width: 81.6px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-pxxf-container"><span class="select2-selection__rendered"
                                        id="select2-pxxf-container" role="textbox" aria-readonly="true"
                                        title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <button id="destroy-selector-trigger" class="btn btn-primary">Destroy
                        Select2</button>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Opening the dropdown</h4>
                        <p>Select2 will trigger a few different events when different actions are taken
                            using the component, allowing you to add custom hooks and perform actions.</p>
                    </div>

                    <div class="mb-4">
                        <select class="opening-dropdown select2-hidden-accessible" data-select2-id="88" tabindex="-1"
                            aria-hidden="true">
                            <option value="Alaska" data-select2-id="90">Alaska</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="California">California</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="89" style="width: 81.6px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-ff0v-container"><span class="select2-selection__rendered"
                                        id="select2-ff0v-container" role="textbox" aria-readonly="true"
                                        title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <button id="dropdown-trigger-open" class="btn btn-primary">Open Dropdown</button>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Opening/Closing the dropdown</h4>
                        <p>Select2 will trigger a few different events when different actions are taken
                            using the component, allowing you to add custom hooks and perform actions.</p>
                    </div>
                    <button id="opening-dropdown-trigger" class="btn btn-primary mb-2">Open
                        Dropdown</button>
                    <button id="closing-dropdown-trigger" class="btn btn-primary mb-2">Close
                        Dropdown</button>
                    <div class="mt-4">
                        <select class="open-close-dropdown select2-hidden-accessible" data-select2-id="91"
                            tabindex="-1" aria-hidden="true">
                            <option value="Alaska" data-select2-id="93">Alaska</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="California">California</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="92" style="width: 81.6px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-oi84-container"><span class="select2-selection__rendered"
                                        id="select2-oi84-container" role="textbox" aria-readonly="true"
                                        title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Select2 methods</h4>
                        <p>Select2 has several built-in methods that allow programmatic control of the
                            component. </p>
                    </div>

                    <label class="select2-label">Single select</label> <br>
                    <button class="js-programmatic-set-val btn btn-primary mb-2" aria-label="Set Select2 option">
                        Set "California"
                    </button>

                    <button class="js-programmatic-open btn btn-primary mb-2">
                        Open
                    </button>

                    <button class="js-programmatic-close btn btn-primary mb-2">
                        Close
                    </button>

                    <button class="js-programmatic-destroy btn btn-primary mb-2">
                        Destroy
                    </button>

                    <button class="js-programmatic-init btn btn-primary mb-2">
                        Re-initialize
                    </button>

                    <div class="mt-4">
                        <select class="single-event-unbind select2-hidden-accessible" data-select2-id="94"
                            tabindex="-1" aria-hidden="true">
                            <option value="AL" data-select2-id="96">Alaska</option>
                            <option value="HA">Hawaii</option>
                            <option value="CA">California</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="95" style="width: 81.6px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-9bxt-container"><span class="select2-selection__rendered"
                                        id="select2-9bxt-container" role="textbox" aria-readonly="true"
                                        title="Alaska">Alaska</span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Select2 methods</h4>
                        <p>Select2 has several built-in methods that allow programmatic control of the
                            component. </p>
                    </div>

                    <label class="select2-label">Multiple select</label> <br>
                    <button class="js-programmatic-multi-set-val btn btn-primary mb-2" aria-label="Set Select2 option">
                        Set to Hawaii and California
                    </button>

                    <button class="js-programmatic-multi-clear btn btn-primary mb-2">
                        Clear
                    </button>

                    <div class="mt-4">
                        <select class="js-example-programmatic-multi select2-hidden-accessible" multiple=""
                            data-select2-id="97" tabindex="-1" aria-hidden="true">
                            <option value="AL">Alaska</option>
                            <option value="HA">Hawaii</option>
                            <option value="CA">California</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="98" style="width: 76.6875px;"><span class="selection"><span
                                    class="select2-selection select2-selection--multiple" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                    <ul class="select2-selection__rendered">
                                        <li class="select2-search select2-search--inline"><input
                                                class="select2-search__field" type="search" tabindex="0"
                                                autocomplete="off" autocorrect="off" autocapitalize="none"
                                                spellcheck="false" role="textbox" aria-autocomplete="list"
                                                placeholder="" style="width: 0.75em;"></li>
                                    </ul>
                                </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Wrong</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Message</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-info btn sweet-message">Sweet Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Text</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-primary btn sweet-text">Sweet Text</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Success</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-success btn sweet-success">Sweet Success</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Confirm</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Confirm Or Cancel</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-warning btn sweet-success-cancel">Sweet Confirm Or
                                Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Image Message</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-info btn sweet-image-message">Sweet Image
                                Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet HTML</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-primary btn sweet-html">Sweet HTML</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Auto Close</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-danger btn sweet-auto">Sweet Auto Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Prompt</h4>
                    <div class="card-content">
                        <div class="sweetalert mt-5">
                            <button class="btn btn-success btn sweet-prompt">Sweet Prompt</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sweet Ajax</h4>
                    <div class="card-content"></div>
                    <div class="sweetalert mt-4">
                        <button class="btn btn-info btn sweet-ajax">Sweet Ajax</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large
            modal</button>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">Modal body text goes here.</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vertical Forms with icon</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="#" method="post" novalidate="novalidate">
                            <div class="form-group is-invalid">
                                <label class="text-label">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1"
                                        name="val-username" placeholder="Enter a username.."
                                        aria-describedby="val-username1-error" aria-invalid="true">
                                    <div id="val-username1-error" class="invalid-feedback animated fadeInUp"
                                        style="display: block;">Please enter a username</div>
                                </div>
                            </div>
                            <div class="form-group is-invalid">
                                <label class="text-label">Password *</label>
                                <div class="input-group transparent-append">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" id="val-password1"
                                        name="val-password" placeholder="Choose a safe one.."
                                        aria-describedby="val-password1-error">
                                    <div class="input-group-append show-pass">
                                        <span class="input-group-text"> <i class="fa fa-eye-slash"></i>
                                        </span>
                                    </div>
                                    <div id="val-password1-error" class="invalid-feedback animated fadeInUp"
                                        style="display: block;">Please provide a password</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input id="checkbox1" class="form-check-input" type="checkbox">
                                    <label for="checkbox1" class="form-check-label">Check me out</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-light">cencel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Datatable</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <div class="dataTables_length" id="example_length"><label>Show <select
                                        name="example_length" aria-controls="example" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="" placeholder="" aria-controls="example"></label></div>
                            <table id="example" class="display dataTable" style="min-width: 845px" role="grid"
                                aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 191.15px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 293.15px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 146.55px;">Office</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 53.9125px;">Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 126.95px;">Start date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 118.088px;">Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr class="even" role="row">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr class="even" role="row">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr class="even" role="row">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr class="even" role="row">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr class="even" role="row">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Position</th>
                                        <th rowspan="1" colspan="1">Office</th>
                                        <th rowspan="1" colspan="1">Age</th>
                                        <th rowspan="1" colspan="1">Start date</th>
                                        <th rowspan="1" colspan="1">Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing
                                1 to 10 of 57 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                <a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0"
                                    tabindex="0" id="example_previous">Previous</a><span><a
                                        class="paginate_button current" aria-controls="example" data-dt-idx="1"
                                        tabindex="0">1</a><a class="paginate_button " aria-controls="example"
                                        data-dt-idx="2" tabindex="0">2</a><a class="paginate_button "
                                        aria-controls="example" data-dt-idx="3" tabindex="0">3</a><a
                                        class="paginate_button " aria-controls="example" data-dt-idx="4"
                                        tabindex="0">4</a><a class="paginate_button " aria-controls="example"
                                        data-dt-idx="5" tabindex="0">5</a><a class="paginate_button "
                                        aria-controls="example" data-dt-idx="6" tabindex="0">6</a></span><a
                                    class="paginate_button next" aria-controls="example" data-dt-idx="7"
                                    tabindex="0" id="example_next">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Today Expenses </div>
                        <div class="stat-digit"> <i class="fa fa-usd"></i>8500</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Income Detail</div>
                        <div class="stat-digit"> <i class="fa fa-usd"></i>7800</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Task Completed</div>
                        <div class="stat-digit"> <i class="fa fa-usd"></i> 500</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="stat-widget-two card-body">
                    <div class="stat-content">
                        <div class="stat-text">Task Completed</div>
                        <div class="stat-digit"> <i class="fa fa-usd"></i>650</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
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
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project</h4>
                </div>
                <div class="card-body">
                    <div class="current-progress">
                        <div class="progress-content py-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="progress-text">Website</div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="current-progressbar">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-40" role="progressbar"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                40%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-content py-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="progress-text">Android</div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="current-progressbar">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-60" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                60%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-content py-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="progress-text">Ios</div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="current-progressbar">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-70" role="progressbar"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                70%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-content py-2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="progress-text">Mobile</div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="current-progressbar">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-90" role="progressbar"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                90%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="testimonial-widget-one p-17">
                        <div class="testimonial-widget-one owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation.
                                        consectetur adipisicing elit.
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-author">TYRION LANNISTER</div>
                                            <div class="testimonial-author-position">Founder-Ceo. Dell
                                                Corp
                                            </div>
                                        </div>
                                        <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation.
                                        consectetur adipisicing elit.
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-author">TYRION LANNISTER</div>
                                            <div class="testimonial-author-position">Founder-Ceo. Dell
                                                Corp
                                            </div>
                                        </div>
                                        <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation.
                                        consectetur adipisicing elit.
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-author">TYRION LANNISTER</div>
                                            <div class="testimonial-author-position">Founder-Ceo. Dell
                                                Corp
                                            </div>
                                        </div>
                                        <img class="testimonial-author-img ml-3" src="./images/avatar/1.png"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Web Server</h4>
                </div>
                <div class="card-body">
                    <div class="cpu-load-chart">
                        <div id="cpu-load" class="cpu-load"></div>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Country</h4>
                </div>
                <div class="card-body">
                    <div id="vmap13" class="vmap"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New Orders</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Product</th>
                                    <th>quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>Lew Shawon</td>
                                    <td><span>Dell-985</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-success">Done</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>Lew Shawon</td>
                                    <td><span>Asus-565</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>lew Shawon</td>
                                    <td><span>Dell-985</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-success">Done</span></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>Lew Shawon</td>
                                    <td><span>Asus-565</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>lew Shawon</td>
                                    <td><span>Dell-985</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-success">Done</span></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img width="35" src="./images/avatar/1.png"
                                                    alt=""></a>
                                        </div>
                                    </td>
                                    <td>Lew Shawon</td>
                                    <td><span>Asus-565</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('backend-script')
    {{-- <script>
        $(document).ready(function() {
            var type = @json($type);
            var message = @json($message);

            toastr[type](message);
        });
    </script> --}}
@endsection


