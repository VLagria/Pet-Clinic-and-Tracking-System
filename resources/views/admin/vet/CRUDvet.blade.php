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
    </div>
    <!-- /.content-header -->





<!-- Default box -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Veterinarians</h3>
  
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
  
          <th>Name</th>
          <!-- <th>Mobile No</th> -->
          <!-- <th>Telephone</th> -->
          <th>Birthdate</th>
          <!-- <th>Email</th> -->
          <!-- <th>Address</th> -->
          <th>Status</th>
          <th>Clinic</th>
            
        <th > Action </th>
          
        </tr>
        </thead>
        @foreach($admin_Veterinary as $vetInfo)
        <tbody>
        <tr>
          <td> {{ $vetInfo->vet_fname }} {{ $vetInfo->vet_mname }} {{ $vetInfo->vet_lname }} </td>
          <td>{{ $vetInfo->vet_birthday}}</td> 
          <!-- <td>
            <img src="{{asset('vendors/dist/img/vincent.jpg') }}" class="img-circle img-size-32 mr-2">
            Vincent
          </td> -->

          @if ($vetInfo->vet_isActive == 1)
            <td><span class="badge badge-success">Yes</span></td>
            @else
            <td><span class="badge badge-danger">No</span></td>
            @endif


          <td>{{ $vetInfo->clinic_name }}</td>
          
            <td class="project-actions">
              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal{{ $vetInfo->vet_id }}" >
                  <i class="fas fa-folder">
                  </i>
                  View
              </button>
              <a class="btn btn-info btn-sm" >
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $vetInfo->vet_id }}">
                  <i class="fas fa-trash">
                  </i>
                  
              </a>
          </td> 
        
        </tbody>
        <!---------------------------- delete modal -------------------------------->
  <div class="modal fade" id="deleteModal{{ $vetInfo->vet_id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Vet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/vet/viewVetDetails/delete/{{ $vetInfo->user_id }}" method="GET">
                @csrf
                <div class="modal-body">
                    <h3>Confirm deletion of Veterinarian?</h3>
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
<!-- VIEW MODAL -->
  <div id="viewModal{{ $vetInfo->vet_id }}" class="modal fade" role="dialog" style="display:none">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display: inline-block;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-weight: bold;">View Veterinary Details</h4>
        </div>
          <div class="modal-body" style="font-weight: bold;">
            <h3 style="font-weight: bold;">User ID: {{ $vetInfo->user_id }}
              <h5><strong>Username:  </strong>{{ $vetInfo->user_name }}
                <br><strong>Password:  </strong>{{ $vetInfo->user_password }}
                <br><strong>Mobile No.:  </strong>{{ $vetInfo->user_mobile }}
                <br><strong>Email:  </strong>{{ $vetInfo->user_email }}
                <br><strong>Vet Mobile#   :  </strong>{{ $vetInfo->vet_mobile }}
                <br><strong>Vet Telephone#   :  </strong>{{ $vetInfo->vet_tel }}
                <br><br><strong>Address:  </strong>{{ $vetInfo->vet_address }}
                <br><br><strong>Date Registered   :  </strong>{{ $vetInfo->vet_dateAdded }}
                <br><strong>Clinic Assigned:  </strong>{{ $vetInfo->clinic_name }}
              </h5>
            </h3>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal" id="CloseBtn">Close</button>
          </div>
    </div>
  </div>
</div>
<!-- END VIEW MODAL -->

      @endforeach
        
      </table>
      
    </div>
  </div>
  <!-- /.card -->
     
    <!-- edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Veterinarian</h5>
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

  {{-- end edit modal  --}}
      

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->

<script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

@endsection