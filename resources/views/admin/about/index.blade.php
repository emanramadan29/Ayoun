@extends('admin.layouts.app')
@section('title', 'About Us')
@section('sitetitle', 'Dashboard | All About Us')
@section('About', 'active')
@section('content')

<section class="content">
  <!-- COLOR PALETTE -->
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-header with-border">
        <a href="/admin/abouts/create" class="btn btn-info pull-right">Add About Us</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered">
            <tbody>
              <tr>
                <th style="width: 2%">ID</th>
                  <th style="width: 40%">Body Arabic</th>
                  <th style="width: 40%">Body English</th>
                  <th style="width: 2%">img</th>

                  <th style="width: 20%"></th>
              </tr>
                @foreach($abouts as $about)
                  <tr>
                    <td>{{ $about->id}}</td>
                      <td>{{ $about->bodyAr}}</td>
                      <td>{{ $about->bodyEn}}</td>
                      <td> <img class="card-img-top" src="{{ asset('imgs/' . $about->img) }} " style="width: 50px;height: 50px;" >

                      <td>
{{--                      <a href="abouts/{{ $about->id}}" class="btn btn-warning ">View</a>--}}
                      <a href="abouts/{{ $about->id}}/edit" class="btn btn-primary ">Edit</a>
                      <a class="btn"> 
                      <form action="{{action('AboutController@destroy', $about['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button  type="submit" class="btn btn-danger">Delete</button >
                      </form></a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
      <!-- /.box -->
  </div>
</section>
@stop
