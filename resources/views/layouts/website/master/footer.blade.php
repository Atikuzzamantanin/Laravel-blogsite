
</div>
<div class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>{{$footer->description}}</p>
            </div>
            <div class="col-md-3 ml-auto">
                <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
                <ul class="list-unstyled float-left mr-5">
                    <li><a href="{{route('website')}}">Home</a></li>
                    <li><a href="{{route('website.about')}}">Abous Us</a></li>
                    <li><a href="{{route('website.contact')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4"><div>
                    <h3 class="footer-heading mb-4">Connect With Us</h3>
                <p>
                @if($footer->facebook)<a target="_blank" href="{{$footer->facebook}}"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>@endif
                @if($footer->twitter)<a target="_blank" href="{{$footer->twitter}}"><span class="icon-twitter p-2"></span></a>@endif
                @if($footer->instagram) <a target="_blank" href="{{$footer->instagram}}"><span class="icon-instagram p-2"></span></a>@endif
                @if($footer->gmail) <a target="_blank" href="{{$footer->gmail}}"><span class="icon-envelope p-2"></span></a>@endif
              </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p>
                   {{$footer->copyright}}
                </p>
            </div>
        </div>
    </div>
</div>

</div>

<script src="{{ asset('website') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('website') }}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{ asset('website') }}/js/jquery-ui.js"></script>
<script src="{{ asset('website') }}/js/popper.min.js"></script>
<script src="{{ asset('website') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('website') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('website') }}/js/jquery.stellar.min.js"></script>
<script src="{{ asset('website') }}/js/jquery.countdown.min.js"></script>
<script src="{{ asset('website') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('website') }}/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('website') }}/js/aos.js"></script>

<script src="{{ asset('website') }}/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="{{ asset('website') }}/../../gtag/js.js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');

</script>

</body>

</html>
