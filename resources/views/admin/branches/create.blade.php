@extends('admin.layouts.app')
@section('title', 'Branches')
@section('sitetitle', 'Dashboard | Create Branches')
@section('branches', 'active')
@section('content')


<section class="content">
  <!-- COLOR PALETTE -->
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Create Branch</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form role="form" method="POST" action="{{url(LaravelLocalization::getCurrentLocale().'/admin/branches')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
           <div class="box-body">
            
              <div class="form-group">
                <label for="name">Name :</label>
                <input type="name" class="form-control" id="name" name="name"> </input>
              </div>
              <div class="form-group">
                <label for="address">Address :</label>
                <input type="address" class="form-control" id="address" name="address"> </input>
              </div>
              <div class="form-group">
                <label for="tel">Phone :</label>
                <input type="tel" class="form-control" id="tel" name="tel"> </input>
              </div>
              <div class="form-group">
                <label for="fax">Fax :</label>
                <input type="fax" class="form-control" id="fax" name="fax"> </input>
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email"> </input>
              </div>

            <hr>
            <div class="form-group center">
              <div class="col-md-offset-2 col-md-4">
                <a href="/admin/branches" class="btn btn-block btn-danger" role="button">Cancel</a>
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
  <!-- /.box -->
</section>
@stop
