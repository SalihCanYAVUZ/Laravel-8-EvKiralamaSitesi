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
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('assets')}}/images/logo.png" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">
                            <button class="btn btn-default" type="button" >Home
                            </button>
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
                            <li class="nav-item dropdown dropdown-slide">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Web Pages
                                </button>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                    <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                    <a class="dropdown-item" href="user-profile.html">User Profile</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Listing
                                </button>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="category.html">Ad-Gird View</a>
                                    <a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <div class style="width: 200px">
                                </div>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-4 mt-12">
                            <li class="nav-item">
                                <a class="nav-link login-button" href="login.html">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>
</body>
</html>
