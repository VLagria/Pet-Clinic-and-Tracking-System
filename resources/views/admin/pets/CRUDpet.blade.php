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
      <h3 class="card-title">Pets</h3>
  
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
          <th>Gender</th>
          <th>Pet Type</th>
          <th>Pet Breed</th>
          <th>Birthdate</th>
          <th>Blood Type</th>
          <th>Status</th>
          <th>Date of Registration </th>
          <th>Owner</th>
          <th>Clinic</th>
            
        <th style="width: 14%" class="text-center">
                  Action
                </th>
          
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>
            <img src="dist/img/askal.jpg" class="img-circle img-size-32 mr-2">
            Vincent
       
          </td>
          <td>Male</td>
          <td>
            <small class="text-success mr-1">
              
            </small>
            Askal
          </td>
          <td>Askal</td>
          <td>11/15/2020</td>
          <td>B</td>
          <td class="project-state">
            <span class="badge badge-success">Yes</span>
        </td> 
        <td>11/15/2021>
          <td>A21</td>
          <th>A34</td>
          
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
          <h5 class="modal-title">View Customers</h5>
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
          <h5 class="modal-title" id="exampleModalLabel">Update Pet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="" method="POST">
        <div class="modal-body">

      
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Clinic Name">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gender</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Owner Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pet Type</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                </div>
                
                
             
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Telephone</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                  
                </div>

                <div class="form-group">
                  <label for="date" required class="form-label">Birthdate</label>
                  <br>
                  <div class="">
                  <input type="date" class="form-control" id="date" >
                </div>
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
            <label for="inputStatus">Owner</label>
            <select id="inputStatus" class="form-control custom-select">
              <option selected disabled>--</option>
              <option>--</option>
              <option>--</option>  
            </select>
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

  <!-- Button trigger modal -->
  <div class = " float-right">
    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addModal">
        Create
        </i>
      </button>
      </div>
  

   

  <!-- Add Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Pet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="" method="POST">
        <div class="modal-body">

      
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Clinic Name">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gender</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Owner Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pet Type</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                </div>
                
                
             
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Telephone</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                  
                </div>

                <div class="form-group">
                  <label for="date" required class="form-label">Birthdate</label>
                  <br>
                  <div class="">
                  <input type="date" class="form-control" id="date" >
                </div>
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
            <label for="inputStatus">Owner</label>
            <select id="inputStatus" class="form-control custom-select">
              <option selected disabled>--</option>
              <option>--</option>
              <option>--</option>  
            </select>
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