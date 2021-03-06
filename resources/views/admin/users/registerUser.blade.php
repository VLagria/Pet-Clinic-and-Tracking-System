@extends('layoutsadmin.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@section('content') 
<link rel="stylesheet" href="/styles.css">

<div class="content-wrapper">
  <br>

    <!-- Default box -->
    <div class="card" style="width: 800px; margin: auto; text-align: center;">
      <div class="card-header">
          <a class="btn btn-error btn-sm" href="/admin/users/CRUDusers" style="margin-right: 900px;">
              <i class="fas fa-arrow-left"></i> Return </a>
          <div> 
              <h3 class="header" id="pet_name_id" style="font-size: 400%">Register User</h3>
          </div>
          <br>
          <form action="{{ route('post.addadminsubmit') }}" method="POST" id="regForm">
            @csrf 
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <td>
                    <div class="form-group">
                      <div class="form-group ">
                        <tr>
                          <label for="user_name">Username: </label>
                          <input type="text" style="width: 300px; text-align: center; margin: auto;" name="user_name" id="user_name" class="form-control border border-info bg bg-light rounded" placeholder="Enter Username" value="{{ old('user_name')}}">
                          <span class="text-danger error-text user_name_error">@error('user_name'){{ $message }}@enderror</span>
                        </tr>
                      </div>
                      <div class="form-group">
                        <tr>
                          <label for="user_password">Password: </label>
                          <input type="password" style="width: 300px; text-align: center; margin: auto;" name="user_password" id="user_password" class="form-control border border-info bg bg-light rounded" placeholder="Enter Password" value="{{ old('user_password')}}">
                        </tr>
                      </div>
                      <div class="form-group">
                        <tr>
                          <label for="user_mobile">Mobile No: </label>
                          <input type="text" style="width: 300px; text-align: center; margin: auto;" name="user_mobile" id="user_mobile" class="form-control border border-info bg bg-light rounded" placeholder="Enter Mobile No" value="{{ old('user_mobile')}}">
                        </tr>
                      </div>
                      <div class="form-group">
                        <tr>
                          <label for="user_email">Email: </label>
                          <input type="email" style="width: 300px; text-align: center; margin: auto;" name="user_email" id="user_email" class="form-control border border-info bg bg-light rounded" placeholder="Enter Email" value="{{ old('user_email')}}">
                          <span class="text-danger error-text user_name_error">@error('user_email'){{ $message }}@enderror</span>
                        </tr>
                      </div>
                      <div class="form-group">
                        <tr>
                          <label for="inputStatus">Usertype:</label>
                          <br>
                          <select name="userType_id" style="width: 300px; text-align: center; margin: auto;" class="form-control custom-select border border-info bg bg-light rounded">
                            <option value="1" selected>ADMIN</option>
                            <option value="2">VETERINARY</option>
                            <option value="3">CUSTOMER</option>
                          </select>
                        </tr>
                      </div>
                      <br>
                    </div>
                    <br>
                  </td>
                </tr>
              </thead>
            </table>
            <button type="submit" class="btn btn-primary btn-lg" style="text-align: center; margin-top: -25px">Save Changes</button>
          </form>
        </div>
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
      $("#regForm").validate({
          rules: { //regulations needed to be followed
              user_name: {
                  required: true,
                  minlength: 2,
                  maxlength: 15
              }, //minlength: 2, max: 15  
              user_mobile: {
                  required: true,
                  minlength: 9,
                  maxlength: 13
              }, //minlength of 9 and max of 13 
              user_password: {
                  required: true,
                  minlength: 5,
                  maxlength: 20
              }, //minlength of 5 and max of 20
              user_email: {
                  required: true,
                  email: true
              } //required email, email must have '@'
          },
          messages: { //messages for the rules
              user_name: {
                  required: "Please enter a username",
                  minlength: "Your username must consist of at least 2 characters",
                  maxlength: "Must not exceed 15 characters"
              },
              user_mobile: {
                  required: "Please provide a mobile #",
                  minlength: "Mobile # must consist of at least 9 characters",
                  maxlength: "Must not exceed 13 characters"
              },
              user_password: {
                  required: "Please provide a password",
                  minlength: "Your password must be at least 5 characters long",
                  maxlength: "Must not exceed 20 characters"
              },
              user_email: {
                  required: "Please enter email address",
                  email: "Please enter valid email"
              }
          }
      });
  });
</script>

<style>
    label.error {
        color: #dc3545;
        font-size: 14px;
    }
</style> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script> // script for timeout modal

  $("document").ready(function() {
      setTimeout(function() {
          $("#messageModal").remove();
      }, 3000);
  });
</script> @endsection