
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
<div class="card">
    <div class="card-header">
        <a class="btn btn-error btn-sm" href="/veterinary/user">
            <i class="fas fa-arrow-left">
            </i>
            Return
        </a>
      <h3 class="header">Register Customer</h3>
      <br>
     

    <!-- Main content -->
    <form action="{{ route('vet.addcustomer') }}" method="post">
@csrf
    <table class="table table-striped table-hover">
  <thead>
    <tr>
        <input type="text" disabled style="width: 50px; border-color: white; background-color: white" class="form-control" name="id" value="{{ $add_id->user_id+1}}">
        <input type="hidden" disabled style="width: 50px; border-color: white; background-color: white" class="form-control" name="userType_id" value="3">
        
        <td>
            <div class="form-group" style="">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" style="width: 300px" class="form-control" id="user_name" name="user_name" value="{{ old('user_name')}}" placeholder="Enter username">
                <span class="text-danger error-text user_name_error">@error('user_name'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" style="width: 300px;" class="form-control" id="user_password" name="user_password" value="{{ old('user_password')}}" placeholder="Enter password">
                <span class="text-danger error-text user_password_error">@error('user_password'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Account Mobile</label>
                <input type="text" style="width: 300px" value="{{ old('user_mobile')}}" class="form-control" id="user_mobile" name="user_mobile" aria-describedby="emailHelp" placeholder="Enter mobile">
                <span class="text-danger error-text user_mobile_error">@error('user_mobile'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" value="{{ old('user_email')}}" style="width: 300px" id="user_email" name="user_email" placeholder="Enter email">
                <span class="text-danger error-text user_email_error">@error('user_email'){{ $message }}@enderror</span>
            </div>
        </td>
      
            <div class="form-group" style="width: 300px">
                <input type="hidden" name="userType_id" value="3">
              </div>
       
    </tr>
    <tr>
        <td >
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" style="width: 300px" class="form-control" id="customer_fname" name="customer_fname"  placeholder="Enter First Name">
                <span class="text-danger error-text customer_fname_error">@error('customer_fname'){{ $message }}@enderror</span>
            </div>
        </td>

            <td >
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" style="width: 300px" class="form-control" id="customer_lname" name="customer_lname"  placeholder="Enter Last Name">
                    <span class="text-danger error-text customer_lname_error">@error('customer_lname'){{ $message }}@enderror</span>
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Middle Name</label>
                    <input type="text" style="width: 300px" class="form-control" id="customer_mname" name="customer_mname" aria-describedby="emailHelp" placeholder="Enter Middle Name">
                    <span class="text-danger error-text customer_mname_error">@error('customer_mname'){{ $message }}@enderror</span>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="number" class="form-control" style="width: 300px" id="customer_mobile" name="customer_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                    <span class="text-danger error-text customer_mobile_error">@error('customer_mobile'){{ $message }}@enderror</span>
                </div>
            </td>
        
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Telephone</label>
                <input type="number" class="form-control" style="width: 300px" id="customer_tel" name="customer_tel" placeholder="Enter Telephone">
                <span class="text-danger error-text customer_tel_error">@error('customer_tel'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">Gender</label>
                <select id="customer_gender" class="form-control custom-select" name="customer_gender">
                  <option selected disabled>--</option>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
                </select>
                <span class="text-danger error-text customer_gender_error">@error('customer_gender'){{ $message }}@enderror</span>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="date" required class="form-label">Birthdate</label>
                <br>
                <div class="">
                  <input type="date" class="form-control" id="customer_birthday" name="customer_birthday">
                  <span class="text-danger error-text customer_birthday_error">@error('customer_birthday'){{ $message }}@enderror</span>
                </div>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">House Block/Building/Floor No.</label>
                <input type="text" class="form-control" name="customer_blk" id="customer_blk"  placeholder="Enter Address">
                <span class="text-danger error-text customer_blk_error">@error('customer_blk'){{ $message }}@enderror</span>
            </div>
        </td>
    </tr>
    <tr>
        
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Street/Highway</label>
                <input type="text" class="form-control" name="customer_street" id="customer_street" placeholder="Enter Address">
                <span class="text-danger error-text customer_street_error">@error('customer_street'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Subdivision</label>
                <input type="text" class="form-control" name="customer_subdivision" id="customer_subdivision"  placeholder="Enter Address">
                <span class="text-danger error-text customer_subdivision_error">@error('customer_subdivision'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Barangay</label>
                <input type="text" class="form-control" name="customer_barangay" id="customer_barangay" placeholder="Enter Address">
                <span class="text-danger error-text customer_barangay_error">@error('customer_barangay'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">City</label>
                <input type="text" class="form-control" name="customer_city" id="customer_city"  placeholder="Enter Address">
                <span class="text-danger error-text customer_city_error">@error('customer_city'){{ $message }}@enderror</span>
            </div>
        </td>
    </tr>

    <tr>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Zip Code</label>
                <input type="text" class="form-control" name="customer_zip" id="customer_zip" placeholder="Enter Addres">
                <span class="text-danger error-text customer_zip_error">@error('customer_zip'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">User</label>
                
                <select id="isActive" class="form-control custom-select" name="user_id">
                    <option value="{{ $add_id->user_id+1}}">{{ $add_id->user_id+1}}</option>
                  </select>
                      
              </div>
              <span class="text-danger error-text user_id_error">@error('user_id'){{ $message }}@enderror</span>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">Active</label>
                <select id="isActive" class="form-control custom-select" name="isActive">
                  <option selected disabled>--</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
                <span class="text-danger error-text isActive_error">@error('isActive'){{ $message }}@enderror</span>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputdp"> Profile Picture</label>
                <br>
                <form action="/action_page.php">
                  <input type="file" id="customer_DP" name="filename" name="customer_DP">
              </div>
        </td>
    </tr>
  </thead>
</table>

<div style="text-align: right; height: 100; padding-top: 20px">
    <button type="submit" class="btn btn-success btn-sm" style=" height: 40%;"> <i class="fas fa-user"></i> Register Customer </a></button>

   
</div>

</form>   

</div>
{{-- View  modal  --}}
{{-- 
  <div class="modal" id="viewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Clinic</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5>Clinic Name: Hannah Ramirez.</h5>
          <h5>Gender: male.</h5>
          <h5>Birthday: 09-15-2000.</h5>
          <h5>Notes: Vincent Lagria.</h5>
          <h5>Bloodtype: A</h5>
          <h5>Registered Date: 06-14-2021</h5>
        </div>
        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}
 

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