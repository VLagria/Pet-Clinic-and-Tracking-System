@extends('layoutscustomer.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Default box -->
<div class="card">
    <div class="card-header">
        <a class="btn btn-error btn-sm" href="/customer/custProfile">
            <i class="fas fa-arrow-left">
            </i>
            Return
        </a>
      <h3 class="header">Edit UserProfile</h3>
      <br>
      
<div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">User Name</label>
                        <div class="col-sm-6">
                          <input type="email" class="form-control" id="userName" placeholder=" Update userName">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" id="inputpassword" placeholder=" UpdatePassword">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputmobile" class="col-sm-2 col-form-label">User Mobile</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputmobile" placeholder="Update Mobile">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" id="inputExperience" placeholder="Update Email"></textarea>
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>



@endsection

          <!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
