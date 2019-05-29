@extends('admin.layouts.app')
@section('title', 'Socials')
@section('sitetitle', 'Dashboard | Edit Social')
@section('Socials', 'active')
@section('content')

<section class="content">
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-body">
        <div class="box-header with-border">
          <form role="form" method="POST" action="{{action('SocialController@update', $socials)}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="PATCH">
             <div class="box-body">
              
              <div class="form-group">
                <label for="name">Name :</label>
                <select id="name" name="name" class="form-control">
                  <option {{ $socials->name === "bitbucket" ? "selected" : "" }} value="bitbucket">Bitbucket</option>
                  <option {{ $socials->name === "youtube" ? "selected" : "" }} value="youtube">Youtube</option>
                  <option value="dropbox">Dropbox</option>
                  <option {{ $socials->name === "facebook" ? "selected" : "" }} value="facebook">Facebook</option>
                  <option {{ $socials->name === "flickr" ? "selected" : "" }} value="flickr">Flickr</option>
                  <option {{ $socials->name === "foursquare" ? "selected" : "" }} value="foursquare">Foursquare</option>
                  <option {{ $socials->name === "github" ? "selected" : "" }} value="github">Github</option>
                  <option {{ $socials->name === "google" ? "selected" : "" }} value="google">Google</option>
                  <option {{ $socials->name === "instagram" ? "selected" : "" }} value="instagram">Instagram</option>
                  <option {{ $socials->name === "linkedin" ? "selected" : "" }} value="linkedin">Linkedin</option>
                  <option {{ $socials->name === "tumblr" ? "selected" : "" }} value="tumblr">Tumblr</option>
                  <option {{ $socials->name === "twitter" ? "selected" : "" }} value="twitter">Twitter</option>
                  <option {{ $socials->name === "vk" ? "selected" : "" }} value="vk">VK</option>
                </select>
              </div>

              <div class="form-group">
                <label for="link">Link :</label>
                <input type="link" class="form-control" id="link" name="link" value="{{$socials->link}}"></input>
              </div>
              
              <hr>

              <div class="form-group center">
                <div class="col-md-offset-2 col-md-4">
                  <a href="/admin/socials" class="btn btn-block btn-danger" role="button">Cancel</a>
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