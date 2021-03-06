<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.Name','Customer Page') }}</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('vendors/dist/css/adminlte.min.css') }}">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            {{-- 1. Top Menu  --}} @include('layoutscustomer.topMenu') {{-- 2. Left Menu --}} @include('layoutscustomer.leftMenu') {{-- 3. Main Content (Body) --}}
            <!-- Main content -->
            <section class="content"> @yield('content') </section>
        </div>
        {{-- 4. Right Menu  --}} @include('layoutscustomer.rightMenu') {{-- 5. Footer --}} @include('layoutscustomer.footer')
        <!-- ./wrapper -->
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('vendors/dist/js/adminlte.min.js') }}"></script>
        <!-- Checking jQuery -->
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(function() {
                        /* UPDATE  PERSONAL INFO */
                        $('#InfoForm').on('submit', function(e) {
                            e.preventDefault();
                            $.ajax({
                                url: $(this).attr('action'),
                                method: $(this).attr('method'),
                                data: new FormData(this),
                                processData: false,
                                dataType: 'json',
                                contentType: false,
                                beforeSend: function() {
                                    $(document).find('span.error-text').text('');
                                },
                                success: function(data) {
                                    if (data.status == 0) {
                                        $.each(data.error, function(prefix, val) {
                                            $('span.' + prefix + '_error').text(val[0]);
                                        });
                                    } else {
                                        $('.user_name').each(function() {
                                            $(this).html($('#InfoForm').find($('input[name="name"]')).val());
                                        });
                                        alert(data.msg);
                                    }
                                }
                            });
                        });
        </script>
    </body>
</html>