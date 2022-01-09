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
            <div class="col-lg-12 col-md-8">
                @include('home._search')
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
