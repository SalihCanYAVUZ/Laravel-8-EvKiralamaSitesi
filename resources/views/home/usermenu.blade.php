
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
                            <li class="active">
                                <a href="dashboard-my-ads.html"></a></li>
                            <li>
                                <a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> Favorilerim <span>5</span></a>
                            </li>
                            <li>
                                <a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archeved Ads <span>12</span></a>
                            </li>
                            <li>
                                <a href="dashboard-pending-ads.html"><i class="fa fa-bolt"></i> Pending Approval<span>23</span></a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}"><i class="fa fa-cog"></i> Logout</a>
                            </li>
                            <li>
                                <a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete Account</a>
                            </li>
                        </ul>
                    </div>
                </div>


