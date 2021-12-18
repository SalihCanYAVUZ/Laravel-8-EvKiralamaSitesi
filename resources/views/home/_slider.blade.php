<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Kiralık Daireler</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->
            <div class="col-lg-12">
                <div class="trending-ads-slide">
                    @foreach($slider as $rs)
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
                                    <div class="product-ratings">
                                        <ul class="list-inline">
                                            <div>
                                                <br>
                                                <a href="{{route('addtofav',['id'=>$rs->id])}}"><i style="font-size:28px;" class="fa fa-heart-o" ></i> </a>                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
