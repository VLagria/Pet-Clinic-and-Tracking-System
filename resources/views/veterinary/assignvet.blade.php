
@extends('layoutsvet.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
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
      <h3 class="header">Assigning Vet/Clinic</h3>
      <br>
     
  
    <!-- Main content -->
    <table  style="table-layout: fixed;" class="table  table-striped table-hover">
  <thead>
    <tr>
      <th style="width:80px; scope="col">Vet ID</th>
      <th style="width:100px; scope="col">Vet Name</th>
      <th style="width:120px; scope="col">Vet Address</th>
      <th style="width:100px; scope="col">Pet ID</th>
      <th style="width:100px;scope="col">Pet Name</th>
      <th style="width:180px;scope="col">Pet Registered Date</th>
      <th style="width:130px;scope="col">Customer ID</th>
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


  </tbody>
</table>

<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
   Assign a Vet/Clinic
   <i class="fas fa-save"></i>
  </button>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Choose a Vet/Clinic</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

    <form action="" method="POST">
    <div class="col-12">
    <div class="modal-body">
       
    <div class="form-group">
    <label for="inputvetname" class="form-label">Vet Name</label>
    <input type="name" required placeholder="Enter Name" class="form-control" id="inputvetname">
  </div>
  <div class="form-group">
    <label for="inputvetAdd" class="form-label">Vet Address</label>
    <input type="name" required placeholder="Enter Name" class="form-control" id="inputvetAdd">
  </div>
  <div class="col-md-2">
    <label for="inputpetid" required  class="form-label ">Pet ID</label>
    <input type="text" class="form-control" id="inputpetid" hidden>
    <select id="inputpetid" class="form-select">
      <option selected>Choose Pet ID </option>
      <option></option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputpetname" required  class="form-label ">Pet Name</label>
    <input type="text" class="form-control" id="inputpetname" hidden>
    <select id="inputpetname" class="form-select">
      <option selected>Choose Pet Name </option>
      <option></option>
    </div>
    </select>
  <div class="form-group">
  <label for="inputvetrd" required class="form-label">Vet Registered Date</label>
  <input type="date" id="date" name="date">
</div>
<div class="col-md-2">
    <label for="inputcustomerid" required  class="form-label ">Customer ID</label>
    <input type="text" class="form-control" id="inputcustomerid" hidden>
    <select id="inputpetbreed" class="form-select">
      <option selected>Choose Customer ID </option>
      <option></option>
    </div>
    </select>
  </div>
  <div class="col-md-1">
    <label for="inputpettypeid" required class="form-label ">Status </label>
    <select id="inputState" class="form-select">
      <option selected>is Pet Active?</option>
      <option>Yes</option>
      <option>No</option>
    </div>
    </select>
  </div>
</div>
  <div class="col-12">
    <br>

</form>
  </div>
  <br>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input"  type="checkbox" id="gridCheck" required/>
      <label class="form-check-label" style="font-family:cursive;  " for="gridCheck">
        EULA
      </label>
    </div>
  </div>
  <br>

  <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Assign</button>
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
@endsection