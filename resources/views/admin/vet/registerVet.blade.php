
@extends('layoutsadmin.app')

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
        <a class="btn btn-error btn-sm" href="/admin/clinic/CRUDclinic">
            <i class="fas fa-arrow-left">
            </i>
            Return
        </a>
      <h3 class="header">Register Veterinary</h3>
      <br>
     
      @if(Session::has('existing')) 
      <div class="alert alert-warning" role="alert" id="messageModal">
       {{ Session::get('existing') }}
     </div>
     @endif 

     @if(Session::has('newVeterinary')) 
      <div class="alert alert-warning" role="alert" id="messageModal">
        {{ Session::get('newVeterinary') }}
      </div>
     @endif 
     
    <!-- Main content -->
    <form action="{{ route('vet.addveterinarian') }}" method="POST">
@csrf
    <table class="table table-striped table-hover">
  <thead>
    <tr>
        <input type="text" disabled style="width: 50px; border-color: white; background-color: white" class="form-control" value="{{ $userVetID->user_id+1 }}">
        <input type="hidden" disabled style="width: 50px; border-color: white; background-color: white" class="form-control" name="userType_id" value="2">
        
        <td>
            <div class="form-group" style="">
                <label for="exampleInputEmail1">Username: </label>
                <input type="text" style="width: 300px" class="form-control" id="user_name" name="user_name" value="{{ old('user_name')}}" placeholder="Enter username">
                <span class="text-danger error-text user_name_error">@error('user_name'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Password: </label>
                <input type="password" style="width: 300px;" class="form-control" id="user_password" name="user_password" value="{{ old('user_password')}}" placeholder="Enter password">
                <span class="text-danger error-text user_password_error">@error('user_password'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Account Mobile: </label>
                <input type="text" style="width: 300px" value="{{ old('user_mobile')}}" class="form-control" id="user_mobile" name="user_mobile" aria-describedby="emailHelp" placeholder="Enter mobile">
                <span class="text-danger error-text user_mobile_error">@error('user_mobile'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Email: </label>
                <input type="email" class="form-control" value="{{ old('user_email')}}" style="width: 300px" id="user_email" name="user_email" placeholder="Enter email">
                <span class="text-danger error-text user_email_error">@error('user_email'){{ $message }}@enderror</span>
            </div>
        </td>
      
            <div class="form-group" style="width: 300px">
                <input type="hidden" name="userType_id" value="2">
              </div>
       
    </tr>
    <tr>
        <td >
            <div class="form-group">
                <label for="exampleInputEmail1">First Name:</label>
                <input type="text" style="width: 300px" class="form-control" id="vet_fname" name="vet_fname"  placeholder="Enter First Name">
                <span class="text-danger error-text customer_fname_error">@error('vet_fname'){{ $message }}@enderror</span>
            </div>
        </td>

            <td >
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name:</label>
                    <input type="text" style="width: 300px" class="form-control" id="vet_lname" name="vet_lname"  placeholder="Enter Last Name">
                    <span class="text-danger error-text customer_lname_error">@error('vet_lname'){{ $message }}@enderror</span>
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Middle Name:</label>
                    <input type="text" style="width: 300px" class="form-control" id="vet_mname" name="vet_mname" aria-describedby="emailHelp" placeholder="Enter Middle Name">
                    <span class="text-danger error-text customer_mname_error">@error('vet_mname'){{ $message }}@enderror</span>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile:</label>
                    <input type="number" class="form-control" style="width: 300px" id="vet_mobile" name="vet_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                    <span class="text-danger error-text customer_mobile_error">@error('vet_mobile'){{ $message }}@enderror</span>
                </div>
            </td>
        
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Telephone:</label>
                <input type="number" class="form-control" style="width: 300px" id="vet_tel" name="vet_tel" placeholder="Enter Telephone">
                <span class="text-danger error-text customer_tel_error">@error('vet_tel'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="date" required class="form-label">Birthdate:</label>
                <br>
                <div class="">
                  <input type="date" class="form-control" id="vet_birthday" name="vet_birthday">
                  <span class="text-danger error-text customer_birthday_error">@error('vet_birthday'){{ $message }}@enderror</span>
                </div>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label>House Block/Building/Floor No.:</label>
                <input type="text" class="form-control" name="vet_blk" id="vet_blk"  placeholder="Enter Address">
                <span class="text-danger error-text customer_blk_error">@error('vet_blk'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Street/Highway:</label>
                <input type="text" class="form-control" name="vet_street" id="vet_street" placeholder="Enter Address">
                <span class="text-danger error-text customer_street_error">@error('vet_street'){{ $message }}@enderror</span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Subdivision:</label>
                <input type="text" class="form-control" name="vet_subdivision" id="vet_subdivision"  placeholder="Enter Address">
                <span class="text-danger error-text customer_subdivision_error">@error('vet_subdivision'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Barangay:</label>
                <input type="text" class="form-control" name="vet_barangay" id="vet_barangay" placeholder="Enter Address">
                <span class="text-danger error-text customer_barangay_error">@error('vet_barangay'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">City:</label>
                <input type="text" class="form-control" name="vet_city" id="vet_city"  placeholder="Enter Address">
                <span class="text-danger error-text customer_city_error">@error('vet_city'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Zip Code: </label>
                <input type="text" class="form-control" name="vet_zip" id="vet_zip" placeholder="Enter Addres">
                <span class="text-danger error-text customer_zip_error">@error('vet_zip'){{ $message }}@enderror</span>
            </div>
        </td>
    </tr>

    <tr>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="date" required class="form-label">Date Added:</label>
                <br>
                <div class="">
                  <input type="date" class="form-control" id="vet_dateAdded" name="vet_dateAdded">
                  <span class="text-danger error-text customer_birthday_error">@error('vet_dateAdded'){{ $message }}@enderror</span>
                </div>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">Clinic:</label>
                
                <select id="clinic_id" class="form-control custom-select" name="clinic_id">
                    <option value="{{ $vetInfo->clinic_id}}">{{ $vetInfo->clinic_name}}</option>
                  </select>
                      
              </div>
              <span class="text-danger error-text user_id_error">@error('clinic_id'){{ $message }}@enderror</span>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">User:</label>
                
                <select id="user_id" class="form-control custom-select" name="user_id">
                    <option value="{{ $userVetID->user_id+1}}">{{ $userVetID->user_id+1}}</option>
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
                <label for="inputdp">Vet Profile:</label>
                <br>
                <form action="/action_page.php">
                  <input type="file" id="vet_DP" name="vet_DP">
              </div>
        </td>
    </tr>
  </thead>
</table>

<div style="text-align: right; height: 100; padding-top: 20px">
    <button type="submit" class="btn btn-success btn-sm" style=" height: 40%;"><i class="fas fa-user"></i>Register Veterinary</button>

   
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