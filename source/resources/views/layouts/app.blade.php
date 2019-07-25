<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>@yield('title')</title>
   <!-------CSS ------------------------------------------------------->
      <!-------font-awesome  ---->
   <link rel="stylesheet" href="{{asset('lib/font-awesome/css/fontawesome.min.css')}}">
      <!-------font-awesome-5  ---->
   <link rel="stylesheet" href="{{asset('lib/font-awesome-5/css/fontawesome.min.css')}}">
      <!-------adminlte  ---->
   <link rel="stylesheet" href="{{asset('lib/adminlte/css/adminlte.min.css')}}">
      <!-------bootstrap  ---->
   <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}">

   @stack('page-styles')
</head>

<body class="hold-transition sidebar-mini">
   <div class="wrapper">
     @include('layouts.navbar-header')
     
      @yield('content')
      
      @include('layouts.navbar-footer')

   </div>
    <!-------jquery  ---->
   <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
   
   <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="{{asset('lib/bootstrap.4.3.1/js/bootstrap.min.js')}}"></script>

    <!-------adminlte  ---->
   <script src="{{asset('lib/adminlte/js/adminlte.js')}}"></script>
    <!-------bootstrap  ---->
   <script  href="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
   @stack('page-scripts')
</body>

</html>