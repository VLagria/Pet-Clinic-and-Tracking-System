<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.Name','Pet Clinic Admin') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('vendors/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 
 {{-- 1. Top Menu  --}}
 @include('layoutsadmin.topMenu')
 {{-- 2. Left Menu --}}
 @include('layoutsadmin.leftMenu')
 {{-- 3. Main Content (Body) --}}


    <!-- Main content -->
    <section class= "content">
      @yield('content')

      </section>

  </div>


 {{-- 4. Right Menu  --}}
 
 @include('layoutsadmin.rightMenu')
{{-- 5. Footer --}}
@include('layoutsadmin.footer')
 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery --><!-- 
<script src="{{asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
<!-- Bootstrap 4 -->
<!-- AdminLTE App -->
<script src="{{asset('vendors/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

