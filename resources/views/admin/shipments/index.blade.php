@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box-default color-palette-box">
            <div class="box">
                <div class="box-header with-border">
                    <a href="/admin/shipments/create" type="button" class="btn btn-info pull-right">@lang('lang.AddShipment')</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered text-center">
                        <tbody>
                        <tr>
                            <th style="width: 5%">@lang('lang.ID')</th>
                            <th style="width: 15%">@lang('lang.Ship_num')</th>
                            <th style="width: 15%">@lang('lang.client')</th>
                            <th style="width: 15%">@lang('lang.phone')</th>
                            <th style="width: 15%">@lang('lang.product_num')</th>
                            <th style="width: 15%">@lang('lang.amount')</th>
                            <th style="width: 15%">@lang('lang.color')</th>
                            <th style="width: 15%">@lang('lang.confirm')</th>
                            <th style="width: 15%">@lang('lang.shipping')</th>
                            <th style="width: 15%">@lang('lang.notes')</th>
                            <th style="width: 15%">@lang('lang.eval')</th>
                            <th style="width: 15%"></th>



                        {{--                        </tr>--}}
{{--                        <span id="dots">...</span><span id="more"></span>--}}
{{--                        <th style="width: 5%">@lang('lang.ID')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.Ship_num')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.client')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.phone')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.product_num')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.amount')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.color')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.confirm')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.shipping')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.notes')</th>--}}
{{--                        <th style="width: 15%">@lang('lang.eval')</th>--}}

                        @foreach($shipments as $ship)
                            <tr>
                                <td>{{$ship->id}}</td>
                                <td>{{ $ship->Ship_num }}</td>
                                <td>{{ $ship->client}}</td>
                                <td>{{ $ship->phone}}</td>

                                <td>{{ $ship->product_num}}</td>
                                <td>{{ $ship->amount}}</td>
                                <td>{{$ship->color}}</td>
                                <td>{{ $ship->confirm}}</td>
                                <td>{{ $ship->shipping}}</td>
                                <td>{{ $ship->notes}}</td>
                                <td>{{ $ship->eval}}</td>





                                <td>
                                    <a href="shipments/{{ $ship->id}}/edit" type="button" class="btn btn-info">@lang('lang.Edit')</a>
                                    <a class="btn">
                                        <form action="{{action('ShipController@destroy', $ship->id)}}" method="post">
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
                    <div class="box-footer clearfix">
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
