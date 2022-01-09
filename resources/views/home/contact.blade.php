<!DOCTYPE html>
<html lang="en">
<head>


    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EvciKus-İletişim</title>

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
            <div class="col-md-7">
                <h3 class="section-form">İletişim Bilgileri</h3>
                <div class="contact-us-content p-4">
                    {!! $setting->contact !!}
                </div>
            </div>
            <div class="col-md-5">
                <h3 class="section-form">İletişim Formu</h3>
                @include('home.message')
                <form action="{{route('sendmessage')}}" method="post" id="checkout-form">
                    @csrf
                    <fieldset class="p-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 py-2">
                                    <input type="text" placeholder="İsim Soyisim" name="name" class="form-control" required>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <input type="text" placeholder="Tel No" name="phone" class="form-control" required>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <input type="email" placeholder="Email" name="email" class="form-control" required>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <input type="text" placeholder="Konu" name="subject" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <textarea name="message" id=""  placeholder="Mesaj" class="border w-100 p-3 mt-3 mt-lg-4"></textarea>
                        <div class="btn-grounp">
                            <button type="submit" class="btn btn-primary mt-2 float-right">GÖNDER</button>
                        </div>
                    </fieldset>
                </form>
            </div>


        </div>
    </div>
</div>

@include('home._footer')

</body>

</html>
