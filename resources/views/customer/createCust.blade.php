
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Login Form with Avatar Image</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #f7f0f1;
}
.form-control {
	min-height: 41px;
	background: #fff;
	box-shadow: none !important;
	border-color: #e3e3e3;
}
.form-control:focus {
	border-color: #70c5c0;
}
.form-control, .btn {        
	border-radius: 2px;
}
.login-form {
	width: 350px;
	margin: 0 auto;
	padding: 100px 0 30px;		
}
.login-form form {
	color: #7a7a7a;
	border-radius: 2px;
	margin-bottom: 15px;
	font-size: 13px;
	background: #ececec;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;	
	position: relative;	
}
.login-form h2 {
	font-size: 22px;
	margin: 35px 0 25px;
}
.login-form .avatar {
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -50px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #70c5c0;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar img {
	width: 100%;
}	
.login-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.login-form .btn, .login-form .btn:active {        
	font-size: 16px;
	font-weight: bold;
	background: #70c5c0 !important;
	border: none;
	margin-bottom: 20px;
}
.login-form .btn:hover, .login-form .btn:focus {
	background: #50b8b3 !important;
}    
.login-form a {
	color: #fff;
	text-decoration: underline;
}
.login-form a:hover {
	text-decoration: none;
}
.login-form form a {
	color: #7a7a7a;
	text-decoration: none;
}
.login-form form a:hover {
	text-decoration: underline;
}
.login-form .bottom-action {
	font-size: 14px;
}

</style>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
		<div class="avatar">
			<img src="{{asset('vendors/dist/img/MediaoneLogo.png') }}"  alt="Avatar">
		</div>
        <h2 class="text-center">CREATE ACCOUNT</h2>   
       
        <br>
        <div class="progress">
          <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
            50% Complete 
          </div>
        </div>
<br>
 <!-- Button trigger modal -->
 <div  class = "d-grid gap-2 d-md-flex justify-content-md-center">
  <button style="width: 300px;" type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#addModal">
      Click Here
      </i>
    </button>
    </div>


 

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Customers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST">
      <div class="modal-body">

    
              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Clinic Name">
                
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Middle Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Owner Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Birthdate</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Telephone">
              </div>
            
               
              <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                
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
                <label for="exampleInputEmail1">Profile Image</label>
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

</form>
</body>
</html>