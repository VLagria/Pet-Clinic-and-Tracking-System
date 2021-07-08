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
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      #
                  </th>
                  <th style="width: 3%">
                      Name
                  </th>
                  <th style="width: 3%">
                   Gender
                </th>
                <th style="width: 6%">
                  Pet Type
              </th>

                <th style="width: 7%">
                  Pet Breed
              </th>
                  <th style="width: 5%">
                    Birthdate
                  </th>
                  <th style="width: 10%">
                      Blood Type
                  </th>
                  <th style="width: 10%" >
                      Profile Image
                </th>
                  <th style="width: 10%" >
                    Regisration Date
                  </th>
                  <th style="width: 10%">
                    Customer ID
                  </th>
                  
                  <th style="width: 5%">
                    Clinic ID
                  </th>
                  <th style="width: 5%" class="text-center">
                    isActive
                   </th>
                </th>
                <th style="width: 15%" class="text-center">
                  Action
                </th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>
                      #
                  </td>
                  <td>
                      <a>
                         Mingmingming
                      </a>
                      <br/>
                      <small>
          
                      </small>
                  </td>
                    
                  <td>
                      <a>
                        Female
                      </a>
                  </td>
                  <td>
                    <a>
                      Persian
                    </a>
                </td>
                  <td>
                      <a>
                   Persian
                      </a>
                  </td>
  
                  <td>
                    <a>
                12/2/20014
                    </a>
                </td>
                <td>
                  <a>
                  AAAAA
                  </a>
              </td>

            </td>

            <td>
              <a>
           (Image Here)
              </a>

              
            </td>
              
              <td>
                <a>
                  07/02/2021
                </a>

              </td>

              <td>
                <a>
                 12323
                </a>

              </td>
              <td>
                <a>
                2423
                </a>
            </td>
                


           
                  <td class="project-state">
                      <span class="badge badge-success">Yes</span>
                  </td> 

                </td>
                <td class="project-actions text-right">
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
              </tr>
              <tr>
              </tr>
  
            
          </tbody>
      </table>

    
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
 {{-- end view modal --}}

 
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
          <div class="modal-body">
            <h5>Name:   Hannah Ramirez.</h5>
            <h5>Gender:    12/105/1999.</h5>
            <h5>Pet Type: Bayot.</h5>
            <h5>Pet Breed:        09129837823.</h5>
          </div>
        </div>
        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Button trigger modal -->
  <div class = "d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#addModal">
        Create
    
        </i>
      </button>
      </div>
  
 
 <!-- edit Modal -->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Pets</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST">
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Clinic Name">
          
          <div class="form-group">
            <label for="inputStatus">Gender</label>
            <select id="inputStatus" class="form-control custom-select">
              <option selected disabled>--</option>
              <option>Male</option>
              <option>Female</option>
 
            </select>
          </div> 
        <div class="form-group">
          <label for="exampleInputEmail1">Pet Type</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pet Type">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Pet Breed</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pet Breed">
        </div>
      
         
        <div class="form-group">
          <label for="exampleInputEmail1">Birthdate</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
          
        </div>

        <div class="form-group">
          <label for="inputStatus">Blood Type</label>
          <select id="inputStatus" class="form-control custom-select">
            <option selected disabled>--</option>
            <option>Blood Type 1</option>
            <option>Blood Type 2</option>
            <option>Blood Type 2</option>
            <option>Blood Type 2</option>
            

          </select>
        </div> 

        <div class="form-group">
          <label for="exampleInputEmail1">Profile Image</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
          
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Registration Date</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
          
        </div>

        <div class="form-group">
          <label for="inputStatus">Customer ID</label>
          <select id="inputStatus" class="form-control custom-select">
            <option selected disabled>--</option>
            <option>213123</option>
            <option>21312/option>
            <option>43432</option>
            <option>2344</option>
          
          </select>
          
        </div> 

        <div class="form-group">
          <label for="inputStatus">Clinic ID</label>
          <select id="inputStatus" class="form-control custom-select">
            <option selected disabled>--</option>
            <option>213123</option>
            <option>21312/option>
            <option>43432</option>
            <option>2344</option>
          
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



 <!-- Add Modal -->
 <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Pets</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST">
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Clinic Name">
          
          <div class="form-group">
            <label for="inputStatus">Gender</label>
            <select id="inputStatus" class="form-control custom-select">
              <option selected disabled>--</option>
              <option>Male</option>
              <option>Female</option>
 
            </select>
          </div> 
        <div class="form-group">
          <label for="exampleInputEmail1">Pet Type</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pet Type">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Pet Breed</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pet Breed">
        </div>
      
         
        <div class="form-group">
          <label for="exampleInputEmail1">Birthdate</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
          
        </div>

        <div class="form-group">
          <label for="inputStatus">Blood Type</label>
          <select id="inputStatus" class="form-control custom-select">
            <option selected disabled>--</option>
            <option>Blood Type 1</option>
            <option>Blood Type 2</option>
            <option>Blood Type 2</option>
            <option>Blood Type 2</option>
            

          </select>
        </div> 

        <div class="form-group">
          <label for="exampleInputEmail1">Profile Image</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
          
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Registration Date</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
          
        </div>

        <div class="form-group">
          <label for="inputStatus">Customer ID</label>
          <select id="inputStatus" class="form-control custom-select">
            <option selected disabled>--</option>
            <option>213123</option>
            <option>21312/option>
            <option>43432</option>
            <option>2344</option>
          
          </select>
          
        </div> 

        <div class="form-group">
          <label for="inputStatus">Clinic ID</label>
          <select id="inputStatus" class="form-control custom-select">
            <option selected disabled>--</option>
            <option>213123</option>
            <option>21312/option>
            <option>43432</option>
            <option>2344</option>
          
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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection