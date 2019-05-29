
@if(session('success'))
<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4><i class="icon fa fa-check"></i> @lang('lang.success')</h4>
<p id="su">{{session('success')}}</p>
</div>
@endif

@if(session('errorss'))
<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4><i class="icon fa fa-check"></i> errors</h4>
{{session('errorss')}}
</div>
@endif
