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
  <a class="btn btn-success btn-sm " href="/veterinary/addaccount" style="margin-left: 10px">
    <i class="fas fa-save"></i> Add Account </a>
    <br>
    <br>
  <!-- Default box --> 
  @if(Session::has('customer_deleted')) 
  <div class="alert alert-danger" role="alert" id="messageModal">
    {{ Session::get('customer_deleted') }}
  </div>
   @endif @if(Session::has('newCustomer')) 
   <div class="alert alert-success" role="alert" id="messageModal">
    {{ Session::get('newCustomer') }}
    
  </div> @endif 
  @if(Session::has('success')) 
  <div class="alert alert-success" role="alert" id="messageModal">
   {{ Session::get('success') }}
 </div>
 @endif 
  <div class="card"> @csrf <div class="card-header">
      <h3 class="header">Customer</h3>
      <br>
      <!-- Main content -->
      <table class="table  table-striped table-hover">
          @csrf
        <thead>
          <tr>
            <th scope="col" style="width:5%">#</th>
            <th scope="col" style="width:8%">username</th>
            <th scope="col" style="width:5%">mobile</th>
            <th scope="col" style="width:10%">email</th>
            <th scope="col" style="width:5%">Usertype</th>
            <th scope="col" style="width:5%">Action</th>
         
          </tr>
        </thead>
        <tbody>
             @foreach ($usersData as $user) 
             <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->user_name}}</td>
            <td>{{ $user->user_mobile}}</td>
            <td>{{ $user->user_email}}</td>
            @if ($user->userType_id == 1)
            <td><span class="badge badge-success">Admin</span></td>
            @elseif ($user->userType_id == 2)
            <td><span class="badge badge-Warning">Veterinary</span></td>
            @else
            <td><span class="badge badge-primary">User</span></td>
            @endif
            
            <td class="project-actions text-right">
              <a href="/veterinary/viewpatient/" class="btn btn-primary btn-sm">
                <i class="fas fa-folder"></i> View </a>
              <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal">
                <i class="fas fa-pencil-alt"></i> Edit </a>
              <a class="btn btn-danger btn-sm" href="/veterinary/delete-viewvetcustomer/">
                <i class="fas fa-trash"></i> Delete </a>
                
              <a class="btn btn-success btn-sm" href="/veterinary/registercustomer/{{ $user->user_id }}">
                <i class="fas fa-user"></i> Register Customer </a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
          {{-- <!-- edit Modal -->
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
                  {{-- </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
              </div>
            </form>
            </div>
         
          </div>
          
          {{-- add pets modal--}}
          {{-- <div class="modal fade" id="addpet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Pet</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{ route('vet.addpatient') }}" method="POST" id="add_form"> @CSRF <div class="modal-body"> @CSRF <div class="form-group">
                      <label for="inputname" class="form-label"> Name</label>
                      <input type="name" class="form-control" name="pet_name" value="{{ old('pet_name')}}" aria-describedby="nameHelp" placeholder="Enter Pet Name">
                      <span class="text-danger error-text pet_name_error"></span>
                    </div>
                    <div class="form-group">
                      <label for="inputGender">Gender</label>
                      <select id="inputStatus" class="form-control custom-select" name="pet_gender">
                        <option selected disabled>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                      <span class="text-danger error-text pet_gender_error"></span>
                    </div>
                    <div class="form-group">
                      <label for="inputnotes" class="form-label"> Notes</label>
                      <textarea placeholder="Enter Description and Health Conditions" class="form-control" aria-describedby="namelHelp" id="inputnotes" name="pet_notes"></textarea>
                      <span class="text-danger error-text pet_notes_error"></span>
                    </div>
                    <div class="form-group">
                      <label for="inputBloodtype" class="form-label"> BloodType</label>
                      <input type="bloodtype" class="form-control" name="pet_bloodType" id="exampleInputBloodtype" aria-describedby="emailHelp" placeholder="Optional">
                      <span class="text-danger error-text pet_bloodType_error"></span>
                      <br>
                      <div class="form-group">
                        <label for="date" required class="form-label"> Birthday</label>
                        <br>
                        <div class="col-sm-12">
                          <input type="date" class="form-control" id="date" name="pet_birthday">
                          <span class="text-danger error-text pet_bloodType_error"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="date" required class="form-label"> Registered Date</label>
                        <br>
                        <div class="col-sm-12">
                          <input type="date" class="form-control" id="date" name="pet_registeredDate">
                          <span class="text-danger error-text pet_registeredDate_error"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputType">Type</label>
                        <select id="inputType" class="form-control custom-select" name="pet_type_id">
                          <option selected disabled>Choose pet Type</option> @foreach ($pet_types as $pet_type) <option value="{{ $pet_type->type_id }}">{{ $pet_type->type_name }}</option> @endforeach
                        </select>
                        <span class="text-danger error-text pet_type_id_error"></span>
                      </div>
                      <div class="form-group">
                        <label for="inputBreed">Breed</label>
                        <select id="inputBreed" class="form-control custom-select" name="pet_breed_id">
                          <option selected disabled>Choose Breed</option> @foreach ($pet_breeds as $pet_breed) <option value="{{ $pet_breed->breed_id }}">{{ $pet_breed->breed_name }}</option> @endforeach
                        </select>
                        <span class="text-danger error-text pet_breed_id_error"></span>
                      </div>
                      <div class="form-group">
                        <label for="inputCustomer">Customer</label>
                        <input type="hidden" name="customer_id" id="customer_id" value="{{ $customer->customer_id}}">
                        <input type="text" disabled class="form-control" id="date" name="customer_name" value="{{ $customer->customer_name}}">
                        <span class="text-danger error-text customer_id_error"></span>
                      </div>
                      <div class="form-group">
                        <label for="inputClinic">Clinic</label>
                        <select id="inputClinic" class="form-control custom-select" name="clinic_id">
                          <option selected disabled>Choose Clinic</option> @foreach ($pet_clinics as $clinic) <option selected disabled value="{{ $clinic->clinic_id }}">{{ $clinic->clinic_name }}</option> @endforeach
                        </select>
                        <span class="text-danger error-text clinic_id_error"></span>
                      </div>
                      <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select id="inputStatus" class="form-control custom-select" name="pet_isActive">
                          <option selected disabled>is Pet Active?</option>
                          <option value="1">Yes</option>
                          <option value="0">No</option>
                        </select>
                        <span class="text-danger error-text pet_isActive_error"></span>
                      </div>
                      <div class="form-group">
                        <label for="inputdp"> Profile Picture</label>
                        <br>
                        <input type="file" id="myFile" name="pet_DP">
                        <span class="text-danger error-text pet_isActive_error"></span>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" value="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
              </div>
            </div>
          </div> 
           --}} 
          {{-- end add pets modal  --}}
         
      {{-- {{ $customers->links() }} --}}
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


@endsection