<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">

            <!-- Starts :: Dashboard -->
            <li>
                <a href="" aria-expanded="false">
                    {{-- {{ route('admin.dashboard') }} --}}
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <!-- Ends :: Dashboard -->

            <!-- Starts :: User-Case Preview Section -->
            <li class="nav-label">Use-Case Preview</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-text">HR & Payroll Management</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="">Calendar</a>
                        {{-- {{ route('admin.hr-and-payroll-management.index') }} --}}
                    </li>
                    <li>
                        <a href="javascript:void()" aria-expanded="false">Email</a>
                    </li>
                    <li>
                        <a href="./app-calender.html">Calendar</a>
                    </li>
                </ul>
            </li>
            <!-- Ends :: User-Case Preview Section -->


            <!-- Starts :: Centralized Permission Checks -->
            @auth
                @php
                    $user = auth()->user();

                    // "For User Management"
                    $hasUserManagementAccess = $user->canAny([
                        'view_role',
                        'view_user',
                        'view_permission',
                        'view_assign_role',
                        'view_role_permission',
                    ]);

                    // For "Product Management"
                    $hasProductManagementAccess = $user->canAny([
                        'view_inventory',
                        'view_category',
                        // 'view_sub_category',
                        'view_product',
                    ]);

                    // For "Product"
                    $hasProductCatAccess = $user->canAny(['view_category', 'view_product']);

                @endphp
            @endauth
            <!-- Ends :: Centralized Permission Checks -->

            <!-- Starts :: Auth Checking For Permissions Role Has -->
            @auth
                <!-- Starts :: Product Management -->
                @if ($hasProductManagementAccess)
                    <li class="nav-label">Product Management</li>

                    <!-- Starts :: Inventory Section -->
                    <li>
                        <a href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-warehouse"></i>
                            <span class="nav-text">Inventory</span>
                        </a>
                    </li>
                    <!-- Ends :: Inventory Section -->

                    <!-- Starts :: Product & Category Section -->
                    @if ($hasProductCatAccess)
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-list"></i>
                                <span class="nav-text">Products</span>
                            </a>
                            <ul aria-expanded="false">
                                @can('view_category')
                                    <li>
                                        <a href="">Category</a>
                                        {{-- {{ route('admin.product.category.index') }} --}}
                                    </li>
                                @endcan

                                {{-- @can('view_sub_category')
                                    <li>
                                        <a href="{{ route('admin.product.sub.category.index') }}">Sub Category</a>
                                    </li>
                                @endcan --}}

                                @can('view_product')
                                    <li>
                                        <a href="" aria-expanded="false">Products</a>
                                        {{-- {{ route('admin.products.index') }} --}}
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endif
                    <!-- Ends :: Product & Category Section -->
                @endif
                <!-- Ends :: Product Management -->


                <!-- Starts :: User Management Section -->
                @if ($hasUserManagementAccess)
                    <!-- Section Label -->
                    <li class="nav-label">User Management</li>

                    <!-- Users Section -->
                    @can('view_user')
                        <li>
                            <a href="" aria-expanded="false">
                                {{-- {{ route('admin.user-account.index') }} --}}
                                <i class="fa-solid fa-users-gear"></i>
                                <span class="nav-text">Users</span>
                            </a>
                        </li>
                    @endcan

                    <!-- Permissions Section -->
                    @can('view_permission')
                        <li>
                            <a href="" aria-expanded="false">
                                {{-- {{ route('admin.user.permissions.index') }} --}}
                                <i class="fa-solid fa-lock"></i>
                                <span class="nav-text">Permissions</span>
                            </a>
                        </li>
                    @endcan

                    <!-- Assign Roles Section -->
                    @can('view_assign_role')
                        <li>
                            <a href="" aria-expanded="false">
                                {{-- {{ route('admin.user.assign-roles.index') }} --}}
                                <i class="fa-solid fa-user-gear"></i>
                                <span class="nav-text">Assign Roles</span>
                            </a>
                        </li>
                    @endcan

                    <!-- Roles & Permissions Section -->
                    @can('view_role_permission')
                        <li>
                            <a href="" aria-expanded="false">
                                {{-- {{ route('admin.user.roles.index') }} --}}
                                <i class="fa-solid fa-user-tag"></i>
                                <span class="nav-text">Roles & Permissions</span>
                            </a>
                        </li>
                    @endcan

                    {{-- Future Feature Placeholder: Assign Permissions  --}}
                    {{-- <li>
                        <a href="javascript:void(0)" aria-expanded="false">
                            <span class="fa-stack">
                                <i class="sidebar-item-icon fas fa-lock" style="font-size: 24px !important;"></i>
                                <i class="fa-regular fa-circle-check adjustLockPosition"></i>
                            </span>
                            <span class="nav-text">Assign Permissions</span>
                        </a>
                    </li> --}}
                @endif
                <!-- Ends :: User Management Section -->

            @endauth
            <!-- Ends :: Auth Checking For Permissions Role Has -->




            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                <ul aria-expanded="false">
                    <li><a href="./app-profile.html">Profile</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="./email-compose.html">Compose</a></li>
                            <li><a href="./email-inbox.html">Inbox</a></li>
                            <li><a href="./email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="./app-calender.html">Calendar</a></li>
                </ul>
            </li>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-chart-bar-33"></i><span class="nav-text">Charts</span></a>
                <ul aria-expanded="false">
                    <li><a href="./chart-flot.html">Flot</a></li>
                    <li><a href="./chart-morris.html">Morris</a></li>
                    <li><a href="./chart-chartjs.html">Chartjs</a></li>
                    <li><a href="./chart-chartist.html">Chartist</a></li>
                    <li><a href="./chart-sparkline.html">Sparkline</a></li>
                    <li><a href="./chart-peity.html">Peity</a></li>
                </ul>
            </li>
            <!-- Starts :: User Management Section -->


            <li class="nav-label">Components</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-world-2"></i><span class="nav-text">Bootstrap</span></a>
                <ul aria-expanded="false">
                    <li><a href="./ui-accordion.html">Accordion</a></li>
                    <li><a href="./ui-alert.html">Alert</a></li>
                    <li><a href="./ui-badge.html">Badge</a></li>
                    <li><a href="./ui-button.html">Button</a></li>
                    <li><a href="./ui-modal.html">Modal</a></li>
                    <li><a href="./ui-button-group.html">Button Group</a></li>
                    <li><a href="./ui-list-group.html">List Group</a></li>
                    <li><a href="./ui-media-object.html">Media Object</a></li>
                    <li><a href="./ui-card.html">Cards</a></li>
                    <li><a href="./ui-carousel.html">Carousel</a></li>
                    <li><a href="./ui-dropdown.html">Dropdown</a></li>
                    <li><a href="./ui-popover.html">Popover</a></li>
                    <li><a href="./ui-progressbar.html">Progressbar</a></li>
                    <li><a href="./ui-tab.html">Tab</a></li>
                    <li><a href="./ui-typography.html">Typography</a></li>
                    <li><a href="./ui-pagination.html">Pagination</a></li>
                    <li><a href="./ui-grid.html">Grid</a></li>

                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-plug"></i><span class="nav-text">Plugins</span></a>
                <ul aria-expanded="false">
                    <li><a href="./uc-select2.html">Select 2</a></li>
                    <li><a href="./uc-nestable.html">Nestedable</a></li>
                    <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="./uc-toastr.html">Toastr</a></li>
                    <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                </ul>
            </li>
            <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Widget</span></a></li>
            <li class="nav-label">Forms</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                <ul aria-expanded="false">
                    <li><a href="./form-element.html">Form Elements</a></li>
                    <li><a href="./form-wizard.html">Wizard</a></li>
                    <li><a href="./form-editor-summernote.html">Summernote</a></li>
                    <li><a href="form-pickers.html">Pickers</a></li>
                    <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                </ul>
            </li>
            <li class="nav-label">Table</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li>

            <li class="nav-label">Extra</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                <ul aria-expanded="false">
                    <li><a href="./page-register.html">Register</a></li>
                    <li><a href="./page-login.html">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-error-400.html">Error 400</a></li>
                            <li><a href="./page-error-403.html">Error 403</a></li>
                            <li><a href="./page-error-404.html">Error 404</a></li>
                            <li><a href="./page-error-500.html">Error 500</a></li>
                            <li><a href="./page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>
        </ul>
    </div>


</div>
