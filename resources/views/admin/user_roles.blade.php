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

<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Kullanıcı Rolleri</h3>
            @include('home.message')
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-body">

                                <div class="card">

                                    <table id="zero_config" class="table table-striped table-bordered">

                                        <tr>
                                            <th>Id</th><td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>İsim</th><td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th> <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Roller</th>
                                            <td>
                                                <table>
                                                    @foreach($data->roles as $row)
                                                        <tr>
                                                            <td>{{$row->name}}</td>
                                                            <td>
                                                                <a href="{{route('admin_user_role_delete',['userid' => $data->id,'roleid'=>$row->id])}}" onclick="return confirm ('Are you sure?')" ><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Rol Ekle</th>
                                            <td>
                                                <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <select name="roleid">
                                                        @foreach($datalist as $rs)
                                                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn btn-primary">Rol Ekle</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
