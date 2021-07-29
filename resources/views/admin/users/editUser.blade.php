@extends('layoutsadmin.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> @section('content') <div class="content-wrapper">

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
    @if(Session::has('user_updated')) 
    <div class="alert alert-success" id="messageModal" role="alert">
      {{ Session::get('user_updated') }}
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
      <form action="{{ route('post.edituserdetails') }}" method="POST"> 
        @csrf 
        <table class="table table-striped table-hover">
          <thead>
            <input type="hidden" name="user_id" value="{{ $users->user_id }}">
            <tr>
              <td>
                <div class="form-group">
                  <div class="form-group ">
            <tr>
              <label>Username: </label>
              <input type="text" style="width: 300px" name="user_name" id="user_name" class="form-control border border-info bg bg-light rounded" placeholder="Enter Username" value="{{ $users->user_name }}">
              <span class="text-danger error-text customer_fname_error">@error('user_name'){{ $message }}@enderror</span>
            </tr>
    </div>
    <div class="form-group">
      <tr>
        <label for="exampleInputEmail1">Password: </label>
        <input type="password" style="width: 300px" name="user_password" id="user_password" class="form-control border border-info bg bg-light rounded" placeholder="Enter Password" value="{{ $users->user_password }}">
        <span class="text-danger error-text customer_fname_error">@error('user_password'){{ $message }}@enderror</span>
      </tr>
    </div>
    <div class="form-group">
      <tr>
        <label for="exampleInputEmail1">Mobile No: </label>
        <input type="text" style="width: 300px" name="user_mobile" id="user_mobile" class="form-control border border-info bg bg-light rounded" placeholder="Enter Mobile No" value="{{ $users->user_mobile }}">
        <span class="text-danger error-text customer_fname_error">@error('user_mobile'){{ $message }}@enderror</span>
      </tr>
    </div>
    <div class="form-group">
      <tr>
        <label for="exampleInputEmail1">Email: </label>
        <input type="email" style="width: 300px" name="user_email" id="user_email" class="form-control border border-info bg bg-light rounded" placeholder="Enter Email" value="{{ $users->user_email }}">
        <span class="text-danger error-text customer_fname_error">@error('user_email'){{ $message }}@enderror</span>
      </tr>
    </div>
    <div class="form-group">
      <tr>
        <label for="inputStatus">Usertype:</label>
        <br>
        <select name="userType_id" name="userType_id" style="width: 300px" class="form-control custom-select border border-info bg bg-light rounded">
          <option value="1" selected>ADMIN</option>
          <option value="2">VETERINARY</option>
          <option value="3">CUSTOMER</option>
        </select>
      </tr>
    </div>
  </div>
  <br>
  </td>
  </tr>
  </thead>

  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Save Changes</button>
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