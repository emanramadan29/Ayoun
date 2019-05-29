@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box-default color-palette-box">
            <div class="box">
                <div class="box-header with-border">
                    <a href="/admin/color/create" type="button" class="btn btn-info pull-right">@lang('lang.Additem')</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered text-center">
                        <tbody>
                        <tr>
                            <th style="width: 5%">@lang('lang.ID')</th>
                            <th style="width: 15%">@lang('lang.titleAr')</th>
                            <th style="width: 15%">@lang('lang.titleEn')</th>
                            <th style="width: 15%">@lang('lang.color')</th>

                        </tr>

                        @foreach($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->titleAr}}</td>
                                <td>{{ $item->titleEn}}</td>
                                <th>  <input type="color" id="color" name="color" style="width: 200px;" class="form-control" value="{{$item->color}}" />
                                </th>

                                <td>
                                    <a href="color/{{ $item->id}}/edit" type="button" class="btn btn-info">@lang('lang.Edit')</a>
                                    <a class="btn">
                                        <form action="{{action('ColorController@destroy', $item->id)}}" method="post">
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
