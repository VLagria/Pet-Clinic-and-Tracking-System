@extends('layoutsvet.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> @section('content') @csrf <div class="content-wrapper">
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
  {{-- <a class="btn btn-success btn-sm " data-toggle="modal" data-target="#addModal" style="margin-left: 10px">
    <i class="fas fa-save"></i> Add Customer </a>
    <br> --}}
    <br>
  <!-- Default box --> 
  @if(Session::has('customer_deleted')) 
  <div class="alert alert-danger" role="alert" id="messageModal">
    {{ Session::get('customer_deleted') }}
  </div>
   @endif 
   @if(Session::has('newCustomer')) 
   <div class="alert alert-success" role="alert" id="messageModal">
    {{ Session::get('newCustomer') }}
  </div>
  @endif 
  <div class="card"> @csrf <div class="card-header">
      <h3 class="header">Customer</h3>
      <br>
      <!-- Main content -->
      <table class="table  table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" style="width:5%">#</th>
            <th scope="col" style="width:8%"> Name</th>
            <th scope="col" style="width:5%">Mobile</th>
            <th scope="col" style="width:5%">Telephone</th>
            <th scope="col" style="width:10%">Gender</th>
            <th scope="col" style="width:5%">Birthday</th>
            {{-- <th scope="col"style="width:10%">Customer Profile</th> --}}
            <th scope="col" style="width:20%">Address</th>
            <th scope="col" style="width:6%">User ID</th>
            <th scope="col" style="width:8%">Status</th>
            <th scope="col" style="width:30%">Action</th>
          </tr>
        </thead>
        <tbody> @foreach ($customers as $customer) <tr>
            <td>{{ $customer->customer_id}}</td>
            <td>{{ $customer->customer_name}}</td>
            <td>{{ $customer->customer_mobile}}</td>
            <td>{{ $customer->customer_tel}}</td>
            <td>{{ $customer->customer_gender}}</td>
            <td>{{ $customer->customer_birthday}}</td>
            <td>{{ $customer->customer_address}}</td>
            <td>{{ $customer->user_id}}</td>
            @if ($customer->customer_isActive == 1)
            <td><span class="badge badge-success">Yes</span></td>
            @else
            <td><span class="badge badge-danger">No</span></td>
            @endif

            
            
            <td class="project-actions text-right">
              <a href="/veterinary/viewpatient/{{ $customer->customer_id}}" class="btn btn-primary btn-sm">
                <i class="fas fa-folder"></i> View </a>
              <a href="/veterinary/veteditcustomer/{{ $customer->customer_id}}" class="btn btn-info btn-sm" >
                <i class="fas fa-pencil-alt"></i> Edit </a>
              <a class="btn btn-danger btn-sm" href="/veterinary/delete-viewvetcustomer/{{ $customer->customer_id}}">
                <i class="fas fa-trash"></i> Delete </a>
              <a class="btn btn-success btn-sm" href="/veterinary/registerpet/{{ $customer->customer_id}}">
                <i class="fas fa-paw"></i> Add Pets </a>
            </td>
          </tr>
          <!-- edit Modal -->
          <div class="modal fade" id="editModal{{ $customer->customer_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Customers</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="/veterinary/edit-viewvetcustomer/{{ $customer->customer_id}}" method="POST">
                   @csrf 
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" name="customer_fname" value="{{ $customer->customer_fname}}" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" name="customer_lname" value="{{ $customer->customer_lname}}" placeholder="Enter Lirst Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile </label>
                      <input type="number" class="form-control" name="customer_mobile" value="{{ $customer->customer_mobile}}" placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Telephone </label>
                      <input type="number" class="form-control" name="customer_tel"  value="{{ $customer->customer_tel}}" placeholder="Enter Telephone Number">
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Gender</label>
                      <select id="inputStatus" class="form-control custom-select" name="customer_gender">
                        @if ($customer->customer_gender == "male")
                        <option value="Female">Female</option>
                        <option value="Male" selected>Male</option>
                        @else
                        <option value="Female" selected>Female</option>
                        <option value="Male">Male</option>
                        @endif
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="date" required class="form-label">Birthdate</label>
                      <br>
                      <div class="">
                        <input type="date" class="form-control" name="customer_birthday" value="{{ $customer->customer_birthday }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">House Block/Building/Floor No.</label>
                      <input type="text" class="form-control" name="customer_blk" value="{{ $customer->customer_blk }}" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Street/Highway</label>
                      <input type="text" class="form-control" name="customer_street" value="{{ $customer->customer_street }}" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subdivision</label>
                      <input type="text" class="form-control" name="customer_subdivision" value="{{ $customer->customer_subdivision }}" aria-describedby="emailHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Barangay</label>
                      <input type="text" class="form-control" name="customer_barangay" value="{{ $customer->customer_barangay }}" aria-describedby="emailHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <input type="text" class="form-control" name="customer_city" value="{{ $customer->customer_city }}" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Zip Code</label>
                      <input type="number" class="form-control" name="customer_zip" value="{{ $customer->customer_zip }}" placeholder="Enter Addres">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">User ID</label>
                      <input type="text" disabled class="form-control" name="user_id" id="exampleInputEmail1" value="{{ $customer->user_id }}" placeholder="Enter Street">
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Active</label>
                      <select id="inputStatus" class="form-control custom-select" name="customer_isActive">
                        @if ($customer->customer_isActive == 1)
                          <option value="1" selected>Yes</option>
                        @endif
                        <option value="0" selected>No</option>
                      </select>
                    </div>
                    {{-- <div class="form-group">
                      <label for="inputdp"> Profile Picture</label>
                      <br>
                      <input type="file" id="myFile" name="filename" value="{{ $customer->customer_DP }}">
                    </div> --}}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
              </div>
            </form>
            </div>
         
          </div>
          <!-- Add Modal -->
          <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Customers</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="" method="post"> @csrf <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" id="customer_fname" name="customer_fname" aria-describedby="emailHelp" placeholder="Enter First Name">
                      <span class="text-danger error-text customer_fname_error"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" id="customer_lname" name="customer_lname" aria-describedby="emailHelp" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Middle Name</label>
                      <input type="text" class="form-control" id="customer_mname" name="customer_mname" aria-describedby="emailHelp" placeholder="Enter Middle Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile</label>
                      <input type="number" class="form-control" id="customer_mobile" name="customer_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Telephone</label>
                      <input type="number" class="form-control" id="customer_tel" name="customer_tel" aria-describedby="emailHelp" placeholder="Enter Telephone">
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Gender</label>
                      <select id="customer_gender" class="form-control custom-select" name="customer_gender">
                        <option selected disabled>--</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="date" required class="form-label">Birthdate</label>
                      <br>
                      <div class="">
                        <input type="date" class="form-control" id="customer_birthday" name="customer_birthday">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">House Block/Building/Floor No.</label>
                      <input type="text" class="form-control" name="customer_blk" id="customer_blk" aria-describedby="emailHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Street/Highway</label>
                      <input type="text" class="form-control" name="customer_street" id="customer_street" aria-describedby="emailHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subdivision</label>
                      <input type="text" class="form-control" name="customer_subdivision" id="customer_subdivision" aria-describedby="emailHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Barangay</label>
                      <input type="text" class="form-control" name="customer_barangay" id="customer_barangay" aria-describedby="emailHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <input type="text" class="form-control" name="customer_city" id="customer_city" aria-describedby="emailHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Zip Code</label>
                      <input type="text" class="form-control" name="customer_zip" id="customer_zip" aria-describedby="emailHelp" placeholder="Enter Addres">
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">User</label>
                      <select id="user_id" class="form-control custom-select" name="user_id">
                        <option selected disabled>Choose User ID</option> @foreach ($users as $user) <option value="{{ $user->user_id }}">{{ $user->user_name }}</option> @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Active</label>
                      <select id="isActive" class="form-control custom-select" name="isActive">
                        <option selected disabled>--</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputdp"> Profile Picture</label>
                      <br>
                      <form action="/action_page.php">
                        <input type="file" id="customer_DP" name="filename" name="customer_DP">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" id="addSubmit"class="btn btn-primary">Save Changes</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          {{-- end add modal  --}}
          @endforeach
        </tbody>
      </table>
      {{ $customers->links('pagination::bootstrap-4') }}
    </div>
  </div>
</div>
{{-- end edit modal  --}}
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="{{asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
  $("document").ready(function() {
    setTimeout(function() {
      $("#messageModal").remove();
    }, 2000);
  });
</script> 
<script>
  jQuery(document).ready(function(){
     jQuery('#addSubmit').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           }
       });
        jQuery.ajax({
           url: "{{ url('/veterinary/viewvetcustomer') }}",
           method: 'post',
           data: {
            customer_fname: jQuery('#customer_fname').val(),
            customer_lname: jQuery('#customer_lname').val(),
            customer_mname: jQuery('#customer_mname').val(),
            customer_mobile: jQuery('#customer_mobile').val(),
            customer_tel: jQuery('#customer_tel').val(),
            customer_gender: jQuery('#customer_gender').val(),
            customer_birthday: jQuery('#customer_birthday').val(),
            customer_blk: jQuery('#customer_blk').val(),
            customer_street: jQuery('#customer_street').val(),
            customer_subdivision: jQuery('#customer_subdivision').val(),
            customer_barangay: jQuery('#customer_barangay').val(),
            customer_city: jQuery('#customer_city').val(),
            customer_zip: jQuery('#customer_zip').val(),
            user_id: jQuery('#user_id').val(),
            isActive: jQuery('#isActive').val(),

           },
           success: function(result){
             if(result.errors)
             {
               jQuery('.alert-danger').html('');

               jQuery.each(result.errors, function(key, value){
                 jQuery('.alert-danger').show();
                 jQuery('.alert-danger').append('<li>'+value+'</li>');
               });
             }
             else
             {
               jQuery('.alert-danger').hide();
               $('#open').hide();
               $('#myModal').modal('hide');
             }
           }});
        });
     });
</script>

@endsection