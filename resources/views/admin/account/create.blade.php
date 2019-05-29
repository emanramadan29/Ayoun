@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')

    <style>
    .form-control{
        width:50%;}

    </style>
    <section class="content">
        <div class="box box-default color-palette-box ">
            <div class="box-header with-border">
                <h3 class="box-title">@lang('lang.createAccount')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form method="POST" action="{{url(LaravelLocalization::getCurrentLocale().'/admin/account')}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body col-md-10 col-sm-offset-1">

                        <div class="form-group {{ $errors->has('nameAr') ? ' has-error' : '' }}">
                            <label for="nameAr">@lang('lang.nameAr')</label>
                            <input type="text" id="myname_ar" name="nameAr" class="form-control"  value="{!! old('nameAr') !!}" />
                            <span class="help-block">{{ $errors->first('nameAr', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('nameEn') ? ' has-error' : '' }}">
                            <label for="nameEn">@lang('lang.nameEn')</label>
                            <input type="text" id="myname_en" name="nameEn" class="form-control" value="{!! old('nameEn') !!}" />
                            <span class="help-block">{{ $errors->first('nameEn', ':message') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender">@lang('lang.gender')</label> <br>
                            <input type="radio" name="gender" value="@lang('lang.male')" checked> Male<br>
                            <input type="radio" name="gender" value="@lang('lang.female')"> Female<br>
                            <input type="radio" name="gender" value="@lang('lang.other')"> Other
                            <span class="help-block">{{ $errors->first('gendern', ':message') }}</span>
                        </div>



                        <div class="form-group">
                            <label  for="filter">@lang('lang.countryAr')</label>
                            <select id="countryAr" name="countryAr" class="form-control" style="height: 46px;">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" >{{ $country->countryAr }}</option>
                                @endforeach
                            </select></div>


                            <div class="form-group">
                                <label  for="filter">@lang('lang.countryEn')</label>
                                <select id="countryEn" name="countryEn" class="form-control" style="height: 46px;">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" >{{ $country->countryEn }}</option>
                                    @endforeach
                                </select></div>



                                <div class="form-group">
                                    <label  for="filter">@lang('lang.cityAr')</label>
                                    <select id="cityAr" name="cityAr" class="form-control" style="height: 46px;">
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}" >{{ $city->cityAr }}</option>
                                        @endforeach
                                    </select></div>

                                    <div class="form-group">
                                        <label  for="filter">@lang('lang.cityEn')</label>
                                        <select id="cityEn" name="cityEn" class="form-control" style="height: 46px;">
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}" >{{ $city->cityEn }}</option>
                                            @endforeach
                                        </select> </div>

                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone">@lang('lang.phone')</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{!! old('phone') !!}" />
                            <span class="help-block">{{ $errors->first('phone', ':message') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">@lang('lang.email')</label>
                            <input type="email" id="email" name="email" class="form-control" value="{!! old('email') !!}" />
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>


                        <hr>

                        <div class="form-group center">
                            <div class="col-md-offset-2 col-md-4">
                                <a href="/admin/account" class="btn btn-block btn-danger" role="button">@lang('lang.Cancel')</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-block btn-primary">@lang('lang.Add')</button>
                            </div>
                        </div>



                    </div>





                </form>
            </div>
        </div>
    </section>
@endsection
