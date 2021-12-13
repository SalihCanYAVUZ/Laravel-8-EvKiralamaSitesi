    @extends('layouts.admin')

    @section('title', 'Edit Category Page')

    @section('content')

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Category</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
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
                            <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row">
                                         <label class="col-md-5 mt-5">Sale or Rent</label>
                                         <div class="col-md-9">
                                            <select class="select2 form-select shadow-none" name="parent_id">
                                                <option value="{{$data->parent_id}}" selected="selected">Main Category</option>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}"@if($rs->id==$data->parent_id) selected="selected" @endif > {{$rs->title}}  </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label>Title</label>
                                        <div class="col-md-9">
                                            <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" value="{{$data->keywords}}"class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                    </div>
                                        <label>Slug</label>
                                        <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                        <div class="form-group row">
                                            <label>Status</label>
                                            <select class="form-control select2" name="status" style="width: 100%;">
                                                <option selected="selected">{{$data->title}}</option>
                                                <option>False</option>
                                                <option>True</option>
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3">File Upload</label>
                                            <div class="col-md-9">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input">
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-primary">Update Category</button>
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
