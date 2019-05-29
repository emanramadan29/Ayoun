@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box-default color-palette-box">
            <div class="box">
                <div class="box-header with-border">
                    <a href="/admin/photo2/create" type="button" class="btn btn-info pull-right">@lang('lang.Addphoto')</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered text-center">
                        <tbody>
                        <tr>
                            <th style="width: 5%">@lang('lang.ID')</th>
                            <th style="width: 15%">@lang('lang.Image')</th>

                            <th style="width: 20%"></th>
                        </tr>

                            @foreach($photos2 as $photo2)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> <img class="card-img-top" src="{{ asset('imgs/' . $photo2->img) }} " style="width: 50px;height: 50px;" >

                                    </td>

                                    <td>
                                        <a href="photo2/{{ $photo2->id}}/edit" type="button" class="btn btn-info">@lang('lang.Edit')</a>
                                        <a class="btn">
                                            <form action="{{action('Photo2Controller@destroy', $photo2->id)}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button  type="submit" class="btn btn-danger">@lang('lang.Delete')</button >
                                           @csrf
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="box-footer clearfix">
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
