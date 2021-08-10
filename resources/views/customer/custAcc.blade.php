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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
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
  @if($message = Session::get('userUpdate'))
                <div class="text-success alert-block text-center" id="update-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <!-- Profile Image -->
          
            <div class="card card-primary card-outline ">
              <div class="card-body  box-profile card text-center">
                <div class="card text-center"> 
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('vendors/dist/img/han.jpg') }}"
                       alt="Profile Picture">
                </div>

                <h3 class="profile-username text-center"> Owner</h3>

                 <h3 class="profile-username text-center">  </h3>

                <a href="custeditProfile" id="change_dp" class="btn btn-primary btn-block"><b>Edit Profile </b></a>

    </div>
    <!-- /.row -->
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
                  <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
                  <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password </a></li>
                 
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class=" active tab-pane" id="personal_info"> 
                    <form class="form-horizontal" method="POST" action="#" id="InfoForm">
                      @csrf
                      @method('PUT')

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">UserName</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Enter User Name" 
                           name="name">
                          <span class="text-danger error-text name_error"></span>

                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Mobile Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="mobile" placeholder="Enter mobile number"name="mobile">
                          <span class="text-danger error-text mobile_error"></span>

                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email"name="email">
                          <span class="text-danger error-text email_error"></span>
                        </div>
                      </div>
                     
                     
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane fade" id="change_password">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="oldpass" class="col-sm-2 col-form-label">Old Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="oldpass" placeholder="Old Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="newpass" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="newpass" placeholder="New Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="cnewpass" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cnewpass" placeholder="Confirm New Password">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update Password</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>
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
