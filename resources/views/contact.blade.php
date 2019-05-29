@extends('layouts.head')
@section('content')
<!--************************** Contact - header **************************-->
{{--<div class="about-header">--}}
{{--<div class="container">--}}
{{--<div class="row text-center">--}}
{{--    <div class="col-md-6">--}}
{{--        <img src="imgs/Contactone.jpg" height="70%" width="100%">--}}
{{--    </div>--}}
{{--    <div class="col-md-6">--}}
{{--        <img src="imgs/contact2.jpg" height="70%" width="100%">--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<!--************************** Contact - form **************************-->
<div class="contact-form ">
<div class="container">
    <h4 class="text-center">Contact</h4>
<div class="row">
    <div class="col-md-3">
       <h6>CUSTOMER SERVICE</h6>
       <br>
        @foreach($branches as $branche)
       <small>{{$branche->tel}}</small><br>
            <small>{{$branche->email}}</small>
        @endforeach

    </div>
    <div class="col-md-3">
       <h6>HAVE A QUESTION?</h6>
       <br>
       <small>For questions or comments <br> about our products and services,<br> get in touch.</small>
    </div>
    <div class="col-md-3">
            <input type="text" placeholder="name">
            <input type="Email" placeholder="Email">
            <input type="Subject" placeholder="Subject">

    </div>
    <div class="col-md-3" style="margin-left: -20px;">
        <textarea name="" id="" cols="20" rows="4" placeholder="Message"></textarea><br>
        <input type="submit" value="Submit">
    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-3">
        <h6>OUR STORES</h6>
    </div>
    @foreach($branches as $branche)
    <div class="col-md-3">
        <small>{{$branche->address}}</small><br>
        <small>{{$branche->tel}}</small><br>
        <small>{{$branche->email}}</small>
    </div>
    @endforeach
</div>

<hr>

<div class="row">
    <div class="col-md-3">
        <h6>STOCKISTS</h6>
    </div>
    @foreach($branches as $branche)
        <div class="col-md-3">
            <small>{{$branche->address}}</small><br>
            <small>{{$branche->tel}}</small><br>
            <small>{{$branche->email}}</small>
        </div>
    @endforeach
</div>

</div>
</div>

    @endsection
