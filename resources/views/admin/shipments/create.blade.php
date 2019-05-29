@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box box-default color-palette-box ">
            <div class="box-header with-border">
                <h3 class="box-title">@lang('lang.AddShipment')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="{{url(LaravelLocalization::getCurrentLocale().'/admin/shipments')}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body col-sm-4 col-sm-offset-1">

                        <div class="form-group {{ $errors->has('Ship_num') ? ' has-error' : '' }}">
                            <label for="Ship_num">@lang('lang.Ship_num')</label>
                            <input type="text" id="Ship_num" name="Ship_num" class="form-control"  value="{!! old('Ship_num') !!}" />
                            <span class="help-block">{{ $errors->first('Ship_num', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('client') ? ' has-error' : '' }}">
                            <label for="client">@lang('lang.client')</label>
                            <input type="text" id="client" name="client" class="form-control" value="{!! old('client') !!}" />
                            <span class="help-block">{{ $errors->first('client', ':message') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone">@lang('lang.phone')</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{!! old('phone') !!}" />
                            <span class="help-block">{{ $errors->first('phone', ':message') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('product_num') ? ' has-error' : '' }}">
                            <label for="product_num">@lang('lang.product_num')</label>
                            <input type="text" id="product_num" name="product_num" class="form-control" value="{!! old('product_num') !!}" />
                            <span class="help-block">{{ $errors->first('product_num', ':message') }}</span>
                        </div>


                        <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount">@lang('lang.amount')</label>
                            <input type="number" id="amount" name="amount" class="form-control" value="{!! old('amount') !!}" />
                            <span class="help-block">{{ $errors->first('amount', ':message') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('color') ? ' has-error' : '' }}">
                            <label for="color">@lang('lang.color')</label>
                            <select id="color" name="color" class="form-control" style="height: 46px;">
                                @foreach ($items as $color)
                                    <option value="{{ $color->id }}" >{{ $color->titleEn}}</option>
                                @endforeach
                            </select>
                            <span class="help-block">{{ $errors->first('amount', ':message') }}</span>

                        </div>



                    <div class="form-group {{ $errors->has('confirm') ? ' has-error' : '' }}">
                        <label for="confirm">@lang('lang.confirm')</label> <br>
                        <input type="radio" name="confirm" value="@lang('lang.yConfirm')" >confirmed<br>
                        <input type="radio" name="confirm" value="@lang('lang.nConfirm')">not confirmed<br>
                        <span class="help-block">{{ $errors->first('confirm', ':message') }}</span>
                    </div>

                        <div class="form-group {{ $errors->has('shipping') ? ' has-error' : '' }}">
                            <label for="shipping">@lang('lang.shipping')</label> <br>
                            <input type="radio" name="shipping" value="@lang('lang.yShipping')"> Done <br>
                            <input type="radio" name="shipping" value="@lang('lang.nShipping')">Not yet<br>
                            <span class="help-block">{{ $errors->first('shipping', ':message') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('eval') ? ' has-error' : '' }}">
                            <label for="eval">@lang('lang.eval')</label> <br>
                            <input type="radio" name="eval"  value="@lang('lang.eEval')" >Excellent<br>
                            <input type="radio" name="eval" value="@lang('lang.gEval')"> Good<br>
                            <input type="radio" name="eval" value="@lang('lang.bEval')"> Bad)<br>

                            <span class="help-block">{{ $errors->first('shipping', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('notes') ? ' has-error' : '' }}">
                            <label for="notes">@lang('lang.notes')</label><br>
                            <textarea name="notes" style="width:200px;"></textarea>
                            <span class="help-block">{{ $errors->first('notes', ':message') }}</span>
                        </div>



                        <hr>


                        <div class="form-group center">

                            <div class="col-md-offset-2 col-md-4">
                                <a href="/admin/shipments" class="btn btn-block btn-danger" role="button">@lang('lang.Cancel')</a>
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-block btn-primary">@lang('lang.Add')</button>
                            </div>

                    </div>


            </form>

        </div>
        </div>
    </section>
@endsection
