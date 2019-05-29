@extends('admin.layouts.app')
@section('title', 'Socials')
@section('sitetitle', 'Dashboard | Social')
@section('Socials', 'active')
@section('content')

<section class="content">
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-body">
        <div class="box-header with-border">
          <h3 class="box-title">Show : {{ $socials->name}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a class="btn btn-block btn-social btn-{{ $socials->name}}">
            <i class="fa fa-{{ $socials->name}}"></i> {{ $socials->link}}
          </a>
        </div>
        <hr>
        <div class="col-md-4">
          <a href="/admin/socials" class="btn btn-block btn-primary">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</section>
@stop