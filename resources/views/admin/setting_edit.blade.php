@extends('layouts.admin')

@section('title', 'Edit Setting Page')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


@endsection
@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Setting</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Setting</li>
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
                <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12 col-sm-12">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#general">General</a></li>
                                    <li><a data-toggle="tab" href="#smtpsetting">Smtp Setting</a></li>
                                    <li><a data-toggle="tab" href="#socialmedia">Social Media</a></li>
                                    <li><a data-toggle="tab" href="#aboutuss">About Us</a></li>
                                    <li><a data-toggle="tab" href="#contactus">Contact</a></li>
                                    <li><a data-toggle="tab" href="#reference">References</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="general" class="tab-pane fade in active">
                                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                        <div class="form-group row">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{$data->title}}" class="form-control">
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
                                            <label>Company</label>
                                            <input type="text"  name="company" value="{{$data->company}}" class="form-control">
                                        </div><div class="form-group row">
                                            <label>Address</label>
                                            <input type="text" name="address" value="{{$data->address}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Fax</label>
                                            <input type="text" name="fax" value="{{$data->fax}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{$data->email}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Status</label>
                                            <select class="form-control select2" name="status" style="width: 100%;">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option >False</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="smtpsetting" class="tab-pane fade">
                                        <div class="form-group row">
                                            <label>Smtp Server</label>
                                            <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Smtp Email</label>
                                            <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Smtp Password</label>
                                            <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Smtp Port</label>
                                            <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control"></div>

                                    </div>
                                    <div id="socialmedia" class="tab-pane fade">
                                        <div class="form-group row">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Instagram</label>
                                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control"></div>
                                        <div class="form-group row">
                                            <label>Youtube</label>
                                            <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control"></div>
                                    </div>
                                    <div id="aboutuss" class="tab-pane fade">
                                        <div class="form-group row">
                                            <label>About Us</label>
                                            <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'aboutus' );
                                            </script>
                                        </div>
                                    </div>
                                    <div id="contactus" class="tab-pane fade">
                                        <div class="form-group row">
                                            <label>Contact</label>
                                            <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                            <script>
                                                CKEDITOR.replace('contact');
                                            </script>
                                        </div>
                                    </div>
                                    <div id="reference" class="tab-pane fade">
                                        <div class="form-group row">
                                            <label>References</label>
                                            <textarea id="references" name="references">{{$data->references}}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'references' );
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Update Setting</button>
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
    <script src="{{asset('assets')}}/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets')}}/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets')}}/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets')}}/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="{{asset('assets')}}/admin/dist/js/pages/dashboards/dashboard1.js"></script>
    <!-- Charts js Files -->
    <script src="{{asset('assets')}}/admin/assets/libs/flot/excanvas.js"></script>
    <script src="{{asset('assets')}}/admin/assets/libs/flot/jquery.flot.js"></script>
    <script src="{{asset('assets')}}/admin/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="{{asset('assets')}}/admin/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="{{asset('assets')}}/admin/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="{{asset('assets')}}/admin/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="{{asset('assets')}}/admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{asset('assets')}}/admin/dist/js/pages/chart/chart-page-init.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



@endsection
