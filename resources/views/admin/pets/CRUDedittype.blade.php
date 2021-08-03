
@extends('layoutsadmin.app')

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
        <a class="btn btn-error btn-sm" href="/admin/pets/CRUDpettype">
            <i class="fas fa-arrow-left">
            </i>
            Return
        </a>
      <h3 class="header">Edit Pet Type</h3>
      <br>
    
 
    <!-- Main content -->
    <form action="/admin/pets/CRUDedittype/{{$getID->type_id}}" method="post">
@csrf
    <table class="table table-striped table-hover">
  <thead>
    <tr>
          <td>
            <input type="hidden" style="width: 300px" class="form-control" name="type_id" value="{{$getID->type_id}}" placeholder="Pet Type">
            <div class="form-group" style="">
                <label for="exampleInputEmail1">Pet Type</label>
                <input type="text" style="width: 300px" class="form-control" id="pettype" name="type_name" value="{{$getID->type_name}}" placeholder="Pet Type">
                <span class="text-danger error-text pet_type_error">@error('pettype'){{ $message }}@enderror</span>
            </div>
        </td>
            <div class="form-group" style="width: 300px">
                <input type="hidden" name="pettype" value="3">
              </div>
       
    </tr>
   
  </thead>
</table>

<div style="text-align: right; height: 100; padding-top: 20px">
    <button type="submit" class="btn btn-success btn-sm" style=" height: 40%;"> <i class="fas fa-user"></i> Save Changes </a></button>

   
</div>

</form>   

</div>
{{-- View  modal  --}}
{{-- 
  <div class="modal" id="viewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Clinic</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5>Clinic Name: Hannah Ramirez.</h5>
          <h5>Gender: male.</h5>
          <h5>Birthday: 09-15-2000.</h5>
          <h5>Notes: Vincent Lagria.</h5>
          <h5>Bloodtype: A</h5>
          <h5>Registered Date: 06-14-2021</h5>
        </div>
        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}
 

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
@endsection