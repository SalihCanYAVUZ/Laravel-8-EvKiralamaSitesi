<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('assets')}}/images/logo.png" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" style="width: 20px;" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <ul class="navbar-nav ml-auto main-nav " >
                            <a href="{{route('home')}}"> <button class="btn btn-default" type="button" >Home
                                </button></a>
                            @php
                                $parentCategories = \App\Http\Controllers\HomeController::categorylist()
                            @endphp
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Categories
                                    </button>
                                <ul class="dropdown-menu">
                                    @foreach($parentCategories as $rs)
                                    <li class="dropdown-submenu">
                                        <a class="test" href="#" aria-expanded="false">{{$rs->title}} <span class="caret"></span></a>
                                        <ul class="dropdown-item">
                                            @if(count($rs->children))
                                                @include('home.categorytree',['children'=> $rs->children])
                                            @endif
                                        </ul>
                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                            <a href="{{route('aboutus')}}"> <button class="btn btn-default" type="button" >Hakkımızda
                                </button></a>
                            <a href="{{route('faq')}}"> <button class="btn btn-default" type="button" >SSS
                                </button></a>
                            <a href="{{route('contact')}}"> <button class="btn btn-default" type="button" >İletişim
                                </button></a>

                            <li class="nav-item dropdown dropdown-slide">
                                <div class style="width: 150px"> </div>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-4 mt-9">
                            @auth
                                <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    {{Auth::user()->name}}</button>

                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="{{route('myprofile')}}"> <i class="fa fa-user"></i> Profil</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#"> <i class="fa fa-heart"></i> Favoriler</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="{{route('user_house')}}"> <i class="fa fa-home"></i> İlanlarım</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="{{route('myreviews')}}"> <i class="fa fa-comments"></i> Yorumlar</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#">  <i class="fa fa-cog" aria-hidden="true"></i> Ayarlar </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="{{route('logout')}}"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout  </a>
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

                            @endauth
                                @guest
                                    <a href="{{route('login')}}"> <button class="btn btn-default" type="button" > <i class="fa fa-sign-out" aria-hidden="true"></i> Login
                                            </button></a>
                                    <a href="{{route('register')}}"> <button class="btn btn-default" type="button" >  <i class="fa fa-sign-in" aria-hidden="true"></i> Join
                                    </button></a>
                                @endguest

                        </ul>


                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.dropdown-submenu a.test').on("click", function(e){
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>
</section>

</body>
</html>
