@extends('layouts.head')
@section('content')
<!--************** Start Carousel ****************-->
<div id="ayooncarousel" class="carousel slide" data-ride="carousel">
    <div class="middle">
        <small>DISCOVER YOUR NEW ADDICTION</small><br><br>
        <h4>Mineral Based Makeup Products</h4><br>
        <a href="#">Shop Now</a>
    </div>
    <div class="carousel-inner">


        <div class="carousel-item active">
            <img src="{{asset('imgs/sliders/'.$first->img)}}" class="d-block w-100">
        </div>

    @foreach($sliders as $slide)
            <div class="carousel-item">
                <img src="{{asset('imgs/sliders/'.$slide->img)}}" class="d-block w-100">
            </div>
        @endforeach
    </div>
</div>
<!--************** Start Banner ****************-->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 first">
                <div class="overlay"></div>
                <img src="{{asset('imgs/'.$photo->img)}}" class="d-block w-100">
                <!--************** Text On banner images ****************-->
                <div class="middle-banner">
                    <small>DISCOVER YOUR NEW ADDICTION</small><br><br>
                    <h4>Mineral Based Makeup Products</h4><br>
                    <a href="#">Shop Now</a>
                </div>
            </div>
            <div class="col-md-6 col-12 second">
                <div class="overlay"></div>
                <img src="{{asset('imgs/'.$photo2->img)}}" class="d-block w-100">
                <div class="middle-banner">
                    <small>DISCOVER YOUR NEW ADDICTION</small><br><br>
                    <h4>Mineral Based Makeup Products</h4><br>
                    <a href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    Start features-item -->
<div class="features-item">
    <div class="container">
        <div class="owl-carousel owl-theme">

            @foreach($products as $product)
            <div class="item">
                <img src="{{asset('imgs/products/'.$product->img)}}" height="280">
                <div class="over"></div>
                <div class="overlay-right">
                    <p>Quick View</p>
                </div>
                <div class="product-bottom text-center">
                    <h6>Product price</h6>
                    <p>{{$product->priceA}}SR</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<!--    Start banner two-->

<div class="banner-two">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="{{asset('imgs/'.$photo1->img)}}" >

                <!--************** Text On banner images ****************-->
                <div class="middle-banner" style="left: 10%; top: 20%;">
                    <small>PICK UP YOUR MAKEUP</small><br><br>
                    <h4>New Service - Collect in Store </h4><br>
                    <a href="#">Shop Now</a>
                </div>
            </div>
            <div class="col-md-7">
                <img src="{{asset('imgs/'.$photos2->img)}}" >

                <!--************** Text On banner images ****************-->
                <div class="middle-banner" style="left: 10%; top: 15%;">
                    <small>ALL ABOUT THE BASE </small><br><br>
                    <h4>Nude Liquid<br>Matte Foundation</h4><br>
                    <a href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- *************** Start More Item Carousel *********************-->
<div class="mainslider">
    <div class="container">
        <h4 class="text-center">  Join the Ayoonk Makeup Community</h4>
        <div class="slickslider">
            @foreach($productss as $products)
            <div class="item">
                <img src="{{asset('imgs/products/'.$products->img)}}" height="200">
                  <div class="over1" style="height: 200px">
                    <div class="icon">
                        <span><i class="far fa-heart"></i> 2 </span>
                        <span><i class="far fa-comment"></i> 2 </span>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
@endsection
