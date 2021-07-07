@extends('layoutsadmin.app')

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
      <h3 class="card-title">REGISTER CLINIC</h3>
  
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
                  <th style="width: 10%">
                      Clinic Name
                  </th>
                  <th style="width: 10%">
                      Owner Name
                  </th>
                  <th style="width: 10%">
                      Mobile Number
                  </th>
                  <th style="width: 5%" >
                      Email
                </th>
                  <th style="width: 5%" >
                      Telephone
                  </th>
                  <th style="width: 15%">
                    Address
                  </th>
                  <th style="width: 10%" class="text-center">
                   isActive
                  </th>
                  <th style="width: 10%">
                    Admin Clinic ID
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
                         Hannah Ramirez
                      </a>
                      <br/>
                      <small>
          
                      </small>
                  </td>
                  
                  <td>
                      <a>
                        Vincent Lagria
                      </a>
                  </td>
                  <td>
                      <a>
                   0921387435
                      </a>
                  </td>
  
                  <td>
                    <a>
                 Clinicepet@gmail.com
                    </a>
                </td>
                <td>
                  <a>
              08123672
                  </a>
              </td>
              
              <td>
                <a>
             Purok 25 b3 Maa Peoples Village
                </a>
            </td>
                  <td class="project-state">
                      <span class="badge badge-success">Yes</span>
                  </td> 
                <td>
                  <a>
                  2423
                  </a>
              </td>
  
                              <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>
                      <a class="btn btn-info btn-sm" href="#">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td> 
              </tr>
              <tr>
              </tr>
  
              <tr>
                <td>
                    #
                </td>
                <td>
                    <a>
                       Hannah Ramirez
                    </a>
                    <br/>
                    <small>
        
                    </small>
                </td>
                
                <td>
                    <a>
                      Vincent Lagria
                    </a>
                </td>
                <td>
                    <a>
                 0921387435
                    </a>
                </td>
  
                <td>
                  <a>
               Clinicepet@gmail.com
                  </a>
              </td>
              <td>
                <a>
            08123672
                </a>
            </td>
            
            <td>
              <a>
           Purok 25 b3 Maa Peoples Village
              </a>
          </td>
                <td class="project-state">
                    <span class="badge badge-success">Yes</span>
                </td> 
              <td>
                <a>
                2423
                </a>
            </td>
  
                            <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </td> 
            </tr>
            <tr>
            </tr>
            <tr>
              <td>
                  #
              </td>
              <td>
                  <a>
                     Hannah Ramirez
                  </a>
                  <br/>
                  <small>
      
                  </small>
              </td>
              
              <td>
                  <a>
                    Vincent Lagria
                  </a>
              </td>
              <td>
                  <a>
               0921387435
                  </a>
              </td>
  
              <td>
                <a>
             Clinicepet@gmail.com
                </a>
            </td>
            <td>
              <a>
          08123672
              </a>
          </td>
          
          <td>
            <a>
         Purok 25 b3 Maa Peoples Village
            </a>
        </td>
              <td class="project-state">
                  <span class="badge badge-success">Yes</span>
              </td> 
            <td>
              <a>
              2423
              </a>
          </td>
  
                          <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      View
                  </a>
                  <a class="btn btn-info btn-sm" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                  </a>
              </td> 
          </tr>
          <tr>
          </tr>
          <tr>
            <td>
                #
            </td>
            <td>
                <a>
                   Hannah Ramirez
                </a>
                <br/>
                <small>
    
                </small>
            </td>
            
            <td>
                <a>
                  Vincent Lagria
                </a>
            </td>
            <td>
                <a>
             0921387435
                </a>
            </td>
  
            <td>
              <a>
           Clinicepet@gmail.com
              </a>
          </td>
          <td>
            <a>
        08123672
            </a>
        </td>
        
        <td>
          <a>
       Purok 25 b3 Maa Peoples Village
          </a>
      </td>
            <td class="project-state">
                <span class="badge badge-success">Yes</span>
            </td> 
          <td>
            <a>
            2423
            </a>
        </td>
  
                        <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
    Create
    <i class="fas fa-trash">
    </i>
  </button>

  
  <!-- Add Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Clinic</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="" method="POST">
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
                  <label for="exampleInputEmail1">Mobile Number</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                  
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
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                
              </div>

              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Yes</option>
                  <option>Yes</option>
                  <option>No</option>
    
                </select>
              </div> 

              <div class="form-group">
                <label for="inputStatus">Admin Clinic ID</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>--</option>
                  <option>Clinic 1</option>
                  <option>Clinic 2</option>
                </select>
              </div> 


             
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  @endsection