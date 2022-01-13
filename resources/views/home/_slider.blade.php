<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Kiralık Daireler</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->
            <div class="col-lg-12">
                <div class="trending-ads-slide">
                    @foreach($slider as $rs)
                        @if($rs->status == 'True')
                    <div class="col-sm-12 col-lg-4">
                        <!-- product card -->
                        <div class="product-item bg-light">
                            <div class="card">
                                <div class="thumb-content">
                                    <!-- <div class="price">$200</div> -->
                                    <a href="single.html">
                                        <img class="card-img-top img-fluid" src="{{ Storage::url($rs->image)}}" style="height: 275px" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a></h4>
                                    <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <a><i class="fa fa-money"></i>{{$rs->price}} TL</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a ><i class="fa fa-map-marker"></i>{{$rs->address}} TL</a>
                                        </li>
                                    </ul>
                                    <p class="card-text"> {{$rs->description}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
