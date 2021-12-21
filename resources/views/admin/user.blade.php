@extends('layouts.admin')

@section('title', 'Kullanıcı Listesi')
@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h3 class="page-title">Kullanıcılar</h3>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kullanıcılar </li>
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

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="table-responsive">
                                    @include('home.message')
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th></th>
                                            <th>İsim</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>Adres</th>
                                            <th>Roller</th>
                                            <th colspan="3">Ayarlar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>
                                                @if($rs->profile_photo_path)
                                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                                @endif
                                            </td>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->phone}}</td>
                                            <td>{{$rs->address}}</td>
                                            <td>@foreach($rs->roles as $rol)
                                                {{$rol->name}},
                                                @endforeach
                                                <a href="{{route('admin_user_roles',['id'=> $rs ->id])}}" onclick="return !window.open(this.href,'','top=100 left=100 width=1100,height=700')">
                                                <i class="nav-icon fas fa-plus-circle"></i></a>
                                            </td>

                                            <td><a href="{{route('admin_user_edit',['id'=> $rs->id])}}"><i class="me-2 mdi mdi-eyedropper"></i></a>
                                            </td>

                                            <td><a href="{{route('admin_user_delete', ['id'=> $rs->id])}}" onclick="return confirm ('Are you sure?')" ><i class="me-2 mdi mdi-close-outline"></i>
                                                </a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection

@section('footer')

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
