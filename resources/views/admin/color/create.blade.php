@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box box-default color-palette-box ">
            <div class="box-header with-border">
                <h3 class="box-title">@lang('lang.Additem')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="{{url(LaravelLocalization::getCurrentLocale().'/admin/color')}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body col-md-6 col-sm-offset-1">

                        <div class="form-group {{ $errors->has('titleAr') ? ' has-error' : '' }}">
                            <label for="titleAr">@lang('lang.colorAr')</label>
                            <input type="text" id="myname_ar" name="titleAr" class="form-control"  value="{!! old('titleAr') !!}" />
                            <span class="help-block">{{ $errors->first('titleAr', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('titleEn') ? ' has-error' : '' }}">
                            <label for="titleEn">@lang('lang.colorEn')</label>
                            <input type="text" id="myname_en" name="titleEn" class="form-control" value="{!! old('titleEn') !!}" />
                            <span class="help-block">{{ $errors->first('titleEn', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('color') ? ' has-error' : '' }}">

                            <input  type="color" id="color" name="color" style="width: 50px; border-radius: 50%" class="form-control" value="{!! old('color') !!}" />
                            <span class="help-block">{{ $errors->first('color', ':message') }}</span>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group center">
                        <div class="col-md-offset-2 col-md-4">
                            <a href="/admin/color" class="btn btn-block btn-danger" role="button">@lang('lang.Cancel')</a>
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
