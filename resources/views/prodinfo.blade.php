@extends('layouts.head')
@section('content')
<!--************************ prod info ***************************-->
<div class="prod-info">
<div class="container">
    @foreach($prodinfos as $prodinfo)
<div class="row">
    <div class="col-md-6">
        <img src="{{asset('imgs/products/'. $prodinfo->img)}}" alt="">
        <br>
        <p>{{$prodinfo->textAr}}</p>
    </div>
    <div class="col-md-6 info-txt">
        <p>I'm a product</p>
        <span class="old-pric">item price{{$prodinfo->priceB}}</span> <span class="nw-pric">New price{{$prodinfo->priceA}}</span>
        <div class="puts">
            <p>Quantity :</p>
            <input type="number" value="0">
        </div>
        <button class="btn btn-primary">Add To Cart</button>
        <hr>
        <div class="infooo">
            <div class="clickable-head">
                <p class="showone">PRODUCT INFO  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fas fa-plus"></i> </p>
            </div>
            <div class="view-info">
                <p>{{$prodinfo->textAr}}</p>
            </div>
        </div>
        <div class="infooo">
            <div class="clickable-head">
                <p class="showtwo">RETURN & REFUND POLICY  &nbsp; &nbsp; <i class="fas fa-plus"></i> </p>
            </div>
            <div class="view-info2">
                <p>I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
            </div>
        </div>
         <div class="infooo">
            <div class="clickable-head">
                <p class="showthree">SHIPPING INFO &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <i class="fas fa-plus"></i> </p>
            </div>
            <div class="view-info3">
                <p>I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
            </div>
        </div>
    </div>
</div>
        @endforeach
</div>
</div>
  <!--    Start Footer-->
@endsection
