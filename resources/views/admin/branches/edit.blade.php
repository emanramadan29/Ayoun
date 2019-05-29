@extends('admin.layouts.app')
@section('title', 'Partners')
@section('sitetitle', 'Dashboard | Edit branches')
@section('branches', 'active')
@section('content')

<section class="content">
  <!-- COLOR PALETTE -->
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit : {{$branch->name}}</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <form role="form" method="POST" action="{{action('BranchController@update', $branch)}}" >
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
           <div class="box-body">
            
            <div class="form-group">
              <label for="name">Name :</label>
              <input type="name" class="form-control" id="name" name="name" value="{{$branch->name}}"></input>
            </div>

              <div class="form-group">
                <label for="address">Address :</label>
                <input type="address" class="form-control" id="address" name="address" value="{{$branch->address}}"> </input>
              </div>
              <div class="form-group">
                <label for="tel">Phone :</label>
                <input type="tel" class="form-control" id="tel" name="tel" value="{{$branch->tel}}"> </input>
              </div>
              <div class="form-group">
                <label for="fax">Fax :</label>
                <input type="fax" class="form-control" id="fax" name="fax" value="{{$branch->fax}}"> </input>
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$branch->email}}"> </input>
              </div>

            <hr>

            <div class="form-group center">
              <div class="col-md-offset-2 col-md-4">
                <a href="/admin/branches" class="btn btn-block btn-danger" role="button">Cancel</a>
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-block btn-primary">Update</button>
              </div>
            </div>
            
            </div>
        </form>
      </div>
    </div>
</section>

@stop
