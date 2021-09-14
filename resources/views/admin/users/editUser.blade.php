@extends('layoutsadmin.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content') 
<link rel="stylesheet" href="/styles.css">
<div class="content-wrapper">
  <br>

  <div class="card" style="width: auto; margin-left:20px; margin-right:20px; text-align: left; padding: 20px;">
    <a class="btn btn-error btn-sm" href="/admin/users/CRUDusers" style="text-align: left;">
      <i class="fas fa-arrow-left"></i> Return </a>
    <div>
      <h3 class="header" id="pet_name_id" style="font-size: 300%">Edit User</h3>
    </div>
    <br>
    <form action="{{ route('post.edituserdetails') }}" method="POST" id="editForm"> 
      @csrf 
      <table class="table table-striped table-hover" >
        <thead>
          <input type="hidden" name="user_id" value="{{ $users->user_id }}">
                  <tr >
                    <td style="width: auto; text-align: left; margin: auto;">
                    <label>Username: </label>
                    <input type="text"  name="user_name" id="user_name" class="form-control" placeholder="Enter Username" value="{{ $users->user_name }}" >
                    <span class="text-danger error-text customer_fname_error" id="messageModal">@error('user_name'){{ $message }}@enderror</span>
                    </td>
                  <td style="width: auto; text-align: left; margin: auto;">
                    <label>Password: </label>
                    <input type="password"  name="user_password" id="user_password" class="form-control" placeholder="Enter Password" value="{{ $users->user_password }}">
                    </td>
                </div>
                  <td style="width: auto; text-align: left; margin: auto;">
                    <label>Mobile No: </label>
                    <input type="text"  name="user_mobile" id="user_mobile" class="form-control" placeholder="Enter Mobile No" value="{{ $users->user_mobile }}">
                    </td>
                </tr>
                  <tr>
                    <td style="width: auto; text-align: left; margin: auto;">
                    <label >Email: </label>
                    <input type="email"  name="user_email" id="user_email" class="form-control" placeholder="Enter Email" value="{{ $users->user_email }}">
                    <span class="text-danger error-text customer_fname_error" id="messageModal">@error('user_email'){{ $message }}@enderror</span>
                    </td>
                    <td style="width: auto; text-align: left; margin: auto;">
                    <label >Usertype: </label> 
                    @foreach($userOptions as $user_types) 
                      @if($users->userType_id == $user_types->userType_id) 
                        <input name="userType_id" id="userType_id" class="form-control" value="{{ $user_types->userType_name }}" readonly> 
                      @endif 
                    @endforeach
              </div>
              <br>
            </td>
          </tr>
        </thead>
      </table>
      <div style="text-align: center; margin-top: auto;">
      <button type="submit" class="btn btn-success btn-lg"  id="formSubmit"><i class="fas fa-save"></i>Save Changes</button>
      </div>
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

<script src="https://jqueryvalidation.org/files/lib/jquery.js"></script>
<script src="https://jqueryvalidation.org/files/lib/jquery-1.11.1.js"></script>
<script src="https://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

<script>
  $().ready(function() {
    // validate signup form on keyup and submit
    $("#editForm").validate({
      rules: {
        user_name: { required: true, minlength: 2, maxlength: 15 }, //minlength: 2, max: 15
        user_mobile: { required: true, minlength: 9, maxlength: 13 }, //minlength of 9 and max of 13
        user_password: { required: true, minlength: 5, maxlength: 20 }, //minlength of 5 and max of 20
        user_email: { required: true, email: true } //required email, email must have '@'
      },
      messages: {
        user_name: { required: "Please enter a username", minlength: "Your username must consist of at least 2 characters" },
        user_mobile: { required: "Please provide a mobile #" },
        user_password: { required: "Please provide a password", minlength: "Your password must be at least 5 characters long" },
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