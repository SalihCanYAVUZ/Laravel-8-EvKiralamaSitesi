
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user">
                        <!-- User Image -->
                        <div class="image d-flex justify-content-center">
                            <img src="{{asset('assets')}}/images/user/user-thumb.jpg" alt="" class="">
                        </div>

                        <!-- User Name -->
                        <h5 class="text-center">{{Auth::user()->name}}</h5>
                    </div>
                    <!-- Dashboard Links -->
                    <div class="widget user-dashboard-menu">
                        <ul>
                            <li class="">
                                <a href="{{route('myprofile')}}"><i class="fa fa-user-o"></i> Profilim</a> </li>
                            <li>
                                <a href="dashboard-favourite-ads.html"><i class="fa fa-heart-o"></i> Favorilerim </a>
                            </li>
                            <li>
                                <a href="{{route('user_house')}}"><i class="fa fa-home"></i>İlanlarım </a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}"><i class="fa fa-cog"></i> Logout</a>
                            </li>
                            @php
                                $userRoles = \Illuminate\Support\Facades\Auth::user()->roles->pluck('name');
                            @endphp
                            @if($userRoles->contains('admin'))
                                <li>
                                    <a href="{{route('admin_home')}}" target="_blank"><i class="fa fa-cog"></i> Admin Panel</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>


