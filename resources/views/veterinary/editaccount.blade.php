
@extends('layoutsvet.app')

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
<div class="card" style="align-content: center">
    <div class="card-header">
        <a class="btn btn-error btn-sm" href="/veterinary/user">
            <i class="fas fa-arrow-left">
            </i>
            Return
        </a>
      <h3 class="header">Create Account</h3>
      <br>
     

    <!-- Main content -->
    <form action="{{ route('vet.saveaccount') }}" method="post">
@csrf
    <table class="table table-striped table-hover">
  <thead>
    <input type="hidden" name="user_id" value="{{ $accs->user_id }}">
    <tr>
        
        <td>
            <div class="form-group" style="">
                <label for="exampleInputEmail1">Username</label>
                
                <input type="text" style="width: 300px" class="form-control" id="user_name" name="user_name" value="{{ $accs->user_name }}" placeholder="Enter username">
                <span class="text-danger error-text user_name_error">@error('user_name'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" style="width: 300px;" class="form-control" id="user_password" name="user_password" value="{{ $accs->user_password }}" placeholder="Enter password">
                <span class="text-danger error-text user_password_error">@error('user_password'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mobile</label>
                <input type="text" style="width: 300px" value="{{ $accs->user_mobile }}" class="form-control" id="user_mobile" name="user_mobile" aria-describedby="emailHelp" placeholder="Enter mobile">
                <span class="text-danger error-text user_mobile_error">@error('user_mobile'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" value="{{ $accs->user_email }}" style="width: 300px" id="user_email" name="user_email" placeholder="Enter email">
                <span class="text-danger error-text user_email_error">@error('user_email'){{ $message }}@enderror</span>
            </div>
            
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">Active</label>
                <select id="isActive" class="form-control custom-select" name="userType_id">
                  <option value="3">User</option>
                </select>
                <span class="text-danger error-text isActive_error">@error('userType_id'){{ $message }}@enderror</span>
              </div>
              
            
        </td>    
    </tr>
  </thead>
</table>

<div style="text-align: left; height: 150; padding-top: 20px; margin-left: 10px">
    <button type="submit" class="btn btn-success btn-sm" style=" height: 40%; width: 300px"> <i class="fas fa-user"></i> Update Account </a></button>

   
</div>

</form>   

</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
@endsection