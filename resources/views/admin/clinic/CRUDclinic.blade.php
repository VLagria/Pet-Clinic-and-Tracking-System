@extends('layoutsadmin.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
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
    
    <!-- /.content-header -->





<!-- Default box -->

  @if(Session::has('clinic_updated')) 
    <div class="alert alert-success" id="messageModal" data-toggle="modal" role="alert">
      {{ Session::get('clinic_updated') }}
    </div> 
  @endif
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Clinic</h3>
  
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
        <tr>
  
          <th>ID</th>
          <th>Clinic Name</th>
          <th>Owner Name</th>
          <th>Mobile No</th>
          <th>Telephone</th>
          <th>Email</th>       
          <th style="width: 25%">Address</th>
          <th>Status</th>
            
        <th style="width: 22%" class="text-center">
                  Action
                </th>
          
        </tr>
        </thead>
        <tbody>
          @foreach($clinic as $cAccounts)
        <tr>
           <td>{{ $cAccounts->clinic_id }}</td>
           <td>{{ $cAccounts->clinic_name }}</td>
           <td>{{ $cAccounts->owner_name }}</td>
           <td>{{ $cAccounts->clinic_mobile }}</td>
           <td>{{ $cAccounts->clinic_tel }}</td>
           <td>{{ $cAccounts->clinic_email }}</td>
           <td>{{ $cAccounts->clinic_blk }} / {{ $cAccounts->clinic_street }} / {{ $cAccounts->clinic_barangay }} / {{ $cAccounts->clinic_barangay }} / {{ $cAccounts->clinic_city }} / {{ $cAccounts->clinic_zip }}</td>

          <td class="project-state">
            <span class="badge badge-success">{{ $cAccounts->clinic_isActive }}</span>
          </td> 
          
            <td class="project-actions">

              <button type="button" class="btn btn-primary btn-sm view-btn" id="view" data-toggle="modal" data-target="#viewModal{{ $cAccounts->clinic_id }}"><i class="fas fa-folder">
                  </i>View</button>

              <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal{{ $cAccounts->clinic_id }}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <button class="btn btn-danger btn-sm" id="delete" lass="btn btn-danger btn-sm" data-toggle="modal"  data-target="#deleteClinicModal">
                  <i class="fas fa-trash"></i>
                  Delete
                  </button>

              <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#addvet" >
                <i class="fas fa-save">
                </i>
             Create
            </a>
          </td> 
<!-------------------------------- edit Modal ----------------------->
  <div class="modal fade" id="editModal{{ $cAccounts->clinic_id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document"> 
      <div class="modal-content">
        <div class="modal-header">
<<<<<<< HEAD
          <h5 class="modal-title">View Clinic</h5>
=======
          <h5 class="modal-title" >Update Clinic</h5>
>>>>>>> 2887e291c84e040529373ed88a9c50ba2d2c809f
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
<<<<<<< HEAD
        <div class="modal-body">
          <h5>Name:   Hannah Ramirez.</h5>
          <h5>Birthday:    12/105/1999.</h5>
          <h5>Gender: Bayot.</h5>
          <h5>Mobile:        09129837823.</h5>
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
            <h5 class="modal-title" id="exampleModalLabel">Update Patients</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
=======
>>>>>>> 2887e291c84e040529373ed88a9c50ba2d2c809f

        <form action="/CRUDclinic/update/{{ $cAccounts->clinic_id }}" method="POST"> 
            {{ csrf_field() }}
            <div class="modal-body">
            <input type="hidden" name="update_id" id="update_id">
            <div class="form-group">
            <label>Clinic ID: </label>  

            <input type="text" name="user_id" id="user_id" class="form-control" disabled="" value="{{ $cAccounts->clinic_id }}">

          </div>

          <div class="form-group">
            <labe>Clinic Name </label>
              <input type="text" class="form-control" id="clinic_name" name="clinic_name" aria-describedby="emailHelp" placeholder="Enter Clinic Name" value="{{ $cAccounts->clinic_name }}">
          </div>
<<<<<<< HEAD
        </div>
    
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  {{-- end edit modal  --}}
=======
>>>>>>> 2887e291c84e040529373ed88a9c50ba2d2c809f

          <div class="form-group">
            <label>Owner Name</label>
            <input type="text" class="form-control" id="owner_name" name="owner_name" aria-describedby="emailHelp" placeholder="Enter Owner Name" value="{{ $cAccounts->owner_name }}">
          </div>

          <div class="form-group">
            <label>Mobile No</label>
            <input type="number" class="form-control" id="clinic_mobile" name="clinic_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No" value="{{ $cAccounts->clinic_mobile }}">
          </div>

          <div class="form-group">
            <label>Telephone</label>
            <input type="number" class="form-control" id="clinic_tel" name="clinic_tel" aria-describedby="emailHelp" placeholder="Enter Telephone" value="{{ $cAccounts->clinic_tel }}">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="clinic_email" name="clinic_email" aria-describedby="emailHelp" placeholder="Enter Email" value="{{ $cAccounts->clinic_email }}">
          </div>

          <div class="form-group">
            <label>House Block/Building/Floor No.</label>
            <input type="text" class="form-control" id="clinic_blk" name="clinic_blk" aria-describedby="emailHelp" placeholder="House Block/Building/Floor No." value="{{ $cAccounts->clinic_blk }}">
          </div>

          <div class="form-group">
            <label>Street/Highway</label>
            <input type="text" class="form-control" id="clinic_street" name="clinic_street" aria-describedby="emailHelp" placeholder="House Block/Building/Floor No." value="{{ $cAccounts->clinic_street }}">
          </div>

          <div class="form-group">
            <label>Barangay</label>
            <input type="text" class="form-control" id="clinic_barangay" name="clinic_barangay" aria-describedby="emailHelp" placeholder="Barangay" value="{{ $cAccounts->clinic_barangay }}">
          </div>

          <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" id="clinic_city" name="clinic_city" aria-describedby="emailHelp" placeholder="City" value="{{ $cAccounts->clinic_city }}">
          </div>

          <div class="form-group">
            <label>Zip Code</label>
            <input type="text" class="form-control" id="clinic_zip" name="clinic_zip" aria-describedby="emailHelp" placeholder="Zip Code" value="{{ $cAccounts->clinic_zip }}">
          </div>

          <div class="form-group">
            <label>Active</label>
            <select id="inputStatus" class="form-control custom-select">
              <option selected disabled>--</option>
              <option value=1>Yes</option>
              <option value=0>No</option>
            </select>
          </div>

            <div class="form-group">
              <label for="inputStatus">Admin Clinic</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>--</option>
                <option>--</option>
                <option>--</option>
              </select>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- {{-- end edit modal  --}} -->
          <!-- {{-- View  modal  --}} -->

          <div class="modal" id="viewModal{{ $cAccounts->clinic_id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title"><strong>View Clinic</strong></h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <h5><li>ID: {{ $cAccounts->clinic_id }}</li>
                  <br><strong><li>Clinic Name: </strong>{{ $cAccounts->clinic_name }}</li>
                  <br><li>Owner Name: {{ $cAccounts->owner_name }}</li>
                  <br><li>Mobile No: {{ $cAccounts->clinic_mobile }}</li>
                  <br><li>Telephone: {{ $cAccounts->clinic_tel }}</li>
                  <br><li>Email:  {{ $cAccounts->clinic_email }}</li>
                  <br><li>Address: {{ $cAccounts->clinic_blk }} / {{ $cAccounts->clinic_street }} / {{ $cAccounts->clinic_barangay }} / {{ $cAccounts->clinic_city }} / {{ $cAccounts->clinic_zip }}</li>
                  <br><li>Status: Yes</li></h5>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- {{-- end view modal --}} -->
          
          <!---------------------------- delete modal -------------------------------->
  <div class="modal fade" id="deleteClinicModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action=" /admin/users/CRUDusers/delete/ " method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <h3>Confirm deletion of user?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!---------------------------- end delete modal -------------------------------->

  
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card -->

  <!-- Add Modal -->
  <div class="float-sm-right">
    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal" >
      <i class="fas fa-paw">
      </i>
     Create
    </button>
  </div>

  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Clinic</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('post.addclinicsubmit') }}" method="POST">
          @csrf
        <div class="modal-body">

                <div class="form-group">
                  <label >Clinic Name</label>
                  <input type="text" class="form-control" name="clinic_name" placeholder="Enter Clinic Name">
                </div>
             
                <div class="form-group">
                  <label>Owner Name</label>
                  <input type="text" class="form-control" name="owner_name" placeholder="Enter Owner Name">
                  
                </div>

                
                <div class="form-group">
                  <label>Mobile No</label>
                  <input type="number" class="form-control" name="clinic_mobile" placeholder="Enter Mobile No">
                </div>

                <div class="form-group">
                  <label>Telephone</label>
                  <input type="number" class="form-control" name="clinic_tel" placeholder="Enter Telephone">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="clinic_email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label>House Block/Building/Floor No.</label>
                  <input type="text" class="form-control" name="clinic_blk" placeholder="House Block/Building/Floor No.">
                </div>
  
                <div class="form-group">
                  <label>Street/Highway</label>
                  <input type="text" class="form-control" name="clinic_street" placeholder="House Block/Building/Floor No.">
                  
                </div>
  
                <div class="form-group">
                  <label>Barangay</label>
                  <input type="text" class="form-control" name="clinic_barangay" placeholder="Barangay">
                </div>
  
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" name="clinic_city" placeholder="City">
                </div>
  
                <div class="form-group">
                  <label>Zip Code</label>
                  <input type="number" class="form-control" name="clinic_zip" placeholder="Zip Code">
                </div>

                <div class="form-group">
                  <label>Active</label>
                  <select  name="clinic_isActive" class="form-control custom-select">
                    <option selected disabled></option>
                    <option value=1> Yes </option>
                    <option value=0> No </option>  
                </select>

            <div class="form-group">
              <label>Admin Clinic</label>
              <select id="inputStatus" class="form-control custom-select">
                <option>null</option>
                <option>null</option>
                <option>null</option>  
              </select>
              </div>
          </div>
        </div>
    
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <!-- {{-- end add modal  --}} -->
  



  
   
    

  




      


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<<<<<<< HEAD
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
=======

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="../../plugins/jquery/jquery.min.js"></script>

  <script>
    $("document").ready(function(){
      setTimeout(function(){
        $("#messageModal").remove();
      }, 3000 );
    });
  </script>
>>>>>>> 2887e291c84e040529373ed88a9c50ba2d2c809f

@endsection