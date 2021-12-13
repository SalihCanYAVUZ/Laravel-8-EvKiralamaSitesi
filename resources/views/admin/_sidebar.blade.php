<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->

<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{ route('admin_home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Home</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_category')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i>
                        <span class="hide-menu">Category</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_house')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">Houses</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i>
                        <span class="hide-menu">Tables</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i>
                        <span class="hide-menu">Forms</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i>
                        <span class="hide-menu">Bos</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_setting')}}" aria-expanded="false"><i class="mdi mdi-settings"></i>
                        <span class="hide-menu">Setting</span></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
