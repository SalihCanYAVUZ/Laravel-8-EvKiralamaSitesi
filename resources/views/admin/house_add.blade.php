    @extends('layouts.admin')

    @section('title', 'Add House Page')
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
                        <h4 class="page-title">Add House</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add House</li>
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

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->


                        <div class="card-body">
                            <form role="form" action="{{route('admin_house_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body col-md-12">
                                        <div class="form-group row">
                                         <label>Category</label>
                                         <div class="col-md-12">
                                            <select class="select2 form-select shadow-none" name="category_id">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label>Başlık</label>
                                        <div class="col-md-12">
                                            <input type="text" id="title" name="title" class="form-control">
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label>Anahtar Kelime</label>
                                            <input type="text" name="keywords" class="form-control">
                                        </div>
                                    <div class="form-group row">
                                        <label>Açıklama</label>
                                        <input type="text" name="description" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label>Fiyatı</label>
                                        <input type="number" value="0" name="price" class="form-control">
                                    </div>
                                        <div class="form-group row">
                                            <label>Telefon Numarası</label>
                                            <input type="text"  name="telno" class="form-control">
                                        </div>
                                        <div class="form-group row">
                                            <label>Adres</label>
                                            <input type="text" name="address" class="form-control"></div>
                                    <div class="form-group row">
                                    </div>
                                        <div class="form-group row">
                                            <label>Isınma Tipi</label>
                                            <select class="form-control select2" name="warming" style="width: 100%;">
                                                <option selected="selected">Doğalgaz</option>
                                                <option>Sobalı</option>
                                                <option>Klima</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label>Balkon Sayısı</label>
                                            <input type="number" value="0" name="balcony" class="form-control">
                                        </div>
                                        <div class="form-group row">
                                            <label>Metre Kare</label>
                                            <input type="number" value="0" name="m2" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Detail</label>
                                            <textarea id="detail" name="detail"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'detail' );
                                            </script>
                                        </div>
                                        <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Resim</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div class="form-group row">
                                            <label>Status</label>
                                            <select class="form-control select2" name="status" style="width: 100%;">
                                                <option selected="selected">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-primary">Add House</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
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
