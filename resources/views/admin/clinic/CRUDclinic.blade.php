@extends('layoutsadmin.app')



@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



    <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal" >
      <i class="fas fa-save">
      </i>
     create
  </a>

  
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
              <a class="btn btn-primary btn-sm" href="#" >
                  <i class="fas fa-folder">
                  </i>
                  View
              </a>
              <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <a class="btn btn-danger btn-sm" >
                  <i class="fas fa-trash">
                  </i>
                  Delete
              </a>

              <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#addvet" >
                <i class="fas fa-save">
                </i>
             Create
            </a>
          </td> 
        @endforeach
        </tbody>
  
        
      </table>
      
    </div>
  </div>
  <!-- /.card -->
  



  {{-- View  modal  --}}

  <div class="modal" id="viewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Clinic</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
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
          <h5 class="modal-title" id="exampleModalLabel">Update Clinic</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('post.addclinicsubmit') }}" method="POST">
        <div class="modal-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Clinic Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Clinic Name">
                </div>
             
                <div class="form-group">
                  <label for="exampleInputEmail1">Owner Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Owner Name">
                  
                </div>

                
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile No</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Telephone</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Telephone">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">House Block/Building/Floor No.</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="House Block/Building/Floor No.">
                </div>
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Street/Highway</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="House Block/Building/Floor No.">
                  
                </div>
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Barangay</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Barangay">
                </div>
  
                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="City">
                </div>
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Zip Code</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Zip Code">
                </div>
  


          <div class="form-group">
            <label for="inputStatus">Active</label>
            <select id="inputStatus" class="form-control custom-select">
              <option selected disabled>--</option>
              <option>Yes</option>
              <option>No</option>  
            </select>
 

            <div class="form-group">
              <label for="inputStatus">Admin Clinic</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>--</option>
                <option>--</option>
                <option>--</option>  
              </select>
              </div>
  

          </div>
        </div>
  
              
      
    
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  {{-- end edit modal  --}}

  
   {{-- add vet modal --}}

   <div class="modal fade" id="addvet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Veterinarian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="" method="POST">
        <div class="modal-body">
      
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
                </div>
             
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
                  
                </div>

                
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">
                </div>

          <div class="form-group">
            <label for="inputStatus">Gender</label>
            <select id="inputStatus" class="form-control custom-select">
              <option selected disabled>--</option>
              <option>Female</option>
              <option>Male</option>  
            </select>
          </div>

          <div class="form-group">
            <label for="date" required class="form-label">Birthdate</label>
            <br>
            <div class="">
            <input type="date" class="form-control" id="date" >
          </div>
          </div>
          
             
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                  
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Telephone</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Telephone">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                  
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
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Street/Highway">
                  
                </div>



          <div class="form-group">
            <label for="inputStatus">Active</label>
            <select id="inputStatus" class="form-control custom-select">
              <option selected disabled>--</option>
              <option>Yes</option>
              <option>No</option>  
            </select>

            
  
            <div class="form-group">
              <label for="date" required class="form-label">Registration Date</label>
        
              <div class="">
              <input type="date" class="form-control" id="date" >
            </div>
            </div>
       

            <div class="form-group">
              <label for="inputStatus">Clinic</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>--</option>
                <option>--</option>
                <option>--</option>  
              </select>
              </div>
  


              <div class="form-group">
                <label for="inputdp" > Profile Picture</label>
                <br>
                <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
      
      
      
            </div>


          </div>
        </div>
  
              
      
    
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

   {{-- end add vet modal  --}}



  <!-- Add Modal -->
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
                  <label for="exampleInputEmail1">Clinic Name</label>
                  <input type="text" class="form-control" name="clinic_name" placeholder="Enter Clinic Name">
                </div>
             
                <div class="form-group">
                  <label for="exampleInputEmail1">Owner Name</label>
                  <input type="text" class="form-control" name="owner_name" placeholder="Enter Owner Name">
                  
                </div>

                
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile No</label>
                  <input type="number" class="form-control" name="clinic_mobile" placeholder="Enter Mobile No">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Telephone</label>
                  <input type="number" class="form-control" name="clinic_tel" placeholder="Enter Telephone">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="clinic_email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">House Block/Building/Floor No.</label>
                  <input type="text" class="form-control" name="clinic_blk" placeholder="House Block/Building/Floor No.">
                </div>
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Street/Highway</label>
                  <input type="text" class="form-control" name="clinic_street" placeholder="House Block/Building/Floor No.">
                  
                </div>
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Barangay</label>
                  <input type="text" class="form-control" name="clinic_barangay" placeholder="Barangay">
                </div>
  
                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="text" class="form-control" name="clinic_city" placeholder="City">
                </div>
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Zip Code</label>
                  <input type="number" class="form-control" name="clinic_zip" placeholder="Zip Code">
                </div>
  


          <div class="form-group">
            <label for="inputStatus">Active</label>
            <select  name="clinic_isActive" class="form-control custom-select">
              <option selected disabled></option>
              <option value=1> Yes </option>
              <option value=0> No </option>  
            </select>
 

            <div class="form-group">
              <label for="inputStatus">Admin Clinic</label>
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

  {{-- end add modal  --}}
      
      

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

@endsection