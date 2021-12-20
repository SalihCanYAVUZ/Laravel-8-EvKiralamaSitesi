<!DOCTYPE html>
<html lang="en">
<head>


    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EvciKus-Üye İlan Düzenleme </title>

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
                <form role="form" action="{{route('user_house_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 py-2">
                                <label>Kategori</label>
                                <select class="select2 form-select shadow-none" name="category_id">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-12 py-2">
                                <label>Başlık</label>
                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Anahtar Kelime</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Açıklama</label>
                                <input type="text" name="description" value="{{$data->description}}" class="form-control">
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Fiyat</label>
                                <input type="number"  name="price" value="{{$data->price}}" class="form-control">
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Telefon Numarası</label>
                                <input type="text"  name="telno" value="{{$data->telno}}" class="form-control">
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Adres</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control">
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Isınma Tipi</label>
                                <select class="form-control select2" name="warming" style="width: 100%;">
                                    <option selected="selected">{{$data->warming}}</option>
                                    <option>Doğalgaz</option>
                                    <option >Sobalı</option>
                                    <option >Klimalı</option>
                                </select>
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Balkon Sayısı</label>
                                <input type="number"  name="balcony" value="{{$data->balcony}}" class="form-control">
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Metre Kare</label>
                                <input type="number"  name="m2" value="{{$data->m2}}" class="form-control">
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Detay</label>
                                <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'detail' );
                                </script>
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Slug</label>
                                <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                            </div>
                            <div class="col-lg-12 py-2">
                                <label>Resim</label>
                                <input type="file" name="image" class="form-control">
                                @if ($data->image)
                                    <img src="{{Storage::url($data->image)}}" height="60">
                                @endif
                            </div>
                            <div class="btn-grounp">
                                <button type="submit" class="btn btn-primary mt-2 float-right">GÖNDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('home._footer')

</body>

</html>
