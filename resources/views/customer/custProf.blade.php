@extends('layoutscustomer.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')

<div class="content-wrapper">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hi Hannah!</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="custProfile">Profile</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   
            <!-- Profile Image -->
          
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('vendors/dist/img/han.jpg') }}"
                       alt="hannah">
                </div>
             
                <h3 class="profile-username text-center">Hannah Ramirez </h3>
                <center>
                <b>Profile Picture </b><input type="file" id="user_DP" name="filename" name="user_DP">
              </center>
               <br>
               <br>
              <!-- Main content -->
    <form action="/customer/custProf/{{ $userprofile_id->user_id }}" method="post">
@csrf
      
    <table class="table table-striped table-hover">
  <thead>
      @if ($userprofile_id)
          
      <input type="hidden" value="{{ $userprofile_id->user_id }}">
    <tr>
        <td >
            <div class="form-group">
                <label for="exampleInputEmail1">UserName</label>
                <input type="text" style="width: 300px" class="form-control" value="{{ $userprofile_id->user_name }}" id="user_name" name="user_name"  placeholder="Enter username">
                <span class="text-danger error-text user_name_error">@error('user_name'){{ $message }}@enderror</span>
            </div>
        </td>

            <td >
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" style="width: 300px" value="{{ $userprofile_id->user_password }}" class="form-control" id="user_password" name="user_password"  placeholder="Enter Password">
                    <span class="text-danger error-text user_password_error">@error('user_password'){{ $message }}@enderror</span>
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" style="width: 300px" value="{{ $userprofile_id->user_mobile }}" class="form-control" id="user_mobile" name="user_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile">
                    <span class="text-danger error-text user_mobile_error">@error('user_mobile'){{ $message }}@enderror</span>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="number" class="form-control" value="{{ $userprofile_id->user_email }}" style="width: 300px" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter Email">
                    <span class="text-danger error-text user_email_error">@error('user_email'){{ $message }}@enderror</span>
                </div>
            </td>
        
    </tr>
<td>
<div class="form-group" style="width: 300px">
                <label for="inputType">User Type</label>
                <select id="userType_id" class="form-control custom-select" name="userType_id">
                  @if ($userprofile_id->userType_id=="1")
                  <option value="1" selected>Admin</option>
                  <option value="2">Veterinary</option>
                  <option value="3">Customer</option>
                  @elseif ($userprofile_id->userType_id=="2")
                  <option value="1" selected>Admin</option>
                  <option value="2">Veterinary</option>
                  <option value="3">Customer</option>
                  @elseif ($userprofile_id->userType_id=="3")
                  <option value="1" selected>Admin</option>
                  <option value="2">Veterinary</option>
                  <option value="3">Customer</option>
                  @endif
                </select>
                <span class="text-danger error-text userType_id_error">@error('userType_id'){{ $message }}@enderror</span>
              </div> 
</td>
@endif
</thead>
</table>
<div style="text-align: right; height: 100; padding-top: 20px">
    <button type="submit" class="btn btn-primary btn-sm" style=" height: 50%;"> <i class="fas fa-user"></i> Save Changes </a></button>

   
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
