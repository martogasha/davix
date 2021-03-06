@include('cPartials.header')
<title>Order - Success</title>
<div class="left_banner left-sidebar-widget mb_50 mt_30"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
</div>
<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
    <!-- =====  BANNER STRAT  ===== -->
    <div class="breadcrumb ptb_20">
        <h1>Order Success</h1>
        <ul >
            <li><a href="index-2.html">Home</a></li>
            <li class="active">Order Success</li>
        </ul>
    </div>
    <!-- =====  BREADCRUMB END===== -->

        <div class="panel-group mt_20" id="accordion">

            <div class="alert alert-success" role="alert">
                <h1 class="alert-heading">Order Placed Successfully!</h1>
                <p>Will Contact You Shortly</p>
                <hr>
                <br>
                <br>
                <a href="{{url('trackOrder')}}"><button class="btn btn-info">Track Order</button></a>
            </div>
        </div>
</div>
</div>
@include('cPartials.footer')
<a id="scrollup">Scroll</a>
<script src="js/jQuery_v3.1.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery-ui.js"></script>
