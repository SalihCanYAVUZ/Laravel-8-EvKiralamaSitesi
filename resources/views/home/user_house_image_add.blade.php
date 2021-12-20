<html>
<head>
    <title>Image Gallery</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/admin/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{asset('assets')}}/admin/assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets')}}/admin/dist/css/style.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>
<body>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{$data->title}}</h4>
                        <div class="card-body">
                            <form role="form" action="{{route('user_image_store',['house_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                    <div class="form-group row">
                                        <label >Title</label>
                                        <div class="col-md-9">
                                            <input type="text" id="title" name="title" class="form-control">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-primary">Add Image</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $images as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('user_image_delete', ['id'=> $rs->id,'house_id'=>$data->id])}}" onclick="return confirm ('Are you sure?')" >
                                                <i class="me-2 mdi mdi-close-outline"></i>
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

</body>
</html>

