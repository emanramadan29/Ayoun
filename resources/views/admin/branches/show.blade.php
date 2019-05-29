@extends('admin.layouts.app')
@section('title', 'Partners')
@section('sitetitle', 'Dashboard | Show Branch')
@section('branches', 'active')
@section('content')

<section class="content">
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-body">
        
        <hr>
        <strong>Name :</strong>
        <p>{{ $branch->name}}</p>
        <hr>
        <strong>Address :</strong>
        <p>{{ $branch->address}}</p>
        <hr>
        <strong>Phone :</strong>
        <p>{{ $branch->tel}}</p>
        <hr>
        <strong>Fax :</strong>
        <p>{{ $branch->fax}}</p>
        <hr>
        <strong>Email :</strong>
        <p>{{ $branch->email}}</p>
        <hr>

        <hr>
          <div class="col-md-4">
            <a href="/admin/branches" class="btn btn-block btn-primary">Go Back</a>
          </div>
      </div>
    </div>
  </div>
</section>

@stop
