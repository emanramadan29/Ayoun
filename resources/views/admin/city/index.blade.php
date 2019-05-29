@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box-default color-palette-box">
            <div class="box">
                <div class="box-header with-border">
                    <a href="/admin/city/create" type="button" class="btn btn-info pull-right">@lang('lang.Addcity')</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered text-center">
                        <tbody>
                        <tr>
                            <th style="width: 5%">@lang('lang.ID')</th>
                            <th style="width: 15%">@lang('lang.cityAr')</th>
                            <th style="width: 15%">@lang('lang.cityEn')</th>



                        </tr>

                        @foreach($cities as $city)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $city->cityAr}}</td>
                                <td>{{ $city->cityEn}}</td>

                                <td>
                                    <a href="city/{{ $city->id}}/edit" type="button" class="btn btn-info">@lang('lang.Edit')</a>
                                    <a class="btn">
                                        <form action="{{action('CityController@destroy', $city->id)}}" method="post">
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
                        {{--                        {{ $allCategories->links() }}--}}
                    </div>

                </div>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection
