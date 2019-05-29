@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box box-default color-palette-box ">
            <div class="box-header with-border">
                <h3 class="box-title">@lang('lang.Addslider')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form method="POST" action="{{url(LaravelLocalization::getCurrentLocale().'/admin/slider')}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body col-md-10 col-sm-offset-1">

                        <div class="form-group {{ $errors->has('titleAr') ? ' has-error' : '' }}">
                            <label for="titleAr">@lang('lang.titleAr')</label>
                            <input type="text" id="myname_ar" name="titleAr" class="form-control"  value="{!! old('titleAr') !!}" />
                            <span class="help-block">{{ $errors->first('titleAr', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('titleEn') ? ' has-error' : '' }}">
                            <label for="titleEn">@lang('lang.titleEn')</label>
                            <input type="text" id="myname_en" name="titleEn" class="form-control" value="{!! old('titleEn') !!}" />
                            <span class="help-block">{{ $errors->first('titleEn', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('textAr') ? ' has-error' : '' }}">
                            <label for="textAr">@lang('lang.textAr')</label>
                            <textarea class="textarea" name="textAr"
                                      style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('textAr') }}</textarea>
                            <span class="help-block">{{ $errors->first('textAr', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('textEn') ? ' has-error' : '' }}">
                            <label for="textEn">@lang('lang.textEn')</label>
                            <textarea class="textarea" name="textEn"
                                      style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('textEn') }}</textarea>
                            <span class="help-block">{{ $errors->first('textEn', ':message') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('img') ? ' has-error' : '' }}">
                            <label for="img">@lang('lang.Image')</label>
                            <input type="file" name="img" multiple class="form-control-file" id="img" aria-describedby="fileHelp">
                            <span class="help-block">{{ $errors->first('img', ':message') }}</span>
                        </div>

                        <label for="url">@lang('lang.startAt')</label>
                        <input type="text" name="startAt" id="your_datepicker_id"  class="form-control"  value="" />
                        <span class="help-block">{{ $errors->first('startAt', ':message') }}</span>


                        <label for="url">@lang('lang.endAt')</label>
                        <input type="text" name="endAt" id="datepicker"  class="form-control"  value="" />
                        <span class="help-block">{{ $errors->first('endAt', ':message') }}</span>

                    </div>

                        <hr>

                        <div class="form-group center">
                            <div class="col-md-offset-2 col-md-4">
                                <a href="/admin/slider" class="btn btn-block btn-danger" role="button">@lang('lang.Cancel')</a>
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
