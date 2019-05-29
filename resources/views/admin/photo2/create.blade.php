@extends('admin.layouts.app')
@section('title',__('lang.Home'))
@section('sitetitle',__('lang.Home'))


@section('content')
    <section class="content">
        <div class="box box-default color-palette-box ">
            <div class="box-header with-border">
                <h3 class="box-title">@lang('lang.Addphoto')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form method="POST" action="{{url(LaravelLocalization::getCurrentLocale().'/admin/photo2')}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body col-md-10 col-sm-offset-1">

                        <div class="form-group {{ $errors->has('img') ? ' has-error' : '' }}">
                            <label for="img">@lang('lang.Image')</label>
                            <input type="file" name="img"  class="form-control-file" id="img" aria-describedby="fileHelp">
                            <span class="help-block">{{ $errors->first('img', ':message') }}</span>
                        </div>

                    </div>

                        <hr>

                        <div class="form-group center">
                            <div class="col-md-offset-2 col-md-4">
                                <a href="/admin/photo2" class="btn btn-block btn-danger" role="button">@lang('lang.Cancel')</a>
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
