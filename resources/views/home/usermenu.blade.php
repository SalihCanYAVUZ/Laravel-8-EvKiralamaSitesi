
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user">
                        <!-- User Name -->
                        <h5 class="text-center">{{Auth::user()->name}}</h5>
                    </div>
                    <!-- Dashboard Links -->
                    <div class="widget user-dashboard-menu">
                        <ul>
                            <li class="">
                                <a href="{{route('myprofile')}}"><i class="fa fa-user-o"></i> Profilim</a>
                            </li>
                            <li>
                                <a href="{{route('user_house')}}"><i class="fa fa-home"></i>İlanlarım </a>
                            </li>
                            <li>
                                <a href="{{route('myreviews')}}"><i class="fa fa-comments"></i>Yorumlarım </a>
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


