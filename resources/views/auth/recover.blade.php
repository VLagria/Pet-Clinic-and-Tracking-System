<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Recover Password (v2)</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('vendors/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
    </head>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <div class="avatar">
                        <img src="{{asset('vendors/dist/img/MediaoneLogo.png') }}" alt="Avatar">
                    </div>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
                    <form action="login.html" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p class="mt-3 mb-1">
                        <a href="{{ route('auth.login') }}" class="text-center">I alreay have an account</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
        <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>