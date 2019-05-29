@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box box-default color-palette-box ">
            <div class="box-header with-border">
                <h3 class="box-title">@lang('lang.updatAccount')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form method="POST"  action="{{action('AddProducts@update', $product->id)}}" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                    @csrf
                    <div class="box-body col-md-9 col-sm-offset-1">
                        <div class="form-group col-lg-6">
                            <label  for="filter">@lang('lang.choosebrandEn')</label>
                            <select id="brand" name="brandEn" class="form-control" style="height: 46px; width: 70%">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" >{{ $brand->titleEn }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="filter">@lang('lang.choosebrandAr')</label>
                            <select id="brand" name="brandAr" class="form-control" style="height: 46px;width: 70%">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" >{{ $brand->titleAr}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label  for="filter">@lang('lang.choosedeptEn')</label>
                            <select id="brand" name="deptEn" class="form-control" style="height: 46px; width: 70%">
                                @foreach ($depts as $dept)
                                    <option value="{{ $dept->id }}" >{{ $dept->titleEn }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label  for="filter">@lang('lang.choosedeptAr')</label>
                            <select id="brand" name="deptAr" class="form-control" style="height: 46px; width: 70%;">
                                @foreach ($depts as $dept)
                                    <option value="{{ $dept->id }}" >{{ $dept->titleAr }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label  for="filter">@lang('lang.chooseproductEn')</label>
                            <select id="brand" name="proEn" class="form-control" style="height: 46px;width: 70%">
                                @foreach ($products as $pro)
                                    <option value="{{ $pro->id }}" >{{ $pro->titleEn }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label  for="filter">@lang('lang.chooseproductAr')</label>
                            <select id="brand" name="proAr" class="form-control" style="height: 46px; width: 70%">
                                @foreach ($products as $pro)
                                    <option value="{{ $pro->id }}" >{{ $pro->titleAr }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group {{ $errors->has('stock') ? ' has-error' : '' }}">
                            <span style="font-weight: bold;text-align: center; margin-left: 400px;">@lang('lang.stock')</span>
                            <input type="number" name="stock" class="form-control" value="{!! old('stock') !!}" style="margin-left: 200px;"/>
                            <span class="help-block">{{ $errors->first('stock', ':message') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
                            <span style="font-weight: bold;text-align: center; margin-left: 400px;">@lang('lang.amount')</span>
                            <input type="number" name="amount" class="form-control" value="{!! old('amount') !!}" style="    margin-left: 200px;" />
                            <span class="help-block">{{ $errors->first('amount', ':message') }}</span>
                        </div>

                        <div class="form-group col-lg-6">
                            <label  for="filter">@lang('lang.choosecolorAr')</label>
                            <select id="brand" name="colorAr" class="form-control" style="height: 46px;width: 70%">
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}" >{{ $color->titleAr }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label  for="filter">@lang('lang.choosecolorEn')</label>
                            <select id="brand" name="colorEn" class="form-control" style="height: 46px;width: 70%">
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}" >{{ $color->titleEn }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group {{ $errors->has('textAr') ? ' has-error' : '' }}">
                            <label for="textAr">@lang('lang.Describe')</label>
                            <textarea class="textarea" name="textAr"
                                      style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('textAr') }}</textarea>
                            <span class="help-block">{{ $errors->first('textAr', ':message') }}</span>
                        </div>

                        <div class="form-group col-lg-6 {{ $errors->has('priceB') ? ' has-error' : '' }}">
                            <label for="price">@lang('lang.priceB')</label>
                            <input type="number" name="priceB" class="form-control" value="{!! old('price') !!}" style="height: 46px;width: 70%" />
                            <span class="input-group-addon" style="width: 50%">SR </span>
                            <span class="help-block">{{ $errors->first('price', ':message') }}</span>
                        </div>

                        <div class="form-group col-lg-6 {{ $errors->has('priceA') ? ' has-error' : '' }}">
                            <label for="price">@lang('lang.priceA')</label>
                            <input type="number" name="priceA" class="form-control" value="{!! old('price') !!}" style="height: 46px;width: 70%"/>
                            <span class="input-group-addon" style="width: 50%">SR  </span>
                            <span class="help-block">{{ $errors->first('price', ':message') }}</span>
                        </div>

                        <div class="form-group col-lg-12 {{ $errors->has('images') ? ' has-error' : '' }}">
                            <label for="images">@lang('lang.Image')</label>
                            <input type="file" name="img" multiple class="form-control-file" id="images" aria-describedby="fileHelp">
                            <span class="help-block">{{ $errors->first('images', ':message') }}</span>
                        </div>

                        <div class="form-group col-lg-6" >
                            <label for="url">@lang('lang.startAt')</label>
                            <input type="date" name="startAt" id="your_datepicker_id"  class="form-control"  value="" style="height: 46px;width: 70%"/>
                            <span class="help-block">{{ $errors->first('startAt', ':message') }}</span>
                        </div>

                        <div class="form-group col-lg-6" >
                            <label for="url">@lang('lang.endAt')</label>
                            <input type="date" name="endAt" id="datepicker"  class="form-control"  value="" style="height: 46px;width: 70%"/>
                            <span class="help-block">{{ $errors->first('endAt', ':message') }}</span>
                        </div>


                    </div>
            </form>
        </div>
        </div>
    </section>
@endsection
