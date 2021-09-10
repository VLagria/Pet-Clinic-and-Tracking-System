@extends('layoutsadmin.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
<div class="content-wrapper">
  <br>
   <!-- Default box -->
   @if(Session::has('existing')) 
      <div class="alert alert-error" role="alert" id="messageModal">
       {{ Session::get('existing') }}
     </div>
     @endif 
<div class="card" style="width: 500px; margin: auto;  padding-bottom: 20px">
    <div class="card-header">
        <a class="btn btn-error btn-sm" href="/admin/pets/CRUDpetbreed">
            <i class="fas fa-arrow-left">
            </i>
        </a>
      <h3 class="header" style="text-align: center;">Add Pet Breed</h3>
      <br>

    <!-- Main content -->
    <form action="{{ route('pets.addbreed') }}" method="post">
    @csrf
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <td>
            <div class="form-group" style="margin-left: 70px;">
              <label for="exampleInputEmail1" >Enter Breed Name:</label>
              <input type="text" style="width: 300px" class="form-control" id="petbreed" name="breed_name" value="{{ old('petbreed')}}" placeholder="Pet Breed">
              <span class="text-danger error-text pet_breed_error">@error('petbreed'){{ $message }}@enderror</span>
            </div>
          </td>  
        </tr>
      </thead>
    </table>

    <button type="submit" class="btn btn-success" style="height: 40px; margin-left: 185px;"><i class="fas fa-dna"></i> Create </a></button>
<!-- <div style="text-align: right; height: 100;"> -->
    
</div>

</form>   

</div>





<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
@endsection 