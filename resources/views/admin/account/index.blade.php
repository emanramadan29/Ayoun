@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box-default color-palette-box">
            <div class="box">
                <div class="box-header with-border">
                    <a href="/admin/account/create" type="button" class="btn btn-info pull-right">@lang('lang.createAccount')</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered text-center">
                        <tbody>
                        <tr>
                            <th style="width: 5%">@lang('lang.ID')</th>
                            <th style="width: 15%">@lang('lang.nameAr')</th>
                            <th style="width: 15%">@lang('lang.nameEn')</th>
                            <th style="width: 15%">@lang('lang.gender')</th>
                            <th style="width: 15%">@lang('lang.countryAr')</th>
                            <th style="width: 15%">@lang('lang.countryEn')</th>
                            <th style="width: 15%">@lang('lang.cityAr')</th>
                            <th style="width: 15%">@lang('lang.cityEn')</th>
                            <th style="width: 15%">@lang('lang.phone')</th>
                            <th style="width: 15%">@lang('lang.email')</th>

                            <th style="width: 20%"></th>
                        </tr>


                        @foreach($acnts as $acnt)
                            <tr>
                                <td>{{ $acnt->id }}</td>

                                <td>{{ $acnt->nameAr }}</td>
                                <td>{{ $acnt->nameEn}}</td>
                                <td>{{ $acnt->gender}}</td>
                                <td>{{ $acnt->countryAr}}</td>
                                <td>{{ $acnt->countryEn}}</td>
                                <td>{{ $acnt->cityAr}}</td>
                                <td>{{ $acnt->cityEn}}</td>
                                <td>{{ $acnt->phone}}</td>
                                <td>{{ $acnt->email}}</td>


                                <td>
                                    <a href="account/{{ $acnt->id}}/edit" type="button" class="btn btn-info">@lang('lang.Edit')</a>
                                    <a class="btn">
                                        <form action="{{action('AccountController@destroy', $acnt->id)}}" method="post">
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
