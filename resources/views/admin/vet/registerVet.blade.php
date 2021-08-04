
@extends('layoutsadmin.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="../lib/jquery.js"></script>
<script src="https://jqueryvalidation.org/files/lib/jquery-1.11.1.js"></script>
<script src="../dist/jquery.validate.js"></script>

<script>
  $().ready(function() {
    // validate signup form on keyup and submit
    $("#regVet").validate({
      rules: {
        user_name: { required: true, minlength: 2 },
        user_mobile: { required: true},
        user_password: { required: true, minlength: 5 },
        user_email: { required: true, email: true },
        vet_fname: { required: true, minlength: 2 },
        vet_lname: { required: true, minlength: 2 },
        vet_mname: { required: true, minlength: 2 },
        vet_mobile: { required: true},
        vet_tel: { required: true },
        vet_birthday: { required: true },
        vet_blk: { required: true },
        vet_street: { required: true },
        vet_subdivision: { required: true },
        vet_barangay: { required: true },
        vet_city: { required: true },
        vet_zip: { required: true},
        vet_dateAdded: { required: true }
      },
      messages: {
        user_name: { required: "Please enter a username", minlength: "Your username must consist of at least 2 characters"},
        user_mobile: { required: "Please provide a mobile #"},
        user_password: { required: "Please provide a password", minlength: "Your password must be at least 5 characters long" },
        vet_fname: { required: "Please provide a First Name", minlength: "Name must be at least 2 characters long" },
        vet_lname: { required: "Please provide a Last Name", minlength: "Name must be at least 2 characters long" },
        vet_mname: { required: "Please provide a Middle Name", minlength: "Name must be at least 2 characters long" },
        vet_mobile: { required: "Please provide Mobile #"},
        vet_tel: { required: "Please provide Tel. #"},
        vet_birthday: { required: "Please provide Birthday"},
        vet_blk: { required: "Please provide Blk. Address"},
        vet_street: { required: "Please provide Address"},
        vet_subdivision: { required: "Please provide Address"},
        vet_barangay: { required: "Please provide Address"},
        vet_city: { required: "Please provide Address"},
        vet_zip: { required: "Please provide ZIP"},
        vet_dateAdded: { required: "Please pick a date"},
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
    <form action="{{ route('vet.addveterinarian') }}" method="POST" id="regVet">
        @csrf
    <table class="table table-striped table-hover">
  <thead>
    <tr>
        <input type="text" disabled style="width: 50px; border-color: white; background-color: white" class="form-control" value="{{ $userVetID->user_id+1 }}">
        <input type="hidden" disabled style="width: 50px; border-color: white; background-color: white" class="form-control" name="userType_id" value="2">
        
        <td>
            <div class="form-group" style="">
                <label>Username: </label>
                <input type="text" style="width: 300px" class="form-control" id="user_name" name="user_name" value="{{ old('user_name')}}" placeholder="Enter username">
                <div >
                    <span class="text-danger error-text user_name_error" id="messageModal">@error('user_name'){{ $message }}@enderror</span>
                </div>
            </div>
        </td>
        <td>
            <div class="form-group">
                <label>Password: </label>
                <input type="password" style="width: 300px;" class="form-control" id="user_password" name="user_password" value="{{ old('user_password')}}" placeholder="Enter password">
            </div>
        </td>
        <td>
            <div class="form-group">
                <label>Account Mobile: </label>
                <input type="text" style="width: 300px" value="{{ old('user_mobile')}}" class="form-control" id="user_mobile" name="user_mobile" aria-describedby="emailHelp" placeholder="Enter mobile">
            </div>
        </td>
        <td>
            <div class="form-group">
                <label>Email: </label>
                <input type="email" class="form-control" value="{{ old('user_email')}}" style="width: 300px" id="user_email" name="user_email" placeholder="Enter email">
                <span class="text-danger error-text user_email_error" id="messageModal">@error('user_email'){{ $message }}@enderror</span>
            </div>
        </td>
      
            <div class="form-group" style="width: 300px">
                <input type="hidden" name="userType_id" value="2">
              </div>
       
    </tr>
    <tr>
        <td >
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" style="width: 300px" class="form-control" id="vet_fname" name="vet_fname"  placeholder="Enter First Name">
                <span class="text-danger error-text customer_fname_error">@error('vet_fname'){{ $message }}@enderror</span>
            </div>
        </td>

            <td >
                <div class="form-group">
                    <label>Last Name:</label>
                    <input type="text" style="width: 300px" class="form-control" id="vet_lname" name="vet_lname"  placeholder="Enter Last Name">
                    <span class="text-danger error-text customer_lname_error">@error('vet_lname'){{ $message }}@enderror</span>
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label>Middle Name:</label>
                    <input type="text" style="width: 300px" class="form-control" id="vet_mname" name="vet_mname" aria-describedby="emailHelp" placeholder="Enter Middle Name">
                    <span class="text-danger error-text customer_mname_error">@error('vet_mname'){{ $message }}@enderror</span>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label>Mobile:</label>
                    <input type="number" class="form-control" style="width: 300px" id="vet_mobile" name="vet_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                    <span class="text-danger error-text customer_mobile_error">@error('vet_mobile'){{ $message }}@enderror</span>
                </div>
            </td>
        
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label>Telephone:</label>
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
                <label>Street/Highway:</label>
                <input type="text" class="form-control" name="vet_street" id="vet_street" placeholder="Enter Address">
                <span class="text-danger error-text customer_street_error">@error('vet_street'){{ $message }}@enderror</span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group" style="width: 300px">
                <label>Subdivision:</label>
                <input type="text" class="form-control" name="vet_subdivision" id="vet_subdivision"  placeholder="Enter Address">
                <span class="text-danger error-text customer_subdivision_error">@error('vet_subdivision'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label>Barangay:</label>
                <input type="text" class="form-control" name="vet_barangay" id="vet_barangay" placeholder="Enter Address">
                <span class="text-danger error-text customer_barangay_error">@error('vet_barangay'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label>City:</label>
                <input type="text" class="form-control" name="vet_city" id="vet_city"  placeholder="Enter Address">
                <span class="text-danger error-text customer_city_error">@error('vet_city'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label>Zip Code: </label>
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
                <label for="inputStatus">Active</label>
                <select id="vet_isActive" class="form-control custom-select" name="vet_isActive">
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

 <script>
  $("document").ready(function() {
    setTimeout(function() {
      $("#messageModal").remove();
    }, 3000);
  });
</script>

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