<!DOCTYPE html>
<html lang="en">
<head>


    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$data -> title}}</title>
    <meta name="description" content="{{$data->description}}">
    <meta name="keywords" content="{{$data->keywords}}">
    <meta name="author" content="Salih Can YAVUZ">
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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-wrapper">
@include('home._header')
<div class="section">
    <div class="container">
        <div class="row">
            <!--===================================
            =            Store Section            =
            ====================================-->
            <section class="section bg-gray">
                <!-- Container Start -->
                <div class="container">
                    <div class="row">
                        <!-- Left sidebar -->
                        <div class="col-md-8">
                            <div class="product-details">
                                <h1 class="product-title">{{$data->title}}</h1>
                                <div class="product-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Kategori<a>{{\App\Http\Controllers\admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</a></li>
                                        <li class="list-inline-item"><i class="fa fa-location-arrow"></i> Adres<a href="">{{$data->address}}</a></li>
                                    </ul>
                                </div>
                                @php
                                    $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                                @endphp

                                <!-- product slider -->
                                <div class="post-slider">
                                    @foreach($datalist as $rs)
                                        <div><img class="img-fluid w-100" src="{{ \Illuminate\Support\Facades\Storage::url($rs->image)}}"></div>
                                    @endforeach
                                </div>
                                <!-- product slider -->

                                <div class="content mt-5 pt-5">
                                    <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                                               aria-selected="true">Açıklama</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                                               aria-selected="false">Detaylar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                                               aria-selected="false">Yorumlar ({{$countreview}})</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <h3 class="tab-title">Açıklama</h3>
                                            <p>
                                                {!! $data->detail !!}
                                            </p>

                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <h3 class="tab-title">Product Specifications</h3>
                                            <table class="table table-bordered product-table">
                                                <tbody>
                                                <tr>
                                                    <td>Fiyat</td>
                                                    <td>{{$data->price}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Ekleme Tarihi</td>
                                                    <td>{{$data->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Adres</td>
                                                    <td>{{$data->address}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Balkon Sayısı</td>
                                                    <td>{{$data->balcony}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Metre Kare</td>
                                                    <td>{{$data->m2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Isınma Türü</td>
                                                    <td>{{$data->warming}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Statü</td>
                                                    <td>{{$data->status}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <div class="product-review">
                                        <div class="media-body">
                                            @foreach($reviews as $rs)
                                                <div class="single-review">
                                                    <div class="review-heading">
                                                        <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user->name}} </a> </div>
                                                        <div><a href="#"><i class="fa fa-clock-o"></i>{{$rs->created_at}} </a> </div>
                                                        <div class="review-body">
                                                            <strong>{{$rs->subject}}</strong>
                                                            <p>{{$rs->review}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                                <div class="col-md-12">
                                                    @livewire('review', ['id'=>$data->id])
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <br><br><br><br><br><br><br><br><br><br><br><br>


                            <div class="sidebar">
                                <div class="widget price text-center">
                                    <h3>Fiyat</h3>
                                    <h3>{{$data->price}}</h3>
                                </div>
                            </div>
                            <div class="sidebar">
                                <div class="widget price text-center">
                                    <h3>İletişim Bilgileri</h3>
                                    <h3>{{$data->telno}}</h3>
                                </div>
                            </div>
                            <div class="sidebar">
                                <div class="widget price text-center">
                                    <h3>Adres</h3>
                                    <h5>{{$data->address}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</div>
@include('home._footer')
</body>
</html>
