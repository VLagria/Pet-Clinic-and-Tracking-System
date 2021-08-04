
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
      <h3 class="header">Update Customer</h3>
      <br>
     
    <!-- Main content -->
    <form action="/veterinary/save_customer/{{ $cust_id->customer_id }}" method="post">
@csrf
    <table class="table table-striped table-hover">
  <thead>
      @if ($cust_id)
          
      <input type="hidden" value="{{ $cust_id->customer_id }}">
    <tr>
        <td >
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" style="width: 300px" class="form-control" value="{{ $cust_id->customer_fname }}" id="customer_fname" name="customer_fname"  placeholder="Enter First Name">
                <span class="text-danger error-text customer_fname_error">@error('customer_fname'){{ $message }}@enderror</span>
            </div>
        </td>

            <td >
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" style="width: 300px" value="{{ $cust_id->customer_lname }}" class="form-control" id="customer_lname" name="customer_lname"  placeholder="Enter Last Name">
                    <span class="text-danger error-text customer_lname_error">@error('customer_lname'){{ $message }}@enderror</span>
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Middle Name</label>
                    <input type="text" style="width: 300px" value="{{ $cust_id->customer_mname }}" class="form-control" id="customer_mname" name="customer_mname" aria-describedby="emailHelp" placeholder="Enter Middle Name">
                    <span class="text-danger error-text customer_mname_error">@error('customer_mname'){{ $message }}@enderror</span>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="number" class="form-control" value="{{ $cust_id->customer_mobile }}" style="width: 300px" id="customer_mobile" name="customer_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                    <span class="text-danger error-text customer_mobile_error">@error('customer_mobile'){{ $message }}@enderror</span>
                </div>
            </td>
        
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Telephone</label>
                <input type="number" class="form-control" value="{{ $cust_id->customer_tel }}" style="width: 300px" id="customer_tel" name="customer_tel" placeholder="Enter Telephone">
                <span class="text-danger error-text customer_tel_error">@error('customer_tel'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">Gender</label>
                <select id="customer_gender" class="form-control custom-select" name="customer_gender">
                  @if ($cust_id->customer_gender=="Male")
                  <option value="Male" selected>Male</option>
                  <option value="Female">Female</option>
                  @elseif ($cust_id->customer_gender=="Female")
                  <option value="Female" selected>Female</option>
                  <option value="Male">Male</option>
                  @endif
                  
                  
                </select>
                <span class="text-danger error-text customer_gender_error">@error('customer_gender'){{ $message }}@enderror</span>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="date" required class="form-label">Birthdate</label>
                <br>
                <div class="">
                  <input type="date" class="form-control" value="{{ $cust_id->customer_birthday }}" id="customer_birthday" name="customer_birthday">
                  <span class="text-danger error-text customer_birthday_error">@error('customer_birthday'){{ $message }}@enderror</span>
                </div>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">House Block/Building/Floor No.</label>
                <input type="text" class="form-control" value="{{ $cust_id->customer_blk }}" name="customer_blk" id="customer_blk"  placeholder="Enter Address">
                <span class="text-danger error-text customer_blk_error">@error('customer_blk'){{ $message }}@enderror</span>
            </div>
        </td>
    </tr>
    <tr>
        
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Street/Highway</label>
                <input type="text" class="form-control" value="{{ $cust_id->customer_street }}" name="customer_street" id="customer_street" placeholder="Enter Address">
                <span class="text-danger error-text customer_street_error">@error('customer_street'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Subdivision</label>
                <input type="text" class="form-control" value="{{ $cust_id->customer_subdivision }}" name="customer_subdivision" id="customer_subdivision"  placeholder="Enter Address">
                <span class="text-danger error-text customer_subdivision_error">@error('customer_subdivision'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Barangay</label>
                <input type="text" class="form-control" value="{{ $cust_id->customer_barangay }}" name="customer_barangay" id="customer_barangay" placeholder="Enter Address">
                <span class="text-danger error-text customer_barangay_error">@error('customer_barangay'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">City</label>
                <input type="text" class="form-control" value="{{ $cust_id->customer_city }}" name="customer_city" id="customer_city"  placeholder="Enter Address">
                <span class="text-danger error-text customer_city_error">@error('customer_city'){{ $message }}@enderror</span>
            </div>
        </td>
    </tr>

    <tr>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Zip Code</label>
                <input type="text" class="form-control" value="{{ $cust_id->customer_zip }}" name="customer_zip" id="customer_zip" placeholder="Enter Addres">
                <span class="text-danger error-text customer_zip_error">@error('customer_zip'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">User</label>
                
                <select id="isActive" class="form-control custom-select" name="id">
                    <option value="{{ $cust_id->user_id }}">{{ $cust_id->user_id }}</option>
                  </select>
                      
              </div>
              <span class="text-danger error-text user_id_error">@error('user_id'){{ $message }}@enderror</span>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">Active</label>
                <select id="isActive" class="form-control custom-select" name="isActive">
                  @if ($cust_id->customer_isActive == 1)
                  <option value="1" selected>Yes</option>
                  <option value="0">No</option>
                  @else
                  <option value="0" selected>No</option>
                  <option value="1">Yes</option>
                  @endif
                  
                  
                </select>
                <span class="text-danger error-text isActive_error">@error('isActive'){{ $message }}@enderror</span>
              </div>
        </td>
        {{-- <td>
            <div class="form-group" style="width: 300px">
                <label for="inputdp"> Profile Picture</label>
                <br>
                <form action="/action_page.php">
                  <input type="file" id="customer_DP" name="filename" name="customer_DP">
              </div>
        </td> --}}
    </tr>
    @endif
  </thead>
</table>

<div style="text-align: right; height: 100; padding-top: 20px">
    <button type="submit" class="btn btn-success btn-sm" style=" height: 40%;"> <i class="fas fa-user"></i> Update Customer </a></button>

   
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