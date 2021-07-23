@extends('layoutsvet.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

@section('content') @csrf 

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
  <a class="btn btn-success btn-sm " data-toggle="modal" data-target="#addModal">
    <i class="fas fa-save"></i> Add Customer </a>
  <!-- Default box -->
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
            <th scope="col" style="width:15%">Address</th>
            <th scope="col" style="width:6%">User ID</th>
            <th scope="col" style="width:20%">Status</th>
            <th scope="col" style="width:60%">Action</th>
          </tr>
        </thead>
        <tbody> 
          @foreach ($customers as $customer) 
          <tr>
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
            <td><span class="badge badge-error">No</span></td>
            @endif
            
            <td class="project-actions text-right">
              <a href="viewpatient" class="btn btn-primary btn-sm" ">
                <i class="fas fa-folder"></i> View </a>
              <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal">
                <i class="fas fa-pencil-alt"></i> Edit </a>
              <a class="btn btn-danger btn-sm" href="#">
                <i class="fas fa-trash"></i> Delete </a>
              <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#addpet">
                <i class="fas fa-paw"></i> Add Pets </a>
            </td> 
          </tr>
          

  <!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('cust.vetaddcustomer') }}" method="post">
        @csrf
        
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="customer_fname" aria-describedby="emailHelp" placeholder="Enter First Name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="customer_lname" aria-describedby="emailHelp" placeholder="Enter Last Name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Middle Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="customer_mname" aria-describedby="emailHelp" placeholder="Enter Middle Name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Mobile</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="customer_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Telephone</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="customer_tel" aria-describedby="emailHelp" placeholder="Enter Telephone">
          </div>

          <div class="form-group">
            <label for="inputStatus">Gender</label>
            <select id="inputStatus" class="form-control custom-select" name="customer_gender">
              <option selected disabled>--</option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
            </select>
          </div>

          <div class="form-group">
            <label for="date" required class="form-label">Birthdate</label>
            <br>
            <div class="">
              <input type="date" class="form-control" id="date" name="customer_birthday">
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">House Block/Building/Floor No.</label>
            <input type="text" class="form-control" name="customer_blk" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Street/Highway</label>
            <input type="text" class="form-control" name="customer_street" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subdivision</label>
            <input type="text" class="form-control" name="customer_subdivision" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Barangay</label>
            <input type="text" class="form-control" name="customer_barangay" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">City</label>
            <input type="text" class="form-control" name="customer_city" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Zip Code</label>
            <input type="text" class="form-control" name="customer_zip" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Addres">
          </div>
         
          <div class="form-group">
            <label for="inputStatus">User</label>
            <select id="inputStatus" class="form-control custom-select" name="user_id">
              <option selected disabled>Choose User ID</option>
              @foreach ($users as $user)
                <option value="{{ $user->user_id }}">{{ $user->user_name }}</option>
              @endforeach
              
            </select>
          </div>
          <div class="form-group">
            <label for="inputStatus">Active</label>
            <select id="inputStatus" class="form-control custom-select" name="isActive">
              <option selected disabled>--</option>
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputdp"> Profile Picture</label>
            <br>
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename" name="customer_DP">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



{{-- end add modal  --}}

{{-- add pets modal--}}
<div class="modal fade" id="addpet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Pet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('vet.addpatient') }}" method="POST" id="add_form">
        @CSRF
        <div class="modal-body">
        @CSRF
                <div class="form-group">
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
                  <label for="inputnotes"  class="form-label"> Notes</label>
                    <textarea placeholder="Enter Description and Health Conditions" class="form-control"aria-describedby="namelHelp"id="inputnotes"  name="pet_notes" ></textarea>
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
                        <input type="date" class="form-control" id="date" name="pet_birthday" >
                        <span class="text-danger error-text pet_bloodType_error"></span>
                      </div>
                  </div>

                <div class="form-group">
                  <label for="date" required class="form-label"> Registered Date</label>
                  <br>
                    <div class="col-sm-12">
                      <input type="date" class="form-control" id="date" name="pet_registeredDate" >
                      <span class="text-danger error-text pet_registeredDate_error"></span>
                    </div>
                </div>

                <div class="form-group">
                  <label for="inputType">Type</label>
                    <select id="inputType" class="form-control custom-select" name="pet_type_id">
                      <option selected disabled>Choose pet Type</option>
                      @foreach ($pet_types as $pet_type)
                      <option value="{{ $pet_type->type_id }}">{{  $pet_type->type_name }}</option>
                      @endforeach
                    </select>
                    <span class="text-danger error-text pet_type_id_error"></span>
                </div>

                <div class="form-group">
                      <label for="inputBreed">Breed</label>
                      <select id="inputBreed" class="form-control custom-select" name="pet_breed_id">
                        <option selected disabled>Choose Breed</option>
                        @foreach ($pet_breeds as $pet_breed)
                        <option value="{{ $pet_breed->breed_id }}">{{ $pet_breed->breed_name }}</option>
                      @endforeach
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
                      <option selected disabled>Choose Clinic</option>
                      @foreach ($pet_clinics as $clinic)
                      <option selected disabled value="{{ $clinic->clinic_id }}">{{ $clinic->clinic_name }}</option>
                    @endforeach
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
                <label for="inputdp" > Profile Picture</label>
                <br>
                <input type="file" id="myFile" name="pet_DP">
                <span class="text-danger error-text pet_isActive_error"></span>
              </div>
         </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" value ="submit" class="btn btn-primary">Save Changes</button>
        </div>
        </form>
    </div>
  </div>
</div>


{{-- end add pets modal  --}}


  {{-- View  modal  --}}
  <div class="modal" id="viewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Customers</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5 id="pet_name">Customer Name: George Tilap </h5>
          <h5 id="pet_name">Mobile number: 9774112284 </h5>
          <h5 id="pet_name">Telephone number: 111177 </h5>
          <h5 id="pet_gender">Gender: female.</h5>
          <h5>Birthday: 07-12-2021.</h5>
          <h5>Address: Blk 14 Silicon Street Warzone Village Laravel Grands Davao City 800</h5>
          <h5>User ID: 3</h5>
          <h5>Status : Active</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- end view modal --}}
  <!-- edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Customers</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">ID</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Mobile </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Telephone </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Telephone Number">
            </div>
            <div class="form-group">
              <label for="inputStatus">Gender</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>Choose Gender</option>
                <option>Female</option>
                <option>Male</option>
              </select>
            </div>

            <div class="form-group">
              <label for="date" required class="form-label">Birthdate</label>
              <br>
              <div class="">
                <input type="date" class="form-control" id="date">
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">House Block/Building/Floor No.</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Street/Highway</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Barangay</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">City</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Zip Code</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Addres">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Street/Highway</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Street">
            </div>
            <div class="form-group">
              <label for="inputStatus">User</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>Choose User</option>
                <option>..</option>
                <option>..</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputStatus">Active</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>is Customer active?</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputdp"> Profile Picture</label>
              <br>
              
                <input type="file" id="myFile" name="filename">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save Changes</button>
          </div>
      </div>
    </form>
   
    </div>

  </div>
  @endforeach
         
        </tbody>
      </table>
      {{ $customers->links() }}
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
<script src="../../dist/js/demo.js"></script> @endsection