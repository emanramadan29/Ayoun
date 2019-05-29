@extends('admin.layouts.app')
@section('title', 'Branches')
@section('sitetitle', 'Dashboard | All Branches')
@section('branches', 'active')
@section('content')

<section class="content">
  <!-- COLOR PALETTE -->
  <div class="box box-default color-palette-box">
    <div class="box">
      <div class="box-header with-border">
            <a href="/admin/branches/create" class="btn btn-info pull-right">Add Branch</a>
          </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th style="width: 2%">ID</th>
              <th style="width: 10%">Name</th>
              <th style="width: 15%">Address</th>
              <th style="width: 10%">Phone</th>
              <th style="width: 10%">Fax</th>
              <th style="width: 10%">Email</th>
              <th style="width: 20%"></th>
            </tr>
              @if(count($branches) > 0)
                @foreach($branches as $branch)
                  <tr>
                    <td>{{ $branch->id}}</td>
                    <td>{{ $branch->name}}</td>
                    <td>{{ $branch->address}}</td>
                    <td>{{ $branch->tel}}</td>
                    <td>{{ $branch->fax}}</td>
                    <td>{{ $branch->email}}</td>
                    <td>
                      <a href="branches/{{ $branch->id}}" class="btn btn-warning">View</a>
                      <a href="branches/{{ $branch->id}}/edit" class="btn btn-primary">Edit</a>
                      <a class="btn"> 
                      <form action="{{action('BranchController@destroy', $branch['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button  type="submit" class="btn btn-danger">Delete</button >
                      </form></a>
                    </td>
                  </tr>
                @endforeach
              @endif
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.box -->
  </div>
  <!-- /.box -->
</section>

@stop
