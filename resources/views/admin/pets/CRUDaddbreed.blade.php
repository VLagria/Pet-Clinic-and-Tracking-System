@extends('layoutsadmin.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
<div class="content-wrapper">
  <br>
  
<div class="card" style="width: auto; margin-left:20px; margin-right:20px; text-align: center; padding: 20px">
<a class="btn btn-error btn-sm" href="/admin/pets/CRUDpetbreed" style="text-align: left;">
            <i class="fas fa-arrow-left">
            </i> 
            Return
        </a>
      <h3 class="header" style="font-size: 300%">Add Pet Breed</h3>

    <form action="{{ route('pets.addbreed') }}" method="post">
    @csrf
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <td>
            <div class="form-group" style="margin: auto; text-align: center;">
              <label style=" margin-right: 150px;"> Enter Breed Name:</label>
              <input type="text" style="width: 300px; margin: auto;" class="form-control" id="petbreed" name="breed_name" value="{{ old('petbreed')}}" placeholder="Enter Breed Name">
              <span class="text-danger error-text pet_breed_error">@error('petbreed'){{ $message }}@enderror</span>
            </div>
          </td>  
        </tr>
      </thead>
    </table>

    <button type="submit" class="btn btn-success" title="Save Breed Name"><i class="fas fa-dna"></i> Create </a></button>
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