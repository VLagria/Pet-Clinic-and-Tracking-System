@extends('layoutscustomer.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> @section('content') <div class="card">
    <div class="card-header">
        <a class="btn btn-error btn-sm" href="/customer/custProfile">
            <i class="fas fa-arrow-left"></i> Return </a>
        <h3 class="header">Edit User Profile</h3>
        <br>
        <div class="card card-primary card-outline ">
            <div class="card-body  box-profile card text-center">
                <div class="card text-center">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{asset('vendors/dist/img/han.jpg') }}" alt="Profile Picture">
                        <h3 class="profile-username text-center"> Owner</h3>
                        <div class="form-group">
                            <label for="inputdp"> Profile Picture</label>
                            <br>
                            <input type="file" id="user_DP" name="filename" name="user_DP">
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Save Changes</button>
            </div>
        </div>
    </div>
</div> @endsection {{-- <!-- Main content -->
					<form action="/customer/custeditProfile/{{ $usercust_id->user_id }}" method="post"> @csrf <table class="table table-striped table-hover">
    <thead> @foreach ($usercust_id) <input type="hidden" value="{{ $usercust_id->user_id }}">
        <tr>
            <td>
            <td>
                <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputusername">User Name</label>
                            <input type="text" style="width: 300px" class="form-control" value="{{ $usercust_id->user_name }}" id="user_name" name="user_name" placeholder="Input username">
                            <span class="text-danger error-text user_name_error">@error('user_name'){{ $message }}@enderror</span>
                        </div>
                </div>
            </td>
            </td>
            <td>
                <div class="form-group row">
                    <label for="mobile">Mobile</label>
                    <input type="number" class="form-control" value="{{ $usercust_id->user_mobile }}" style="width: 300px" id="user_mobile" name="user_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No">
                    <span class="text-danger error-text user_mobile_error">@error('user_mobile'){{ $message }}@enderror</span>
                </div>
            </td>
            </div>
            <div class="form-group row">
                <label for="inputemail">Email</label>
                <input type="text" style="width: 300px" class="form-control" value="{{ $usercust_id->user_email }}" id="user_email" name="user_email" placeholder="Input email">
                <span class="text-danger error-text user_fname_error">@error('user_email'){{ $message }}@enderror</span>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                    </div>
                </div>
            </div> @endforeach <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </div>
            </form>
            </div> @endsection --}}
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