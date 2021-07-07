


@extends('layoutsvet.app')

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

 <!-- Main content -->
    <table  style="table-layout: fixed;" class="table  table-striped table-hover">
  <thead>
    <tr>
      <th style="width:100px; scope="col">Pet ID</th>
      <th style="width:120px;scope="col">Pet Name</th>
      <th style="width:130px;scope="col">Pet Gender</th>
      <th style="width:150px;scope="col">Pet Birthday</th>
      <th style="width:130px;scope="col">Pet Notes</th>
      <th style="width:180px;scope="col">Pet Blood Type</th>
      <th style="width:130px;scope="col">Pet Profile</th>
      <th style="width:200px;scope="col">Pet Registered Date</th>
      <th style="width:180px;scope="col">Pet Type ID</th>
      <th style="width:180px;scope="col">Pet Breed ID</th>
      <th style="width:180px;scope="col">Customer ID</th>
      <th style="width:150px;scope="col">Clinic ID</th>
      <th style="width:100px;scope="col">Status</th>
      <th style="width:180px;scope="col">Action</th>


     
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

  

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  @endsection