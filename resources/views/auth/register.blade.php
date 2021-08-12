<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('vendors/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
    </head>
    <div class="card">
        <body class="hold-transition register-page">
            <div class="register-box">
                <br>
                <h3 style="margin: 5%" class="header">Register a new account</h3>
                <br>
            </div>
            <!-- Main content -->
            <form class="cmxform" action="" method="POST" id="addForm"> @csrf <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <input type="hidden" disabled style="width: 50px; border-color: white; background-color: white" class="form-control" name="userType_id" value="3">
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="user_name" placeholder="Username">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" name="user_password" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="mobileno" placeholder="Mobile No">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fa fa-mobile"></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="mname" placeholder="Middle Name">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="fname" placeholder="Telephone">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-append" style="width: 300px">
                                        <select id="customer_gender" class="form-control custom-select" id="customer_gender" name="customer_gender">
                                            <option selected disabled>Choose Gender:</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-append" style="width: 300px">
                                        <input type="date" class="form-control" id="customer_birthday" name="customer_birthday">
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="blk" placeholder="House Block/Building/Floor No">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-location-arrow"></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="Street" placeholder="Street/Highway">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-location-arrow"></span>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="subdivision" placeholder="Subdivision">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-location-arrow"></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="Barangay" placeholder="Barangay">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-location-arrow"></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="City" placeholder="City">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-location-arrow"></span>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="Street" placeholder="Zip Code">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-location-arrow"></span>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-append" style="width: 300px">
                                        <select id="customer_gender" class="form-control custom-select" id="customer_gender" name="customer_gender">
                                            <option selected disabled>Status:</option>
                                            <option value="Female">Active</option>
                                            <option value="Male">Inactive</option>
                                        </select>
                                    </div>
                            </td>
                        </tr>
                    </thead>
                </table>
            </form>
      
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms"> I agree to the <a href="#">terms</a>
                </label>
            </div>       
        </div>

        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
           
        <!-- /.col -->
    </div>
    <a href="{{ route('auth.login') }}" class="text-center">I alreay have an account</a>
    <!-- /.register-box -->
    <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>