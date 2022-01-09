<!DOCTYPE html>
<html lang="en">
<head>


    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EvciKus-Kullanıcı Yorumları</title>

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

<body>


@include('home._header')

<div class="col-12">
    <div class="col-9 col-md-offset-3">
        <hr>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>İlan</th>
                <th>Yorum</th>
                <th>Oy</th>
                <th>Statü</th>
                <th>Tarih</th>
                <th>Sil</th>
            </tr>
            </thead>
            <tbody>
            @include('home.message')
            @foreach($datalist as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td><a href="{{route('house',['id'=> $rs->house->id, 'slug' => $rs->house->slug])}}" target="_blank">

                            {{$rs->house->title}}    </a>
                    </td>

                    <td>{{$rs->review}}</td>
                    <td>{{$rs->rate}}</td>
                    <td>{{$rs->status}}</td>
                    <td>{{$rs->updated_at}}</td>
                    <td>
                        <a href="{{route('user_review_delete',['id'=> $rs->id])}}" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash" </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div><! --/content-panel -->
    <div class="col-3">
        @include('home.usermenu')

    </div>
</div><!-- /col-md-12 -->


@include('home._footer')

</body>

</html>
