extends('layoutsadmin.app')

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
        <a class="btn btn-error btn-sm" href="/admin/pets/CRUDpetbreed">
            <i class="fas fa-arrow-left">
            </i>
            Return
        </a>
      <h3 class="header">Edit Pet Breed</h3>
      <br>
    
 
    <!-- Main content -->
    <form action="/admin/pets/CRUDeditbreed/{{$getID->breed_id}}" method="post">
@csrf
    <table class="table table-striped table-hover">
  <thead>
    <tr>
          <td>
            <input type="hidden" style="width: 300px" class="form-control" name="breed_id" value="{{$getID->breed_id}}" placeholder="Pet Breed">
            <div class="form-group" style="">
                <label for="exampleInputEmail1">Pet Breed</label>
                <input type="text" style="width: 300px" class="form-control" id="petbreed" name="breed_name" value="{{$getID->breed_name}}" placeholder="Pet Breed">
                <span class="text-danger error-text pet_breed_error">@error('petbreed'){{ $message }}@enderror</span>
            </div>
        </td>
            <div class="form-group" style="width: 300px">
                <input type="hidden" name="petbreed" value="3">
              </div>
       
    </tr>
   
  </thead>
</table>

<div style="text-align: right; height: 100; padding-top: 20px">
    <button type="submit" class="btn btn-success btn-sm" style=" height: 40%;"> <i class="fas fa-user"></i> Save Changes </a></button>

   
</div>

</form>   

</div>

 

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