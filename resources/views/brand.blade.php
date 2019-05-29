@extends('layouts.head')
@section('content')

<!--************** Start Brands *******************-->
<div class="brands">
<div class="container">
<div class="row text-center">
    @foreach($companys as $company)
    <div class="col-md-4">
        <img src="{{asset('imgs/'.$company->img)}}" width="50%">
    </div>
        @endforeach

</div>
</div>
</div>


  <!--    Start Footer--> 
@endsection
