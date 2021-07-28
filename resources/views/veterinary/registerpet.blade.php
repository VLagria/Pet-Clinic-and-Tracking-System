
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
        <a class="btn btn-error btn-sm" href="/veterinary/viewvetcustomer">
            <i class="fas fa-arrow-left">
            </i>
            Return
        </a>
      <h3 class="header">Register Pet</h3>
      <br>


    <!-- Main content -->
    <form action="{{ route('vet.addpatient') }}" method="post">
@csrf
    <table class="table table-striped table-hover">
  <thead>
    <tr>
        <td >
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Pet Name</label>
                <input type="name" class="form-control" name="pet_name" placeholder="Enter Pet Name">
                <span class="text-danger error-text customer_fname_error">@error('pet_name'){{ $message }}@enderror</span>
            </div>
        </td>

            <td >
                <div class="form-group" style="width: 300px">
                    <label for="inputGender">Gender</label>
                      <select id="inputStatus" class="form-control custom-select" name="pet_gender">
                        <option selected disabled>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    <span class="text-danger error-text customer_lname_error">@error('pet_gender'){{ $message }}@enderror</span>
                </div>
            </td>

            <td>
                <div class="form-group" style="width: 300px">
                    <label for="inputType">Type</label>
                    <select id="inputType" class="form-control custom-select" name="pet_type_id">
                      <option selected disabled>Choose pet Type</option> @foreach ($pet_types as $pet_type) <option value="{{ $pet_type->type_id }}">{{ $pet_type->type_name }}</option> @endforeach
                    </select>
                    <span class="text-danger error-text customer_lname_error">@error('pet_type_id'){{ $message }}@enderror</span>
                  </div>
            </td>
            <td>
                <div class="form-group" style="width: 300px">
                    <label for="inputBreed">Breed</label>
                    <select id="inputBreed" class="form-control custom-select" name="pet_breed_id">
                      <option selected disabled>Choose Breed</option> @foreach ($pet_breeds as $pet_breed) <option value="{{ $pet_breed->breed_id }}">{{ $pet_breed->breed_name }}</option> @endforeach
                    </select>
                    <span class="text-danger error-text customer_blk_error">@error('pet_breed_id'){{ $message }}@enderror</span>
                  </div>
            </td>
            
    
        
    </tr>
    <tr>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputBloodtype" class="form-label"> BloodType</label>
                <input type="bloodtype" class="form-control" name="pet_bloodType" placeholder="Optional">
                <span class="text-danger error-text customer_blk_error">@error('pet_bloodType'){{ $message }}@enderror</span>
                </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="date" required class="form-label"> Registered Date</label>
                <br>
                  <input type="date" class="form-control" id="date" name="pet_registeredDate">
                  <span class="text-danger error-text customer_blk_error">@error('pet_registeredDate'){{ $message }}@enderror</span>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="date" required class="form-label"> Birthday</label>
                <br>
                
                  <input type="date" class="form-control" id="date" name="pet_birthday">
                  <span class="text-danger error-text customer_blk_error">@error('pet_birthday'){{ $message }}@enderror</span>
              
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputCustomer">Owner</label>
                <input type="hidden" name="customer_id" id="customer_id" value="{{ $custInfo->customer_id}}">
                <input type="text" disabled class="form-control" id="date" name="customer_name" value="{{ $custInfo->customer_fname}} {{ $custInfo->customer_lname}}">
                <span class="text-danger error-text customer_id_error"></span>
                <span class="text-danger error-text customer_blk_error">@error('customer_name'){{ $message }}@enderror</span>
              </div>
        </td>
      

        
    </tr>

    <tr>
        
        
        <td>
            <div class="form-group" style="width: 300px;" >
                <label for="inputnotes" class="form-label"> Notes</label>
                <textarea placeholder="Enter Description and Health Conditions" class="form-control" name="pet_notes"></textarea>
                <span class="text-danger error-text customer_street_error">@error('pet_notes'){{ $message }}@enderror</span>
            </div>
        </td>

        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputClinic">Clinic</label>
                <select id="inputClinic" class="form-control custom-select" name="clinic_id">
                  @foreach ($pet_clinics as $clinic) 
                  <option value="{{ $clinic->clinic_id }}">{{ $clinic->clinic_name }}</option> @endforeach
                </select>
                <span class="text-danger error-text customer_blk_error">@error('clinic_id'){{ $message }}@enderror</span>
            </div>
        </td>

        <td>
            <div class="form-group" style="width: 300px;>
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select" name="pet_isActive">
                  <option selected disabled>is Pet Active?</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
                <span class="text-danger error-text customer_blk_error">@error('pet_isActive'){{ $message }}@enderror</span>
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
    <button type="submit" class="btn btn-success btn-sm" style=" height: 40%;"> <i class="fas fa-user"></i> Register Pet </a></button>

   
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