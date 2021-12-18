@extends('layouts.admin')

@section('title', 'Sıkça Sorulan Sorular Sayfası')
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
                    <h4 class="page-title">SSS Ekle</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">SSS Ekle</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <form role="form" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label>Pozisyon</label>
                                        <div class="col-md-12">
                                            <input type="number" id="position" name="position" value="0" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label>Soru</label>
                                        <div class="col-md-12">
                                            <input type="text" id="question" name="question" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Cevap</label>
                                        <textarea id="answer" name="answer"></textarea>
                                        <script>
                                            CKEDITOR.replace( 'answer' );
                                        </script>
                                    </div>
                                    <div class="form-group row">
                                        <label>Statü</label>
                                        <select class="form-control select2" name="status" style="width: 100%;">
                                            <option selected="selected">False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary">Ekle</button>
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
