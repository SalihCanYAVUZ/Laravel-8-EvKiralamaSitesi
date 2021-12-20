<!DOCTYPE html>
<html lang="en">
<head>


    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EvciKus-Kullanıcı İlanları</title>

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


    <div class="row">
        <!-- SIDEMENU -->
        <div class="col-md-3">
            @include('home.usermenu')
        </div>

        <div class="col-md-8">
            <div class="card-body"><a href="{{route('user_house_add')}}"><button type="button" class="btn btn-outline-dark">
                        Ev Ekle
                    </button></a></div>
            @include('home.message')
        <h5 class="card-title"></h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Kategori</th>
                    <th>Başlık</th>
                    <th>Adres</th>
                    <th>Fiyat</th>
                    <th>Tel No</th>
                    <th>Balkon Sayısı</th>
                    <th>Metre Kare</th>
                    <th>Resim</th>
                    <th>Galeri</th>
                    <th>Statü</th>
                    <th>Düzenle&Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datalist as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                        <td><a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a></td>
                        <td>{{$rs->address}}</td>
                        <td>{{$rs->price}}</td>
                        <td>{{$rs->telno}}</td>
                        <td>{{$rs->balcony}}</td>
                        <td>{{$rs->m2}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                            @endif
                        </td>
                        <td><a href="{{route('user_image_add',['house_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                <img src="{{asset('assets/admin/images')}}/gallery.png" height="30"></a>
                        </td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('user_house_edit',['id'=> $rs->id])}}"><i class=" fa fa-cog">&nbsp;&emsp;&emsp;   </i></a>
                            <a href="{{route('user_house_delete', ['id'=> $rs->id])}}" onclick="return confirm ('Are you sure?')" ><i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>


            </table>

        </div>
    </div>
</div>



@include('home._footer')
<script src="{{asset('assets')}}/admin/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets')}}/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets')}}/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="{{asset('assets')}}/admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('assets')}}/admin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('assets')}}/admin/dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="{{asset('assets')}}/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="{{asset('assets')}}/admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="{{asset('assets')}}/admin/assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>
</body>

</html>
