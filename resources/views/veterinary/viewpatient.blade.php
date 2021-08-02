@extends('layoutsvet.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
  <!-- Content Wrapper. Contains page content -->

  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        
          </div><!-- /.col -->
          <div class="col-sm-lg">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
  <!-- Default box -->
  <div class="card"> 
    @csrf
    <div class="card-header">
      <h3 class="header">Pets</h3>
      <br>
      @if(Session::has('success')) 
      <div class="alert alert-success" role="alert" id="messageModal">
      {{ Session::get('success') }}
      </div>
       @endif
       @if(Session::has('warning')) 
      <div class="alert alert-warning" role="alert" id="messageModal">
      {{ Session::get('warning') }}
      </div>
       @endif
      <!-- Main content -->
      <table class="table  table-striped table-hover">
        <thead>
          <tr>
          <th style="width:5%;" scope="col">ID</th>
          <th style="width:5%;"scope="col"> Name</th>
         <th style="width:5%;"scope="col"> Gender</th>
        <th style="width: 10%;"scope="col">Birthday</th>
        <th style="width: 10%;"scope="col"> Notes</th>
         <th style="width: 10%;"scope="col"> Blood Type</th>
         <!-- <th style="width:95px;"scope="col"> Profile</th> -->
          <th style="width: 5%;"scope="col"> Registered Date</th>
         <th style="width: 5%;"scope="col"> Type </th>
          <th style="width: 10%;"scope="col"> Breed </th>
         <th style="width: 10%;"scope="col">Clinic </th>
         <th style="width:5%;"scope="col">Status</th>
         <th style="width:500px;"scope="col">Action</th>
          </tr>
        </thead>
        <tbody> 
          <tr>
            @foreach ($PatientOwner as $owner)
                <td>{{ $owner->pet_id }}</td>
                <td>{{ $owner->pet_name }}</td>
                <td>{{ $owner->pet_gender }}</td>
                <td>{{ $owner->pet_birthday }}</td>
                <td>{{ $owner->pet_notes }}</td>
                <td>{{ $owner->pet_bloodType }}</td>
                <td>{{ $owner->pet_registeredDate }}</td>
                <td>{{ $owner->type_name }}</td>
                <td>{{ $owner->breed_name }}</td>
                <td>{{ $owner->clinic_name }}</td>
                @if ($owner->pet_isActive == 1)
                <td><span class="badge badge-success">Yes</span></td>
                @else
                <td><span class="badge badge-danger">No</span></td>
                @endif
    
            <td class="project-actions text-right">
                      <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>  
                      <a href="/veterinary/vieweditpatient/{{ $owner->pet_id }}" class="btn btn-info btn-sm">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" >
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td> 
              </tr>

  {{-- View  modal  --}}
  <div class="modal" id="viewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Patients</h5>
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
          <h5 class="modal-title" id="exampleModalLabel">Update Pets</h5>
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