
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Veterinary | Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href= "{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href= "{{ asset('vendors/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="vethome" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('vendors/dist/img/rouen.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Rouen Mayormita
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">My dog is sick and I want to ask some help from you</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 2 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('vendors/dist/img/ROSH.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Rosh Asares
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Good day , I would like to request a new password</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 minute ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('vendors/dist/img/KAT.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Kathleen Dabalos
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Hello would like to set an appointment</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="vethome" class="brand-link">
      <img src="{{ asset('vendors/dist/img/MediaoneLogo.png') }}" alt="MediaOne Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Veterinary Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('vendors/dist/img/VINCENT.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Vincent Lagria</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       
        <li class="nav-nav-treeview">
            <a href="vethome" class="nav-link ">
              
              <p>
                Main
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
               
                  <p>Appointment</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="vetpatient" class="nav-link active">
                  <p>Patients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vetcustomer" class="nav-link ">
                  <p>Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vetclinic" class="nav-link">
                  <p>Clinic</p>
                </a>
              </li>
            </ul>
          </li>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Account Settings
              </p>
            </a>
          </li><li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Support
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Patients</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active"><a href="vetpatient">Patients</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <table class="table  table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Pet ID</th>
      <th scope="col">Pet Name</th>
      <th scope="col">Pet Gender</th>
      <th scope="col">Pet Birthday</th>
      <th scope="col">Pet Notes</th>
      <th scope="col">Pet Blood Type</th>
      <th scope="col">Pet Profile</th>
      <th scope="col">Pet Registered Date</th>
      <th scope="col">Pet Type </th>
      <th scope="col">Pet Breed </th>
      <th scope="col">Customer </th>
      <th scope="col">Clinic </th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    
    </td>
    <td>
    <a class="btn btn-info" href="#" role="button">Update </a>
    <button type="button" class="btn btn-danger">Delete </button>
<button class="btn btn-dark" type="submit">View  </button>
    </td>


  </tbody>
</table>

<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
   Register Pet
    <i class="far fa-registered">
    </i>
  </button>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register Pet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

    <form action="" method="POST">
    <div class="col-12">
    <div class="modal-body">
       
    <div class="form-group">
    <label for="inputpetname" class="form-label">Pet Name</label>
    <input type="name" required placeholder="Enter Name" class="form-control" id="inputpetname">
  </div>
  <div class="col-md-3">
    <label for="inputgender"  class="form-label">Pet Gender</label>
    <select id="inputgender" class="form-select">
      <option selected>Choose...</option>
      <option>Male</option>
      <option>FeMale</option>
      
    </select>
  </div>
</div>
  <div class="col-12">
    <br>
   
  <div class="col-12">
    <label for="inputpetnotes"  class="form-label">Pet Notes</label>
    <br>
    <textarea placeholder="Enter Description and Health Conditions" id="inputpetnotes"  name="petnotes" rows="4" cols="50">

    </textarea>
  </div>
  
 
  <div class="col-md-5">
    <label for="inputBloodtype" class="form-label">Pet BloodType</label>
    <input type="text" placeholder="Optional" class="form-control" id="inputBloodtype">
  
    <label for="inputpetrf" required class="form-label">Pet Registered Date</label>
    <input type="date" id="date" name="date">
  </div>

  <div class="col-md-1">
    <label for="inputpettypeid" required class="form-label ">Pet Type </label>
    <input type="text" class="form-control" id="inputpettypeid" hidden>
    <select id="inputpettypeid" class="form-select">
      <option selected>Choose Pet Type </option>
      <option></option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputpettypeid" required  class="form-label ">Pet Breed</label>
    <input type="text" class="form-control" id="inputpettypeid" hidden>
    <select id="inputpetbreed" class="form-select">
      <option selected>Choose Pet Breed </option>
      <option></option>
    </select>
  </div>
  <div class="col-md-1">
    <label for="inputpettypeid" required class="form-label ">Customer </label>
    <input type="text" class="form-control" id="inputpettypeid" hidden>
    <select id="inputpetcustomer" class="form-select">
      <option selected>Choose Customer </option>
      <option></option>
    </select>
  </div>
  <div class="col-md-1">
    <label for="inputpettypeid" required class="form-label "> Clinic </label>
    <input type="text" class="form-control" id="inputpettypeid" hidden>
    <select id="inputpetclinic" class="form-select">
      <option selected>Choose Clinic </option>
      <option></option>
    </select>
  </div>
  <div class="col-md-1">
    <label for="inputpettypeid" required class="form-label ">Status </label>
    <select id="inputState" class="form-select">
      <option selected>is Pet Active?</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputdp" required class="form-label">Pet Profile Picture</label>
    <form action="/action_page.php">
  <input type="file" id="myFile" name="filename">

</form>
  </div>
  <br>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input"  type="checkbox" id="gridCheck" required/>
      <label class="form-check-label" style="font-family:cursive;  " for="gridCheck">
        Remember me
      </label>
    </div>
  </div>
  <br>

  <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Register</button>
        </div>
      </div>
    </div>
  </div>

</form>
           </section>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
    <script src="{{ asset('vendors/dist/js/adminlte.min.js') "></script>
</body>
</html>
