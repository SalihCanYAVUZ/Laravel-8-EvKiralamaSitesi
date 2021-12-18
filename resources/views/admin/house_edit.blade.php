    @extends('layouts.admin')

    @section('title', 'Edit House Page')
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
                        <h4 class="page-title">Edit House</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit House</li>
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
                            <form role="form" action="{{route('admin_house_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row">
                                         <label>Category</label>
                                         <div class="col-md-12">
                                             <select class="form-control select2" name="category_id" >
                                                 @foreach($datalist as $rs)
                                                     <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                                         {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                                                     </option>
                                                 @endforeach
                                             </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label>Başlık</label>
                                        <div class="col-md-12">
                                            <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label>Anahtar Kelime</label>
                                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                        </div>
                                    <div class="form-group row">
                                        <label>Açıklama</label>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label>Fiyat</label>
                                        <input type="number"  name="price" value="{{$data->price}}" class="form-control">
                                    </div>
                                        <div class="form-group row">
                                            <label>Isınma Tipi</label>
                                            <select class="form-control select2" name="warming" style="width: 100%;">
                                                <option selected="selected">{{$data->warming}}</option>
                                                <option>Doğalgaz</option>
                                                <option >Sobalı</option>
                                                <option >Sobalı</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label>Balkon Sayısı</label>
                                            <input type="number"  name="balcony" value="{{$data->balcony}}" class="form-control">
                                        </div>
                                        <div class="form-group row">
                                            <label>Metre Kare</label>
                                            <input type="number"  name="m2" value="{{$data->m2}}" class="form-control">
                                        </div>
                                        <div class="form-group row">
                                            <label>Adres</label>
                                            <input type="text" name="address" value="{{$data->address}}" class="form-control"></div>
                                    <div class="form-group row">
                                    </div>
                                    <div class="form-group row">
                                        <label>Detay</label>
                                        <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'detail' );
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                    </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image"  class="form-control">

                                            @if ($data->image)
                                                <img src="{{Storage::url($data->image)}}" height="60">
                                            @endif
                                        </div>

                                        <div class="form-group row">
                                            <label>Status</label>
                                            <select class="form-control select2" name="status" style="width: 100%;">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option >False</option>

                                            </select>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-primary">Update House</button>
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
