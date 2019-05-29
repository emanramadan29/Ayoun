@extends('admin.layouts.app')
@section('title', 'About Us')
@section('sitetitle', 'Dashboard | Create About Us')
@section('About', 'active')
@section('content')

<section class="content">
  <!-- COLOR PALETTE -->
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-header with-border">
       <h3 class="box-title">Add About Us</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
      <form role="form" method="POST" action="{{url(LaravelLocalization::getCurrentLocale().'/admin/abouts')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
         <div class="box-body">

             <div class="form-group">
                 <label for="body">Body Arabic :</label>
                 <textarea type="body" class="form-control" id="body" name="bodyAr"> </textarea>
             </div>
             <div class="form-group">
                 <label for="body">Body English :</label>
                 <textarea type="body" class="form-control" id="body" name="bodyEn"> </textarea>
             </div>
             <div class="form-group {{ $errors->has('img') ? ' has-error' : '' }}">
                 <label for="img">@lang('lang.img')</label>
                 <input type="file" name="img"  class="form-control-file " id="img" aria-describedby="fileHelp" >
                 <span class="help-block">{{ $errors->first('img', ':message') }}</span>
             </div>

          <hr>

          <div class="form-group center">
            <div class="col-md-offset-2 col-md-4">
              <a href="/admin/abouts" class="btn btn-block btn-danger" role="button">Cancel</a>
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-block btn-primary">Add</button>
            </div>
          </div>

          </div>
      </form>
      </div>
    </div>
      <!-- /.box -->
  </div>
</section>

@stop
