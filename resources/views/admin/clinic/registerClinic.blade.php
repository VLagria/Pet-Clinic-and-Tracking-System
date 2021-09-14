@extends('layoutsadmin.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

@section('content') 
@include('sweet::alert')

<script src="https://jqueryvalidation.org/files/lib/jquery-1.11.1.js"></script>


<script>
  $().ready(function() {
    // validate signup form on keyup and submit
    $("#addClinicForm").validate({
      rules: {
        clinic_name: { required: true, minlength: 2, maxlength: 35 },
        owner_name: { required: true, minlength: 2, maxlength: 35},
        clinic_mobile: { required: true, minlength: 9, maxlength: 13},
        clinic_tel: { required: true,  minlength: 9, maxlength: 13},
        clinic_email: { required: true, email: true},
        clinic_blk: { required: true, maxlength: 50},
        clinic_street: { required: true, maxlength: 50},
        clinic_barangay: { required: true, maxlength: 50},
        clinic_city: { required: true, maxlength: 20},
        clinic_zip: { required: true, minlength: 4, maxlength: 8}},
      messages: {
        clinic_name: { required: "Please provide Clinic Name", minlength: "Your clinic must consist of at least 2 characters", maxlength: "Must not exceed 35 characters"},
        owner_name: { required: "Please provide Clinic owner name", minlength: "Minimum length of 2", maxlength: "Must not exceed 35 characters"},
        clinic_mobile: { required: "Please provide Mobile No.", minlength: "Your Mobile No. must be at least 9 characters long", maxlength: "Your Mobile No. must not exceed 13 characters"},
        clinic_tel: { required: "Please provide Tel No.", minlength: "Tel. No. must be at least 9 characters long", maxlength: "Your Mobile No. must not exceed 13 characters"},
        clinic_blk: { required: "Please provide Address", maxlength: "Blk. must not exceed 50 characters"},
        clinic_street: { required: "Please provide Address", maxlength: "Street must not exceed 50 characters"},
        clinic_barangay: { required: "Please provide Address", maxlength: "Barangay must not exceed 50 characters"},
        clinic_city: { required: "Please provide City Address", maxlength: "City must not exceed 20 characters"},
        clinic_zip: { required: "Please provide ZIP address", minlength: "ZIP address must be at least 4 characters long", maxlength: "ZIP must not exceed 8 characters" },
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
<div class="content-wrapper">
  <br>

  <div class="card" style="width: auto; margin-left:20px; margin-right:20px; text-align: center; padding: 20px;">
      <a class="btn btn-error btn-sm" href="/admin/clinic/CRUDclinic/home" style="text-align: left;">
        <i class="fas fa-arrow-left"></i> Return </a>

      <div style="width: auto; text-align: left;">
        <br>
        <h3 style="font-size: 300% ">Register Clinic</h3>
      </div>

      <form action="{{ route('clin.addclinicsubmit') }}" method="POST" id="addClinicForm"> 
        @csrf 
        <table class="table table-striped table-hover">
        <thead>
          <tr>
              <td>
                <label>Clinic Name: </label>
                <input type="text" class="form-control" name="clinic_name" id="clinic_name" placeholder="Enter Clinic Name" style="width: 370px">
              </td>
              <td>
                <label>Owner Name: </label>
                <input type="text" class="form-control" name="owner_name" id="owner_name" placeholder="Enter Owner Name" style="width: 370px">
              </td>
              <td>
                <label>Mobile No: </label>
                <input type="number" class=style="width: 250px
            <td>
                <label>Telephone: </label>
                <input type="number" class="form-control" name="clinic_tel" id="clinic_tel" placeholder="Enter Telephone" style="width: 370px">
              </div>
            </td>
            <td>
                <label>Email: </label>
                <input type="email" class="form-control" name="clinic_email" id="clinic_email" placeholder="Enter Email" style="width: 370px">
            </td>
            <td>
                <label>House Block/Building/Floor No.: </label>
                <input type="text" class="form-control" name="clinic_blk" id="clinic_blk" placeholder="House Block/Building/Floor No." style="width: 370px">
            </td>
          <tr>
            <td>
                <label>Street/Highway: </label>
                <input type="text" class="form-control" name="clinic_street" id="clinic_street" placeholder="House Block/Building/Floor No." style="width: 370px">
            </td>
            <td>
                <label>Barangay: </label>
                <input type="text" class="form-control" name="clinic_barangay" id="clinic_barangay" placeholder="Barangay" style="width: 370px">
            </td>
            <td>
                <label>City: </label>
                <input type="text" class="form-control" name="clinic_city" id="clinic_city" placeholder="City" style="width: 370px">
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label>Zip Code: </label>
                <input type="number" class="form-control" name="clinic_zip" id="clinic_zip" placeholder="Zip Code" style="width: 370px">
            </td>
            <td>
                <label>Clinic Active: </label>
                <select name="clinic_isActive" id="clinic_isActive" style="width: 25%;" class="form-control" >
                  <option value=1 selected=""> Yes </option>
                  <option value=0> No </option>
                </select>
            </td>
            <br>
          </tr>
        </thead>
      </table>
      <div>
        <button type="submit" class="btn btn-success btn-lg" style="width: 250px"><i class="fas fa-save"></i> Save Changes</button>
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