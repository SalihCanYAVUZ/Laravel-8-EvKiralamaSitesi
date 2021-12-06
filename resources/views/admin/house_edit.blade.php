    @extends('layouts.admin')

    @section('title', 'Edit House Page')
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
                            <form role="form" action="{{route('admin_house_update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row">
                                         <label class="col-md-3 mt-3">Parent</label>
                                         <div class="col-md-9">
                                            <select class="select2 form-select shadow-none" name="category_id">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}"@if($rs->id==$data->category_id) selected="selected" @endif > {{$rs->title}}  </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 mt-3">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label>Keywords</label>
                                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                        </div>
                                    <div class="form-group row">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label>Price</label>
                                        <input type="number" value="0" name="price" value="{{$data->price}}" class="form-control">
                                    </div><div class="form-group row">
                                            <label>Address</label>
                                            <input type="text" name="address" value="{{$data->address}}" class="form-control"></div>
                                    <div class="form-group row">
                                    </div>
                                    <div class="form-group row">
                                        <label>Detail</label>
                                        <input type="text" name="detail" value="{{$data->detail}}" class="form-control">
                                    </div>
                                        <label>Slug</label>
                                        <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                        <div class="form-group row">
                                            <label>Status</label>
                                            <select class="form-control select2" name="status" style="width: 100%;">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option >False</option>

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
                                                <button type="submit" class="btn btn-primary">Update House</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script src="{{asset('assets')}}/assets/libs/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap tether Core JavaScript -->
                <script src="{{asset('assets')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <!-- slimscrollbar scrollbar JavaScript -->
                <script src="{{asset('assets')}}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                <script src="{{asset('assets')}}/assets/extra-libs/sparkline/sparkline.js"></script>
                <!--Wave Effects -->
                <script src="{{asset('assets')}}/dist/js/waves.js"></script>
                <!--Menu sidebar -->
                <script src="{{asset('assets')}}/dist/js/sidebarmenu.js"></script>
                <!--Custom JavaScript -->
                <script src="{{asset('assets')}}/dist/js/custom.min.js"></script>
                <!-- This Page JS -->
                <script src="{{asset('assets')}}/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
                <script src="{{asset('assets')}}/dist/js/pages/mask/mask.init.js"></script>
                <script src="{{asset('assets')}}/assets/libs/select2/dist/js/select2.full.min.js"></script>
                <script src="{{asset('assets')}}/assets/libs/select2/dist/js/select2.min.js"></script>
                <script src="{{asset('assets')}}/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
                <script src="{{asset('assets')}}/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
                <script src="{{asset('assets')}}/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
                <script src="{{asset('assets')}}/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
                <script src="{{asset('assets')}}/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
                <script src="{{asset('assets')}}/assets/libs/quill/dist/quill.min.js"></script>
                <script>
                    //***********************************//
                    // For select 2
                    //***********************************//
                    $(".select2").select2();

                    /*colorpicker*/
                    $('.demo').each(function () {
                        //
                        // Dear reader, it's actually very easy to initialize MiniColors. For example:
                        //
                        //  $(selector).minicolors();
                        //
                        // The way I've done it below is just for the demo, so don't get confused
                        // by it. Also, data- attributes aren't supported at this time...they're
                        // only used for this demo.
                        //
                        $(this).minicolors({
                            control: $(this).attr('data-control') || 'hue',
                            position: $(this).attr('data-position') || 'bottom left',

                            change: function (value, opacity) {
                                if (!value) return;
                                if (opacity) value += ', ' + opacity;
                                if (typeof console === 'object') {
                                    console.log(value);
                                }
                            },
                            theme: 'bootstrap'
                        });

                    });
                    /*datwpicker*/
                    jQuery('.mydatepicker').datepicker();
                    jQuery('#datepicker-autoclose').datepicker({
                        autoclose: true,
                        todayHighlight: true
                    });
                    var quill = new Quill('#editor', {
                        theme: 'snow'
                    });

                </script>

    @endsection
