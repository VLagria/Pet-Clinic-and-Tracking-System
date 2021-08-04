@extends('layoutsadmin.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://jqueryvalidation.org/files/lib/jquery.js"></script>
<script src="https://jqueryvalidation.org/files/lib/jquery-1.11.1.js"></script>
<script src="https://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

<script>

  $().ready(function() {

    // validate signup form on keyup and submit
    $("#editForm").validate({
      rules: {
        user_name: {
          required: true,
          minlength: 2
        },
        user_mobile: {
          required: true,
        },
        user_password: {
          required: true,
          minlength: 5
        },
        user_email: {
          required: true,
          email: true
        }
      },
      messages: {
        user_name: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        user_mobile: {
          required: "Please provide a mobile #"
        },
        user_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        user_email: "Please enter a valid email address"
      }
    });
  });
  </script>

  <style>
    label.error{
      color: #dc3545;
      font-size: 14px;
    }
  </style>

@section('content') 
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"></div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right"></ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Default box --> 
    
    @if(Session::has('fail')) 
    <div class="alert alert-warning" id="messageModal" role="alert">
      {{ Session::get('fail') }}
    </div> 
    @endif

    <div class="card-header">
      <a class="btn btn-error btn-sm" href="/admin/users/CRUDusers">
        <i class="fas fa-arrow-left"></i> Return </a>
      <div class="bg bg-light rounded" style="width: 300px">
        <br>
        <h3 class="header">Edit User</h3>
      </div>
      <br>
      <form action="{{ route('post.edituserdetails') }}" method="POST" id="editForm"> 
        @csrf 
        <table class="table table-striped table-hover">
          <thead>
            <input type="hidden" name="user_id" value="{{ $users->user_id }}">
            <tr>
              <td>
                <div class="form-group feet">
    <div class="form-group feet">
            <tr>
              <label>Username: </label>
              <input type="text" style="width: 300px" name="user_name" id="user_name" class="form-control border border-info bg bg-light rounded" placeholder="Enter Username" value="{{ $users->user_name }}">
              <span class="text-danger error-text customer_fname_error" id="messageModal">@error('user_name'){{ $message }}@enderror</span>
            </tr>
    </div>
    <div class="form-group feet">
      <tr>
        <label for="exampleInputEmail1">Password: </label>
        <input type="password" style="width: 300px" name="user_password" id="user_password" class="form-control border border-info bg bg-light rounded" placeholder="Enter Password" value="{{ $users->user_password }}">
      </tr>
    </div>
    <div class="form-group feet">
      <tr>
        <label for="exampleInputEmail1">Mobile No: </label>
        <input type="text" style="width: 300px" name="user_mobile" id="user_mobile" class="form-control border border-info bg bg-light rounded" placeholder="Enter Mobile No" value="{{ $users->user_mobile }}">
      </tr>
    </div>
    <div class="form-group feet">
      <tr>
        <label for="exampleInputEmail1">Email: </label>
        <input type="email" style="width: 300px" name="user_email" id="user_email" class="form-control border border-info bg bg-light rounded" placeholder="Enter Email" value="{{ $users->user_email }}">
        <span class="text-danger error-text customer_fname_error" id="messageModal">@error('user_email'){{ $message }}@enderror</span>
      </tr>
    </div>
    <div class="form-group">
      <tr>
        <label for="inputStatus">Usertype:</label>
        <br>
        <select disabled name="userType_id" name="userType_id" style="width: 300px" class="form-control custom-select border border-info bg bg-light rounded">
          <option value="1" selected >ADMIN</option>
        </select>
      </tr>
    </div>
  </div>
  <br>
  </td>
  </tr>
  </thead>

  <div class="modal-footer">
    <button type="submit" class="btn btn-primary formSubmit" id="formSubmit">Save Changes</button>
  </div>

  </table>
  </form>
</div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  <script>
    $("document").ready(function(){
      setTimeout(function(){
        $("#messageModal").remove();
      }, 3000 );
    });
  </script>
  

@endsection