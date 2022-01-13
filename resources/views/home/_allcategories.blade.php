<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section title -->
                <div class="section-title">
                    <h2>Günün Beğenilenleri</h2>
                </div>
                <div class="row">

                    @foreach($daily as $rs)
                        @if($rs->status == 'True')
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-home icon-bg-1"></i>
                                <a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}"> <h4>{{$rs->address}}</h4></a>
                            </div>
                            <a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                <img src="{{ Storage::url($rs->image)}}" class="img-fluid" alt="" style="height: 200px"></a>
                            <ul class="category-list" >
                                <li class="list-inline-item"><a href="#"> <i class="fa fa-money"></i>
                                        {{$rs->price}}</a></li>
                                <li class="list-inline-item"><a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}"><i class="fa fa-check"></i>{{$rs->title}}</a></li>

                            </ul>
                        </div>
                    </div> <!-- /Category List -->
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</section>
