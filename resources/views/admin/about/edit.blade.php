@extends('admin.layouts.app')
@section('title', 'About Us')
@section('sitetitle', 'Dashboard | Edit About Us')
@section('About', 'active')
@section('content')


<section class="content">
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-body">
        <div class="box-header with-border">

          <form role="form" method="POST" action="{{action('AboutController@update', $about)}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="PATCH">
             <div class="box-body">

              <div class="form-group">
                <label for="title">Body Arabic :</label>
                <input type="title" class="form-control" id="title" name="title" value="{{$about->bodyAr}}"></input>
              </div>
              
              <div class="form-group">
                <label for="body">Body English:</label>
                <input type="body" class="form-control" id="body" name="body" value="{{$about->bodyEn}}"> </input>
              </div>

                 <div class="form-group {{ $errors->has('img') ? ' has-error' : '' }}">
                     <label for="img">@lang('lang.Image')</label>
                     <input type="file"  name="img"  class="form-control-file" id="img" aria-describedby="fileHelp">
                     <img class="card-img-top" src="{{ asset('imgs/' . $about->img) }} " style="width:150px;height:150px;" >
                     <span class="help-block">{{ $errors->first('img', ':message') }}</span>
                 </div>

                 <hr>

              <div class="form-group center">
                <div class="col-md-offset-2 col-md-4">
                  <a href="/admin/abouts" class="btn btn-block btn-danger" role="button">Cancel</a>
                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-block btn-primary">Update</button>
                </div>
              </div>

              </div>
          </form>
      </div>
    </div>
    </div>
  </div>
</section>

@stop
