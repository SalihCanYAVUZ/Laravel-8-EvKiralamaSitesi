<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->

<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{ route('admin_home') }}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">Anasayfa</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_category')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">Kategoriler</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_house')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">İlanlar</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_message')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">İletişim Mesajları</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_review')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">Yorumlar</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_faq')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">SSS</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_users')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">Kullanıcılar</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                             href="{{route('admin_setting')}}" aria-expanded="false"><i class="mdi mdi-settings"></i>
                        <span class="hide-menu">Ayarlar</span></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
