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
             
                <h3 class="profile-username text-center"></h3>
                <center>
                <b>Profile Picture </b>
                <br>
                <input type="file" id="user_DP" name="filename" name="user_DP">
              </center>
               <br>
               <br>
              <!-- Main content -->
    <form  method="post" action="">
@csrf
      
    <table class="table table-striped table-hover">
  <thead>
    <tr>
        <td >
            <div class="form-group">
                <label for="user_name">UserName</label>
                <input type="text" style="width: 300px" class="form-control" value="" id="user_name" name="user_name"  placeholder="Enter username">
               
            </div>
        </td>

            <td >
                <div class="form-group">
                    <label for="user_password">Password</label>
                    <input type="text" style="width: 300px" value="" class="form-control" id="user_password" name="user_password"  placeholder="Enter Password">
                 
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="user_mobile">Mobile</label>
                    <input type="text" style="width: 300px" value="" class="form-control" id="user_mobile" name="user_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile">
                   
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="user_email">Email</label>
                    <input type="number" class="form-control" value="" style="width: 300px" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter Email">
                
                </div>
            </td>
        
    </tr>
<td>
<div class="form-group" style="width: 300px">
                <label for="inputType">User Type</label>
                <select id="userType_id" class="form-control custom-select" name="userType_id">
   
                  <option value="1" >Admin</option>
                  <option value="2">Veterinary</option>
                  <option value="3">Customer</option>
                 
                </select>
               
              </div> 
</td>

</thead>
</table>
<div style="text-align: right; height: 100; padding-top: 20px">
    <button type="submit" class="btn btn-primary btn-sm" style=" height: 50%;"> <i class="fas fa-user"></i> Save Changes </a>
    
  </button>

   
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
