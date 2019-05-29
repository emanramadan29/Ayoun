@extends('layouts.head')
@section('content')
<br><br>
<!--************************** Products **************************-->
<div class="products">
<div class="container">
<div class="row">
{{--    @foreach($products as $pro)--}}

{{--    <div class="col-md-3 prod">--}}
{{--        <img src="{{asset('imgs/products/'. $pro->img)}}" >--}}
{{--        <div class="overlay-bottom">--}}
{{--          <!-- Button trigger modal -->--}}
{{--<button type="button" class="btn btn-primary btnnn" data-toggle="modal" data-target="#exampleModal">--}}
{{--  Quick View--}}
{{--</button>--}}

{{--<!-- Modal -->--}}
{{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--  <div class="modal-dialog" role="document">--}}
{{--    <div class="modal-content">--}}
{{--      <div class="modal-header">--}}
{{--        <h5 class="modal-title" id="exampleModalLabel">Product View</h5>--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--          <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--      </div>--}}
{{--      <div class="modal-body">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <img src="{{asset('imgs/products/'. $pro->img)}}" >--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <p> product</p>--}}
{{--                    <p> price {{$pro->priceB}}<a href="/prodinfo/{{$pro->id}}">View Full Details</a></p>--}}
{{--                    <div class="puts">--}}
{{--                        <p>Quantity :</p>--}}
{{--                        <input type="number" value="0">--}}
{{--                        <span style="height: 10px; width:10px; border-radius: 50%; background-color: #605ca8; "></span>--}}
{{--                        <span style="height: 10px; width:10px; border-radius: 50%; background-color: #00a7d0; "></span>--}}
{{--                        <span style="height: 10px; width:10px; border-radius: 50%; background-color: #f0ad4e; "></span>--}}
{{--                    </div>--}}
{{--                    <button class="btn btn-primary">Add To Cart</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="modal-footer">--}}
{{--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @endforeach--}}

        @foreach($products as $pro)

        <div class="col-md-4 prod">
            <img src="{{asset('imgs/products/'. $pro->img)}}" alt="">
            <div class="overlay-bottom">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btnnn" data-toggle="modal" data-target="#exampleModal">
                    Quick View
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Product View</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('imgs/products/'. $pro->img)}}" >
                                        </div>
                                        <div class="col-md-6">
                                            <p> product</p>
                                            <p> price {{$pro->priceB}}<a href="/prodinfo/{{$pro->id}}">View Full Details</a></p>
                                            <p>Color :</p>
                                            <span style="display: inline-block; background-color: #f00; width: 20px; height: 20px; border-radius: 50%;"></span>
                                            <span style="display: inline-block; background-color: #00f; width: 20px; height: 20px; border-radius: 50%;"></span>
                                            <span style="display: inline-block; background-color: #f90; width: 20px; height: 20px; border-radius: 50%;"></span>

                                            <div class="puts">
                                                <p>Quantity :</p>
                                                <input type="number" value="0">
                                            </div>
                                            <button class="btn btn-primary">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

</div>

</div>
</div>





  <!--    Start Footer-->
@endsection
