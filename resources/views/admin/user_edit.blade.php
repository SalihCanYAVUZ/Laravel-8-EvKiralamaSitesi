@extends('layouts.admin')

@section('title', 'Kullanıcı Bilgilerini Güncelle')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Kullanıcı Güncelle</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kullanıcı Güncelle</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label>İsim</label>
                                        <div class="col-md-12">
                                            <input type="text" id="name" name="name" value="{{$data->name}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label>Telefon</label>
                                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label>Adres</label>
                                        <input type="text"  name="address" value="{{$data->address}}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Resim</label>
                                        <input type="file" name="image"  class="form-control">

                                        @if ($data->profile_photo_path)
                                            <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                        @endif
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary">Güncelle</button>
                                        </div>
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

@endsection
