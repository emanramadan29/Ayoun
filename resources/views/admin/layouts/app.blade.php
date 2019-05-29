<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"  dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

@include('admin.layouts.head')

<body class="hold-transition skin-yellow sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  {{-- header --}}

  @include('admin.layouts.header')

  <!-- =============================================== -->

  {{-- sidebar --}}

  @include('admin.layouts.aside')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
        {{-- <small>it all starts here</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> @lang('lang.Dashboard') </a></li>
        <li><a href="/home">@lang('lang.Admin')</a></li>
        <li class="active"> @yield('title')</li>
      </ol>
    </section>
    <div class="pad no-print">
       @include('messages')
    </div>
    
    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Development by <b><a href="http://orangesw.com" target="_blank">Orange Soft</a></b> 
    </div>
    <strong>Copyright &copy; 2018 <a href="/">Elite</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('admin/components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('admin/components/dist/js/bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('admin/components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admin/components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/components/distlte/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/components/distlte/js/demo.js')}}"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        linkField: "mirror_field",
        linkFormat: "yyyy-mm-dd hh:ii"
    });
</script>
    <script>
      $(document).ready(function () {
        $('.sidebar-menu').tree()
      });

      $(function() {
          $( "#your_datepicker_id" ).datepicker({
              dateFormat: 'yy-mm-dd',
              changeMonth: true,
              changeYear: true});
      });

      $(function() {
          $( "#datepicker" ).datepicker({
              dateFormat: 'yy-mm-dd',
              changeMonth: true,
              changeYear: true});
      });


</script>


    @yield('js')

</body>
</html>
