<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  
  {{-- includes styles --}}
  @include("admin.layouts.styles")

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  {{-- include header --}}
  @include("admin.layouts.header")

 {{-- include left_sidebar --}}
 @include("admin.layouts.left_sidebar")

  <!-- Content Wrapper. Contains page content -->
   {{-- dynamic content --}}
    
    @section("content")
    @show

   {{-- include footer --}}
   @include("admin.layouts.footer")

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
{{-- include scripts --}}
@include("admin.layouts.scripts")

</body>
</html>
