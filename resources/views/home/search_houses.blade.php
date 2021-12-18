<!DOCTYPE html>
<html lang="en">
<head>


    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EvciKus-{{$search}}</title>

    <!-- FAVICON -->
    <link href="{{asset('assets')}}/img/favicon.png" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="{{asset('assets')}}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset('assets')}}/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="{{asset('assets')}}/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="{{asset('assets')}}/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="{{asset('assets')}}/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="body-wrapper">


@include('home._header')
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="category-sidebar">
                    <div class="widget category-list">
                        <h4 class="widget-header">All Category</h4>
                        <ul class="category-list">
                            <li><a href="category.html">Laptops <span>93</span></a></li>
                            <li><a href="category.html">Iphone <span>233</span></a></li>
                            <li><a href="category.html">Microsoft  <span>183</span></a></li>
                            <li><a href="category.html">Monitors <span>343</span></a></li>
                        </ul>
                    </div>

                    <div class="widget category-list">
                        <h4 class="widget-header">Nearby</h4>
                        <ul class="category-list">
                            <li><a href="category.html">New York <span>93</span></a></li>
                            <li><a href="category.html">New Jersy <span>233</span></a></li>
                            <li><a href="category.html">Florida  <span>183</span></a></li>
                            <li><a href="category.html">California <span>120</span></a></li>
                            <li><a href="category.html">Texas <span>40</span></a></li>
                            <li><a href="category.html">Alaska <span>81</span></a></li>
                        </ul>
                    </div>

                    <div class="widget filter">
                        <h4 class="widget-header">Show Produts</h4>
                        <select>
                            <option>Popularity</option>
                            <option value="1">Top rated</option>
                            <option value="2">Lowest Price</option>
                            <option value="4">Highest Price</option>
                        </select>
                    </div>

                    <div class="widget price-range w-100">
                        <h4 class="widget-header">Price Range</h4>
                        <div class="block">
                            <input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
                                   data-slider-value="[0,5000]">
                            <div class="d-flex justify-content-between mt-2">
                                <span class="value">$10 - $5000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="category-search-filter">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Short</strong>
                            <select>
                                <option>Most Recent</option>
                                <option value="1">Most Popular</option>
                                <option value="2">Lowest Price</option>
                                <option value="4">Highest Price</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="view">
                                <strong>Views</strong>
                                <ul class="list-inline view-switcher">
                                    <li class="list-inline-item">
                                        <a href="category.html"><i class="fa fa-th-large"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="category.html" class="text-info"><i class="fa fa-reorder"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ad listing list  -->
                <div class="ad-listing-list mt-20">
                    @foreach($datalist as $rs)
                    <div class="row p-lg-3 p-sm-5 p-4">

                        <div class="col-lg-4 align-self-center">
                            <a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                <img src="{{ Storage::url($rs->image)}}" class="img-fluid" alt="" style="height: 250px">
                            </a>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 col-md-10">
                                    <div class="ad-listing-content">
                                        <div>
                                            <a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}"class="font-weight-bold">{{$rs->title}}</a>
                                        </div>
                                        <ul class="list-inline mt-2 mb-3">
                                            <li class="list-inline-item"><a href="category.html"> <i class="fa fa-money"></i>
                                                {{$rs->price}}</a></li>
                                            <li class="list-inline-item"><a href=""><i class="fa fa-map-marker"></i>{{$rs->address}}</a></li>

                                        </ul>
                                        <p class="pr-5">{{$rs->description}}</p>
                                        <div>
                                            <br>
                                            <a href="{{route('addtofav',['id'=>$rs->id])}}"><i style="font-size:28px;" class="fa fa-heart-o" ></i> </a>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                <!-- ad listing list  -->
            </div>
        </div>
    </div>
</section>

@include('home._footer')



</body>

</html>
