@extends('layouts.head')
@section('content')
<!--******************** About - Header ********************-->

<div class="about-header">
    <div class="container">
        <div class="row text-center">
            @foreach($abouts as $about)
            <div class="col-md-6">
                <img src="{{asset('imgs/'.$about->img)}}" width="100%" height="60%">
            </div>
            @endforeach
        </div>

    </div>
</div>

<!--********************  About - Text   ********************-->
<div class="about-txt text-center">
<div class="container">
    <h6>THE <b>Ayoonk</b> STORY</h6><br>
    @foreach($aboutss as $abouts)
        <p>{{$abouts->bodyEn}}</p>
    @endforeach

</div>
</div>

<div class="row" style="width: 60%; margin: auto;">
    @foreach($aboutee as $aboute)

    <div class="col-md-2">
        <img src="{{asset('imgs/'.$aboute->img)}}" width="100%">
    </div>
    @endforeach

</div>

  <!--    Start Footer-->
@endsection
