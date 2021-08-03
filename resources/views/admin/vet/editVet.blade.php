@extends('layoutsadmin.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> @section('content') <div class="content-wrapper">

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
    
    @if(Session::has('fail')) 
    <div class="alert alert-warning" id="messageModal" role="alert">
      {{ Session::get('fail') }}
    </div> 
    @endif

    <div class="card-header">
      <a class="btn btn-error btn-sm" href="/admin/vet/viewVetDetails/{{ $vets->clinic_id }}">
        <i class="fas fa-arrow-left"></i> Return </a>
      <div class="bg bg-light rounded" style="width: 300px">
        <br>
        <h3 class="header">Edit Veterinarian</h3>
      </div>
      <br>
      <form action="/admin/vet/editVet/saveUpdate/{{$vets->vet_id}}" method="POST" id="editFormID"> 
        @csrf 
        <table class="table table-striped table-hover">
  <thead>
    <tr>
        <td >
            <div class="form-group">
                <label for="exampleInputEmail1">First Name:</label>
                <input type="text" style="width: 300px" class="form-control" id="vet_fname" name="vet_fname"  placeholder="Enter First Name" value="{{$vets->vet_fname}}">
                <span class="text-danger error-text customer_fname_error">@error('vet_fname'){{ $message }}@enderror</span>
            </div>
        </td>

            <td >
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name:</label>
                    <input type="text" style="width: 300px" class="form-control" id="vet_lname" name="vet_lname"  placeholder="Enter Last Name" value="{{$vets->vet_lname}}">
                    <span class="text-danger error-text customer_lname_error">@error('vet_lname'){{ $message }}@enderror</span>
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Middle Name:</label>
                    <input type="text" style="width: 300px" class="form-control" id="vet_mname" name="vet_mname" aria-describedby="emailHelp" placeholder="Enter Middle Name" value="{{$vets->vet_mname}}">
                    <span class="text-danger error-text customer_mname_error">@error('vet_mname'){{ $message }}@enderror</span>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile:</label>
                    <input type="number" class="form-control" style="width: 300px" id="vet_mobile" name="vet_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No" value="{{$vets->vet_mobile}}">
                    <span class="text-danger error-text customer_mobile_error">@error('vet_mobile'){{ $message }}@enderror</span>
                </div>
            </td>
        
    </tr>
    <tr>
        <td>
            <div class="form-group">
                <label for="exampleInputEmail1">Telephone:</label>
                <input type="number" class="form-control" style="width: 300px" id="vet_tel" name="vet_tel" placeholder="Enter Telephone" value="{{$vets->vet_tel}}">
                <span class="text-danger error-text customer_tel_error">@error('vet_tel'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="date" required class="form-label">Birthdate:</label>
                <br>
                <div class="">
                  <input type="date" class="form-control" id="vet_birthday" name="vet_birthday" value="{{$vets->vet_birthday}}">
                  <span class="text-danger error-text customer_birthday_error">@error('vet_birthday'){{ $message }}@enderror</span>
                </div>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label>House Block/Building/Floor No.:</label>
                <input type="text" class="form-control" name="vet_blk" id="vet_blk"  placeholder="Enter Address" value="{{$vets->vet_blk}}">
                <span class="text-danger error-text customer_blk_error">@error('vet_blk'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Street/Highway:</label>
                <input type="text" class="form-control" name="vet_street" id="vet_street" placeholder="Enter Address" value="{{$vets->vet_street}}">
                <span class="text-danger error-text customer_street_error">@error('vet_street'){{ $message }}@enderror</span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Subdivision:</label>
                <input type="text" class="form-control" name="vet_subdivision" id="vet_subdivision"  placeholder="Enter Address" value="{{$vets->vet_subdivision}}">
                <span class="text-danger error-text customer_subdivision_error">@error('vet_subdivision'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Barangay:</label>
                <input type="text" class="form-control" name="vet_barangay" id="vet_barangay" placeholder="Enter Address" value="{{$vets->vet_barangay}}">
                <span class="text-danger error-text customer_barangay_error">@error('vet_barangay'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">City:</label>
                <input type="text" class="form-control" name="vet_city" id="vet_city"  placeholder="Enter Address" value="{{$vets->vet_city}}">
                <span class="text-danger error-text customer_city_error">@error('vet_city'){{ $message }}@enderror</span>
            </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Zip Code: </label>
                <input type="text" class="form-control" name="vet_zip" id="vet_zip" placeholder="Enter Addres" value="{{$vets->vet_zip}}">
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
                  <input type="date" class="form-control" id="vet_dateAdded" name="vet_dateAdded" value="{{$vets->vet_dateAdded}}">
                  <span class="text-danger error-text customer_birthday_error">@error('vet_dateAdded'){{ $message }}@enderror</span>
                </div>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">Clinic:</label>
                
                <select id="clinic_id" class="form-control custom-select" name="clinic_id" value="{{$vets->clinic_id}}">
                    @foreach ($vetInfo as $clinicc) 
                     @if ($clinicc->clinic_id == $vets->clinic_id)
                     <option value="{{ $clinicc->clinic_id }}" selected>{{ $clinicc->clinic_name }}</option>   
                     @else
                     <option value="{{ $clinicc->clinic_id }}">{{ $clinicc->clinic_name }}</option> 
                     @endif
                     @endforeach
                  </select>
                      
              </div>
              <span class="text-danger error-text user_id_error">@error('clinic_id'){{ $message }}@enderror</span>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">User:</label>
                
                <select id="user_id" class="form-control custom-select" name="user_id">
                    <option value="{{ $vets->user_id+1}}">{{ $vets->user_id+1}}</option>
                  </select>
                      
              </div>
              <span class="text-danger error-text user_id_error">@error('user_id'){{ $message }}@enderror</span>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputStatus">Active</label>
                <select id="vet_isActive" class="form-control custom-select" name="vet_isActive" >
                 @if( $vets->vet_isActive  == 1)
                  <option value="1" selected>Yes</option>
                  <option value="0">No</option>
                  @elseif( $vets->vet_isActive == 0)
                  <option value="0"selected>No</option>
                  <option value="1">Yes</option>
                  @endif
                </select>
                <span class="text-danger error-text isActive_error">@error('vet_isActive'){{ $message }}@enderror</span>
              </div>
        </td>
        <td>
            <div class="form-group" style="width: 300px">
                <label for="inputdp">Vet Profile:</label>
                <br>
                <form action="/action_page.php">
                  <input type="file" id="vet_DP" name="vet_DP" value="{{$vets->vet_DP}}">
              </div>
        </td>
    </tr>
</div>
  </thead>
</table>
</div>
  <div style="text-align: right; height: 100; padding-top: 20px">
    <button type="submit" class="btn btn-success btn-sm" style=" height: 40%;"><i class="fas fa-user"></i> Update Veterinary</button></div>
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
    $("document").ready(function(){
      setTimeout(function(){
        $("#messageModal").remove();
      }, 3000 );
    });
  </script>
  
  <script>
    $('.feet').on('click', function(e){
        e.preventDefault();
        $(#formSubmit).on('submit', function())
    });
  </script>

@endsection