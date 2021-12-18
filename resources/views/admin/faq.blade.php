@extends('layouts.admin')

@section('title', 'Frequently Asked Question List')
@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h3 class="page-title">Sıkça Sorulan Sorular</h3>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sıkça Sorulan Sorular </li>
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
                                <div class="row">
                                    <div class="card-body"><a href="{{route('admin_faq_add')}}"><button type="button" class="btn btn-outline-dark">
                                                SSS Ekle
                                            </button></a>
                                    @include('home.message')
                                    </div>
                                </div>
                                <h5 class="card-title"></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Pozisyon</th>
                                            <th>Soru</th>
                                            <th>Cevap</th>
                                            <th>Statü</th>
                                            <th>Düzenle&Sil</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->position}}</td>
                                            <td>{{$rs->question}}</td>
                                            <td>{!! $rs->answer !!}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_faq_edit',['id'=> $rs->id])}}"><i class="me-2 mdi mdi-eyedropper"></i></a>
                                            <a href="{{route('admin_faq_delete', ['id'=> $rs->id])}}" onclick="return confirm ('Are you sure?')" ><i class="me-2 mdi mdi-close-outline"></i>
                                                </a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>


                                    </table>
                                    <div class="row"><div class="col-sm-12 col-md-5">
                                        </div>
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
