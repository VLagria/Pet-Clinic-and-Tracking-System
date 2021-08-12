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

                <h3 class="profile-username text-center"> {{ $LoggedUserInfo->customer_fname }} {{ $LoggedUserInfo->customer_mname }} {{ $LoggedUserInfo->customer_lname }}</h3>

                 <h3 class="profile-username text-center">  </h3>

                <a href="custAcc" id="change_dp" class="btn btn-primary btn-block"><b>Change Picture</b></a>

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
                @if(Session::has('warning'))
                  <div class="alert alert-warning" role="alert">
                  {{ Session::get('warning') }}
                  </div>
                @endif
                @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                  {{ Session::get('success') }}
                  </div>
                @endif
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
                  <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password </a></li>
                 
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class=" active tab-pane" id="personal_info"> 
                    <form class="form-horizontal" action="/customer/custAcc/{{ $LoggedUserInfo->customer_id }}/{{ $LoggedUserInfo->user_id }}" method="POST" action="#" id="InfoForm">
                      @csrf
                      <table class="table" >
                        <thead>
                          <tr>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputName">Username:</label>
                                  <input type="text" class="form-control" id="user_name" value="{{ $LoggedUserInfo->user_name }}" placeholder="Enter User Name" 
                                   name="user_name">
                                   <span class="text-danger error-text user_name_error">@error('user_name'){{ $message }}@enderror</span>
                                  </div>
                            </td>

                              <td style="border: none">
                                <div class="form-group row" style="width: 250px">
                                  <label for="inputName2">Account Mobile No:</label>
                                    <input type="number" class="form-control" id="user_mobile" value="{{ $LoggedUserInfo->user_mobile }}" placeholder="Enter mobile number" name="user_mobile">
                                    <span class="text-danger error-text user_mobile_error">@error('user_mobile'){{ $message }}@enderror</span>
                                </div>
                              </td style="border: none">

                              <td style="border: none">
                                <div class="form-group row" style="width: 250px">
                                  <label for="inputEmail">Email:</label>
                                    <input type="email" class="form-control" id="user_email" value="{{ $LoggedUserInfo->user_email }}" placeholder="Enter Email"name="user_email">
                                    <span class="text-danger error-text user_email_error">@error('user_email'){{ $message }}@enderror</span>
                                 </div>
                                  </td>
                          </tr>
                          <tr>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">First Name:</label>
                                  <input type="text" class="form-control" id="customer_fname" value="{{ $LoggedUserInfo->customer_fname }}" placeholder="Enter First Name"name="customer_fname">
                                  <span class="text-danger error-text customer_fname_error">@error('customer_fname'){{ $message }}@enderror</span>
                                </div>
                            </td>
                            <td style="border: none">

                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">Last Name:</label>
                                  <input type="text" class="form-control" id="customer_lname" value="{{ $LoggedUserInfo->customer_lname }}" placeholder="Enter Last Name"name="customer_lname">
                                  <span class="text-danger error-text customer_fname_error">@error('customer_lname'){{ $message }}@enderror</span>
                                </div>
                            </td>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">Middle Name:</label>
                                
                                  <input type="text" class="form-control" id="customer_mname" value="{{ $LoggedUserInfo->customer_mname }}" placeholder="Enter Middle Name" name="customer_mname">
                                  <span class="text-danger error-text customer_mname_error">@error('customer_mname'){{ $message }}@enderror</span>
                                
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">Contact Mobile No:</label>
                                  <input type="text" class="form-control" id="customer_mobile" value="{{ $LoggedUserInfo->customer_mobile }}" placeholder="Enter Email"name="customer_mobile">
                                  <span class="text-danger error-text customer_mobile_error">@error('customer_mobile'){{ $message }}@enderror</span>
                              </div>
                            </td>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">Telephone No:</label>
                                  <input type="text" class="form-control" id="customer_tel" value="{{ $LoggedUserInfo->customer_tel }}" placeholder="Enter Email"name="customer_tel">
                                  <span class="text-danger error-text customer_tel_error">@error('customer_tel'){{ $message }}@enderror</span>
                              </div>
                            </td>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">Blk No:</label>
                                  <input type="text" class="form-control" id="customer_blk" value="{{ $LoggedUserInfo->customer_blk }}" placeholder="Enter Email"name="customer_blk">
                                  <span class="text-danger error-text customer_blk_error">@error('customer_blk'){{ $message }}@enderror</span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">Street:</label>
                                  <input type="text" class="form-control" id="customer_street" value="{{ $LoggedUserInfo->customer_street}}" placeholder="Enter Email"name="customer_street">
                                  <span class="text-danger error-text customer_street_error">@error('customer_street'){{ $message }}@enderror</span>
                              </div>
                              </td>
                            <td style="border: none">
                            <div class="form-group row" style="width: 250px">
                              <label for="inputEmail">Subdivision:</label>
                                <input type="text" class="form-control" id="customer_subdivision" value="{{ $LoggedUserInfo->customer_subdivision }}" placeholder="Enter Email"name="customer_subdivision">
                                <span class="text-danger error-text customer_subdivision_error">@error('customer_subdivision'){{ $message }}@enderror</span>
                              </div>
                            </td>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">Barangay:</label>
                                  <input type="text" class="form-control" id="customer_barangay" value="{{ $LoggedUserInfo->customer_barangay }}" placeholder="Enter Email"name="customer_barangay">
                                  <span class="text-danger error-text customer_barangay_error">@error('customer_barangay'){{ $message }}@enderror</span>
                              </div>
                            </td>
                            
                          </tr>
                          <tr>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">City:</label>
                                  <input type="text" class="form-control" id="customer_city" value="{{ $LoggedUserInfo->customer_city }}" placeholder="Enter Email"name="customer_city">
                                  <span class="text-danger error-text customer_city_error">@error('customer_city'){{ $message }}@enderror</span>
                              </div>
                            </td>
                            <td style="border: none">
                              <div class="form-group row" style="width: 250px">
                                <label for="inputEmail">Zip Code:</label>
                                  <input type="text" class="form-control" id="customer_zip" value="{{ $LoggedUserInfo->customer_zip }}" placeholder="Enter Email"name="customer_zip">
                                  <span class="text-danger error-text customer_zip_error">@error('customer_zip'){{ $message }}@enderror</span>
                              </div>
                            </td>
                          </tr>
                        </thead>
                      </table>

                      <div class="form-group row" style="width: 250px">
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
                          <input type="password" class="form-control" id="oldpass"value="{{$LoggedUserInfo->user_password}}" placeholder="Old Password">
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
