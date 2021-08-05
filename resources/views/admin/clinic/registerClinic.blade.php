@extends('layoutsadmin.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

<script src="https://jqueryvalidation.org/files/lib/jquery.js"></script>
<script src="https://jqueryvalidation.org/files/lib/jquery-1.11.1.js"></script>
<script src="https://jqueryvalidation.org/files/dist/jquery.validate.js"></script>


<script>
  $().ready(function() {
    // validate signup form on keyup and submit
    $("#addClinicForm").validate({
      rules: {
        clinic_name: { required: true, minlength: 2 },
        owner_name: { required: true},
        clinic_mobile: { required: true, minlength: 9 },
        clinic_tel: { required: true },
        clinic_email: { required: true, email: true },
        clinic_blk: { required: true},
        clinic_street: { required: true},
        clinic_barangay: { required: true},
        clinic_city: { required: true},
        clinic_zip: { required: true, minlength: 4 }},
      messages: {
        clinic_name: { required: "Please provide Clinic Name", minlength: "Your clinic must consist of at least 2 characters"},
        owner_name: { required: "Please provide Clinic owner name"},
        clinic_mobile: { required: "Please provide Mobile No.", minlength: "Your Mobile No. must be at least 9 characters long" },
        clinic_tel: { required: "Please provide Tel No."},
        clinic_blk: { required: "Please provide Address"},
        clinic_street: { required: "Please provide Address"},
        clinic_barangay: { required: "Please provide Address"},
        clinic_city: { required: "Please provide City Address"},
        clinic_zip: { required: "Please provide ZIP address", minlength: "ZIP address must be at least 4 characters long" },
        clinic_email: { email: "Please enter a valid email address", required: "please provide email"}
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
  @if(Session::has('clinic_created')) 
    <div class="alert alert-success" id="messageModal" role="alert">
        {{ Session::get('clinic_created') }}
    </div> 
  @endif 

  <div class="card">
    <div class="card-header">
      <a class="btn btn-error btn-sm" href="/admin/clinic/CRUDclinic">
        <i class="fas fa-arrow-left"></i> Return </a>

      <div class="bg bg-light rounded" style="width: 300px">
        <br>
        <h3>Register Clinic</h3>
      </div>

      <form action="{{ route('clin.addclinicsubmit') }}" method="POST" id="addClinicForm"> 
        @csrf 
        <table class="table table-striped table-hover">
        <thead>
          <tr>
              <td>
                <label>Clinic Name: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_name" id="clinic_name" placeholder="Enter Clinic Name" style="width: 370px">
              </td>
              <td>
                <label>Owner Name: </label>
                <input type="text" class="form-control form-control-lg" name="owner_name" id="owner_name" placeholder="Enter Owner Name" style="width: 370px">
              </td>
              <td>
                <label>Mobile No: </label>
                <input type="number" class="form-control form-control-lg" name="clinic_mobile" id="clinic_mobile" placeholder="Enter Mobile No" style="width: 370px">
              </td>
          </tr>
          <tr>
            <td>
                <label>Telephone: </label>
                <input type="number" class="form-control form-control-lg" name="clinic_tel" id="clinic_tel" placeholder="Enter Telephone" style="width: 370px">
              </div>
            </td>
            <td>
                <label>Email: </label>
                <input type="email" class="form-control form-control-lg" name="clinic_email" id="clinic_email" placeholder="Enter Email" style="width: 370px">
            </td>
            <td>
                <label>House Block/Building/Floor No.: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_blk" id="clinic_blk" placeholder="House Block/Building/Floor No." style="width: 370px">
            </td>
          <tr>
            <td>
                <label>Street/Highway: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_street" id="clinic_street" placeholder="House Block/Building/Floor No." style="width: 370px">
            </td>
            <td>
                <label>Barangay: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_barangay" id="clinic_barangay" placeholder="Barangay" style="width: 370px">
            </td>
            <td>
                <label>City: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_city" id="clinic_city" placeholder="City" style="width: 370px">
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label>Zip Code: </label>
                <input type="number" class="form-control form-control-lg" name="clinic_zip" id="clinic_zip" placeholder="Zip Code" style="width: 370px">
            </td>
            <td>
                <label>Clinic Active: </label>
                <select name="clinic_isActive" id="clinic_isActive" class="form-control custom-select" >
                  <option selected disabled>--</option>
                  <option value=1> Yes </option>
                  <option value=0> No </option>
                </select>
            </td>
            <br>
          </tr>
        </thead>
      </table>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-lg" style="width: 250px">Save Changes</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script>
  $("document").ready(function() {
    setTimeout(function() {
      $("#messageModal").remove();
    }, 3000);
  });
</script> @endsection