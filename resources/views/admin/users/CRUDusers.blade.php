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
      <h3 class="card-title">User Accounts</h3>
  
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
          <th>Username</th>
          <th>Password</th>
          <th>Name</th>
          <th>Mobile No</th>
          <th>Email</th>
          <th>User Type</th>
            
        <th style="width: 13%" class="text-center">
                  Action
                </th>
          
        </tr>
        </thead>
        <tbody>
        <tr>
           <td>242</td>
          <td>LagriaVincent21</td>
          <td>-----</td> 
          <td>
            <img src="{{asset('vendors/dist/img/vincent.jpg') }}" class="img-circle img-size-32 mr-2">
            Vincent
       
          </td>
      
          <td>
            <small class="text-success mr-1">
              
            </small>
            09123242123
          </td>
          <td>vlagria@gmail.com</td>
         <td>Admin</td>
          
            <td class="project-actions">
              <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal" >
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
          </td> 
        
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
          <h5 class="modal-title">View User Accounts</h5>
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
          <h5 class="modal-title" id="exampleModalLabel">User Accounts</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="" method="POST">
        <div class="modal-body">
      
                <div class="form-group">
                  <label for="exampleInputEmail1">User ID</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User ID">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                </div>
             
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile No</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                  
                </div>

                
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>

          <div class="form-group">
            <label for="inputStatus">Usertype</label>
            <select id="inputStatus" class="form-control custom-select">
              <option selected disabled>--</option>
              <option>Admin</option>
              <option>Veterinarian</option>  
              <option>Customer</option> 
            </select>
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

  <!-- Button trigger modal -->
  <div class = " float-right">
    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addModal">
    <i class="fas fa-save"> Create
    
    </i>
      </button>
      </div>
  


 
    <!-- edit Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">User Accounts</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
  
          <form action="" method="POST">
          <div class="modal-body">
        
                  <div class="form-group">
                    <label for="exampleInputEmail1">User ID</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User ID">
                  </div>
  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                    
                  </div>
  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                  </div>
  
            <div class="form-group">
              <label for="inputStatus">Usertype</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>--</option>
                <option>Admin</option>
                <option>Veterinarian</option>  
                <option>Customer</option> 
              </select>
            </div>
          </div>
    
                
        
      
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save Changes</button>
          </div>
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