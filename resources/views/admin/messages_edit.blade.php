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
            <h3 class="card-title">Mesaj Detayları</h3>
            @include('home.message')
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-body">
                            <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card">

                                    <table id="zero_config" class="table table-striped table-bordered">

                                        <tr>
                                            <th>Id</th><td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th><td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th> <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Telefon</th><td>{{$data->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th>Konu</th><td>{{$data->subject}}</td>
                                        </tr>
                                        <tr>
                                            <th>Mesaj</th><td>{{$data->message}}</td>
                                        </tr>
                                        <tr>
                                            <th>Admin Not</th><td><textarea id="note" name="note">{{$data->note}}</textarea></td>

                                        </tr>
                                        <tr>
                                            <td></td><td>
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-primary">Mesajı Güncelle</button>
                                            </div>
                                        </td>
                                        </tr>
                                    </table>
                                </div>
                                        <div class="border-top">

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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
