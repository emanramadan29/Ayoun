@extends('admin.layouts.app')
@section('title', 'About Us')
@section('sitetitle', 'Dashboard | Show About Us')
@section('About', 'active')
@section('content')

<section class="content">
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-body">
        <div class="box-header with-border">
          <h3 class="box-title">Show : {{ $about->title}}</h3>
        </div>
          <div class="box-header with-border">
            <h3 class="box-title">{{ $about->title}}</h3>
          </div>
            <strong>Name</strong>
            <p>{{ $about->title}}</p>
            <hr>
            <strong>Body</strong>
            <p>{{ $about->body}}</p>
            <hr>
            <div class="col-md-4">
              <a href="/admin/abouts" class="btn btn-block btn-primary">Go Back</a>
            </div>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
</section> 
@stop