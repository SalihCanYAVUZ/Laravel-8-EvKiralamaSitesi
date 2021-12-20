<!DOCTYPE html>
<html lang="en">
<head>


    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EvciKus-Üye İlan Ekleme </title>

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

</head>

<body>


@include('home._header')
<!-- SIDEMENU -->
<div class="col-md-3">
    @include('home.usermenu')
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <form action="{{route('user_house_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="p-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 py-2">
                                    <label>Kategori</label>
                                    <select class="select2 form-select shadow-none" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Başlık</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Başlık">
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Anahtar Kelime</label>
                                    <input type="text" placeholder="Anahtar Kelime" name="keywords" class="form-control" required>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Açıklama</label>
                                    <input type="text" placeholder="Açıklama" name="description" class="form-control" required>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Fiyat</label>
                                    <input type="number" name="price" value="0" class="form-control" required>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Telefon Numarası</label>
                                    <input type="text" name="telno" class="form-control" required>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Adres</label>
                                    <input type="text" placeholder="Adres" name="address" class="form-control" required>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Isınma Tipi</label>
                                    <select class="form-control select2" name="warming" style="width: 100%;">
                                        <option selected="selected">Doğalgaz</option>
                                        <option>Sobalı</option>
                                        <option>Klima</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Balkon Sayısı</label>
                                    <input type="number" value="0" name="balcony" class="form-control">
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Metre Kare</label>
                                    <input type="number" value="0" name="m2" class="form-control">
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Detay</label>
                                    <textarea id="detail" name="detail" placeholder="Açıklama"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'detail' );
                                    </script>
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Slug</label>
                                    <input type="text" name="slug" class="form-control">
                                </div>
                                <div class="col-lg-12 py-2">
                                    <label>Resim</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        <div class="btn-grounp">
                            <button type="submit" class="btn btn-primary mt-2 float-right">GÖNDER</button>
                        </div>
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
