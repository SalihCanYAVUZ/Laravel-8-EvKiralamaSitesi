@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<footer class="footer section section-sm">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
                <!-- About -->
                <div class="block about">
                    <!-- footer logo -->
                    <a class="logo-footer" href="{{route('home')}}">
                    <img src="{{asset('assets')}}/images/logo.png" alt=""></a>
                    <!-- description -->
                    <p class="alt-color">
                        <strong>Şirket:  </strong>{{$setting->company}}<br>
                        <strong>Telefon:  </strong>{{$setting->phone}}<br>
                        <strong>Fax:  </strong>{{$setting->fax}}<br>
                        <strong>Email:  </strong>{{$setting->email}}<br>
                    </p>
                </div>
            </div>
            <!-- Link list -->
            <div class="col-lg-2 offset-lg-1 col-md-3">
                <div class="block">
                    <h4>Sayfalar</h4>
                    <ul>
                        <li><a href="{{route('contact')}}">İletişim</a></li>
                        <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                        <li><a href="{{route('references')}}">Referanslarımız</a></li>
                        <li><a href="{{route('login')}}">Giriş</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-12">
                <!-- Copyright -->
                <div class="copyright">
                    <p>Copyright © <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>. All Rights Reserved, {{$setting->company}}</p>
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <!-- Social Icons -->
                <ul class="social-media-icons text-right">
                    @if ($setting->facebook != null)<li><a class="fa fa-facebook" href='{{$setting->facebook}}' target="_blank"></a></li> @endif
                    @if ($setting->instagram != null)<li><a class="fa fa-instagram" href='{{$setting->instagram}}' target="_blank"></a></li> @endif
                    @if ($setting->twitter != null)<li><a class="fa fa-twitter" href='{{$setting->twitter}}' target="_blank"></a></li> @endif
                    @if ($setting->youtube != null)<li><a class="fa fa-youtube" href='{{$setting->twitter}}' target="_blank"></a></li> @endif

                </ul>
            </div>
        </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
        <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="{{asset('assets')}}/plugins/jQuery/jquery.min.js"></script>
<script src="{{asset('assets')}}/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap-slider.js"></script>
<!-- tether js -->
<script src="{{asset('assets')}}/plugins/tether/js/tether.min.js"></script>
<script src="{{asset('assets')}}/plugins/raty/jquery.raty-fa.js"></script>
<script src="{{asset('assets')}}/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="{{asset('assets')}}/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{asset('assets')}}/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="{{asset('assets')}}/plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{asset('assets')}}/plugins/google-map/gmap.js"></script>
<script src="{{asset('assets')}}/js/script.js"></script>
