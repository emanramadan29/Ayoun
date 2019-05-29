@extends('admin.layouts.app')
@section('title', 'Socials')
@section('sitetitle', 'Dashboard | All Socials')
@section('Socials', 'active')
@section('content')

<section class="content">
  <!-- COLOR PALETTE -->
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Social Media</h3>
        <a href="/admin/socials/create" class="btn btn-info pull-right">Add Social Media</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

      @if(count($socials) > 0)
        @foreach($socials as $social)
          <div class="box-body">
            <div class="col-md-9">
              <a href="{{ $social->link}}" class="btn btn-block btn-social btn-{{ $social->name}}">
                <i class="fa fa-{{ $social->name}}"></i> {{ $social->link}}
              </a>
            </div>
            <div class="col-md-3">
                <a href="socials/{{ $social->id}}" class="btn btn-warning">View</a>
                <a href="socials/{{ $social->id}}/edit" class="btn btn-primary">Edit</a>
                <a class="btn"> 
                <form action="{{action('SocialController@destroy', $social['id'])}}" method="post">
                  {{csrf_field()}}
                  <input name="_method" type="hidden" value="DELETE">
                  <button  type="submit" class="btn btn-block btn-danger">Delete</button >
                </form></a>
            </div>
          </div>
        @endforeach
      @endif
      </div>
    </div>
  </div>
</section>
@stop