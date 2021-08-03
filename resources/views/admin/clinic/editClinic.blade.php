@extends('layoutsadmin.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

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
  @if(Session::has('clinic_updated')) 
    <div class="alert alert-success" id="messageModal" role="alert">
        {{ Session::get('clinic_updated') }}
    </div> 
  @endif 

  <div class="card">
    <div class="card-header">
      <a class="btn btn-error btn-sm" href="/admin/clinic/CRUDclinic">
        <i class="fas fa-arrow-left"></i> Return </a>

      <div class="bg bg-light rounded" style="width: 300px">
        <br>
        <h3>Edit Clinic</h3>
      </div>

      <form action="/admin/clinic/editClinic/{{ $clinics->clinic_id }}" method="POST"> 
        @csrf 
        <table class="table table-striped table-hover">
        <thead>
          <tr>
            <div class="form-group">
              <td>
                <label>Clinic Name: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_name" id="clinic_name" placeholder="Enter Clinic Name" style="width: 300px" value="{{$clinics->clinic_name}}">
                <span class="text-danger error-text customer_fname_error">
                    @error('clinic_name')
                        {{ $message }}
                    @enderror
                </span>
              </td>
            </div>
            <div class="form-group">
              <td>
                <label>Owner Name: </label>
                <input type="text" class="form-control form-control-lg" name="owner_name" id="owner_name" placeholder="Enter Owner Name" style="width: 300px" value="{{$clinics->owner_name}}">
                <span class="text-danger error-text customer_fname_error">@error('owner_name'){{ $message }}@enderror</span>
              </td>
            </div>
            <div class="form-group">
              <td>
                <label>Mobile No: </label>
                <input type="number" class="form-control form-control-lg" name="clinic_mobile" id="clinic_mobile" placeholder="Enter Mobile No" style="width: 300px" value="{{$clinics->clinic_mobile}}">
                <span class="text-danger error-text customer_fname_error">@error('user_mobile'){{ $message }}@enderror</span>
              </td>
            </div>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label>Telephone: </label>
                <input type="number" class="form-control form-control-lg" name="clinic_tel" id="clinic_tel" placeholder="Enter Telephone" value="{{$clinics->clinic_tel}}">
                <span class="text-danger error-text customer_fname_error">@error('user_email'){{ $message }}@enderror</span>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label>Email: </label>
                <input type="email" class="form-control form-control-lg" name="clinic_email" id="clinic_email" placeholder="Enter Email" value="{{$clinics->clinic_email}}">
              </div>
            </td>
            <td>
              <div class="form-group">
                <label>House Block/Building/Floor No.: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_blk" id="clinic_blk" placeholder="House Block/Building/Floor No." value="{{$clinics->clinic_blk}}">
              </div>
            </td>
          <tr>
            <td>
              <div class="form-group">
                <label>Street/Highway: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_street" id="clinic_street" placeholder="House Block/Building/Floor No." value="{{$clinics->clinic_street}}">
              </div>
            </td>
            <td>
              <div class="form-group">
                <label>Barangay: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_barangay" id="clinic_barangay" placeholder="Barangay" value="{{$clinics->clinic_barangay}}">
              </div>
            </td>
            <td>
              <div class="form-group">
                <label>City: </label>
                <input type="text" class="form-control form-control-lg" name="clinic_city" id="clinic_city" placeholder="City" value="{{$clinics->clinic_city}}">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label>Zip Code: </label>
                <input type="number" class="form-control form-control-lg" name="clinic_zip" id="clinic_zip" placeholder="Zip Code" value="{{$clinics->clinic_zip}}">
              </div>
            </td>
            <td>
              <div class="form-group">
                <label>Clinic Active: </label>
                <select name="clinic_isActive" id="clinic_isActive" class="form-control-lg custom-select">
                  <option selected disabled>--</option>
                  @if($clinics->clinic_isActive == 1 )
                  <option value=1 selected> Yes </option>
                  <option value=0 > No </option>
                  @else
                  <option value=0 selected> No </option>
                  <option value=1 > Yes </option>
                  @endif

                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label>ID #: </label>
                <input type="number" class="form-control form-control-lg" name="clinic_id" id="clinic_id" value="{{ $clinics->clinic_id }}" disabled="">
              </div>
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