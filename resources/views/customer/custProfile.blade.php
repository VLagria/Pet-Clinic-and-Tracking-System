@extends('layoutscustomer.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')

<div class="content-wrapper">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="custProfile">Profile</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   
    
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
  <!-- update -->
                <div class="text-success alert-block text-center" id="update-success">
                    <strong></strong>
                </div>
            
            <!-- Profile Image -->
          
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('vendors/dist/img/han.jpg') }}"
                       alt="hannah">
                </div>
                @foreach($getUser as $Users)
                <h3 class="profile text-center">{{$Users->user_name}}</h3>
                <br>
                <br>
                @endforeach
                
                <b><center>Number of Pets:</b>
                <h3><center></center></h3>
                <br>
                <a href="custProf" class="btn btn-primary btn-block"><b>Edit Profile </b></a>
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#listofpets" data-toggle="tab">List of Pets</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password </a></li> -->
                 
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!--  -->
             <div class="col-md-4">
      <!-- Widget: user widget style 1 -->
      <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-warning">
          <h3 class="widget-user-username"><b></b></h3>
          
        </div>
        <div class="card-footer p-0">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link">
                Gender: <span class="float-right"></span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link">
                Birthday:<span class="float-right "></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                Blood Type: <span class="float-right "></span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link">
                Date Registered: <span class="float-right"></span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link">
                Notes: <span class="float-right "></span>
              </a>
            </li>

            
            <li class="nav-item">
              <a class="nav-link">
                Status: <span class="float-right "></span>
              </a>
            </li>
      
          </div>
          
      </div>
      <!-- /.widget-user -->
      
    </div>

    <!-- /.col -->
    
  </div>
  <div class="card-footer">
    <nav aria-label="Contacts Page Navigation">
      <ul class="pagination justify-content-center m-0">
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>

      </ul>
    </nav>
  </div>
  <!-- /.card-footer -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection

          <!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
