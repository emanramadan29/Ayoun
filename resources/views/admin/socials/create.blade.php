@extends('admin.layouts.app')
@section('title', 'Socials')
@section('sitetitle', 'Dashboard | Create Social')
@section('Socials', 'active')
@section('content')


<section class="content">
  <!-- COLOR PALETTE -->
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-header with-border">
       <h3 class="box-title">Add a Social Media</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form role="form" method="POST" action="{{url(LaravelLocalization::getCurrentLocale().'/admin/socials')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
           <div class="box-body">

            <div class="form-group">
              <label for="name">Name :</label>
              <select id="name" name="name" class="form-control">
                <option value="bitbucket">Bitbucket</option>
                <option value="dropbox">Dropbox</option>
                <option value="facebook">Facebook</option>
                <option value="flickr">Flickr</option>
                <option value="foursquare">Foursquare</option>
                <option value="github">Github</option>
                <option value="google">Google</option>
                <option value="instagram">Instagram</option>
                <option value="linkedin">Linkedin</option>
                <option value="tumblr">Tumblr</option>
                <option value="twitter">Twitter</option>
                <option value="vk">VK</option>
              </select>
            </div>

            <div class="form-group">
              <label for="link">Link :</label>
              <input type="link" class="form-control" id="link" name="link"> </input>
            </div>

            <hr>

            <div class="form-group center">
              <div class="col-md-offset-2 col-md-4">
                <a href="/admin/socials" class="btn btn-block btn-danger" role="button">Cancel</a>
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
