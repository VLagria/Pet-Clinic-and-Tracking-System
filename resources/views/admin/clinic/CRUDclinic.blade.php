@extends('layouts.app')

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

    {{-- Main content  --}}
<div class= "content">
<div class= "containter-fluid">
    <div class="row">
        <div class="col-sm-12">
            <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
  
                  <p>Veterinarians</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px"></sup></h3>
  
                  <p>Pets</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>
  
                  <p>Customers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
  
                  <p>Clinic</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <!-- ./col -->
          </div>
          <!-- /.row -->


        </div>
    </div>
</div>
</div>
<!-- Default box -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">CLINIC</h3>
  
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
                      email
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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Add Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form> action="" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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