@extends('layoutsadmin.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> @section('content') @csrf <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"></div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right"></ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  {{-- <a class="btn btn-success btn-sm " data-toggle="modal" data-target="#addModal" style="margin-left: 10px">
    <i class="fas fa-save"></i> Add Customer </a>
    <br> --}}
    <br>

    <form action="{{ route('pet.petTypesearch') }}" method="GET">
        <div class="input-group" style="width: 500px; margin-left: 50px;">
            <button type="submit" class="btn btn-info" style="margin-right: 3%;">search</button>
            <input type="search" class="form-control rounded" placeholder="Search by Name" name="petTypeSearch" id="petTypeSearch">
        </div>
    </form>

<a class="btn btn-success btn-sm" style="margin-left: 20px" href="/admin/pets/CRUDaddtype">
  <i class="fas fa-user"></i> Add Pet Type</a>
  <br>
  <br>

<!-- Default box -->
@if(Session::has('type_deleted')) 
  <div class="alert alert-danger" role="alert" id="messageModal">
    {{ Session::get('type_deleted') }}
  </div>
   @endif 
   @if(Session::has('newPettype')) 
   <div class="alert alert-success" role="alert" id="messageModal">
    {{ Session::get('newPettype') }}
  </div>
  @endif 

  @if(Session::has('Success')) 
  <div class="alert alert-success" role="alert" id="messageModal">
   {{ Session::get('Success') }}
 </div>
 @endif   



<div class="card">
    <div class="card-header">
      <h3 class="card-title">Pets</h3>
  
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
        <tr>
          
            <th scope="col" style="width:8%">ID</th>
            <th scope="col" style="width:8%">Pet Type</th>
            <th scope="col" style="width:30%">Action</th>
        </tr>
        </thead>
        <tbody> @foreach ($typePet as $pettype) <tr>
            <td>{{ $pettype->type_id }}</td>
            <td>{{ $pettype->type_name }}</td>
            <td>
              <a href="/admin/pets/CRUDedittype/{{$pettype->type_id}}" class="btn btn-info btn-lg">
                <i class="fas fa-pencil-alt"></i> </a>
              <a class="btn btn-danger btn-lg" href="/admin/pets/delete/{{$pettype->type_id}}">
                <i class="fas fa-trash"></i></a>
              </td>
            </tr>
        
           
            @endforeach
          </tbody>
        </table>
        {{-- {{ $pet_types->links('pagination::bootstrap-4') }} --}}
      </div>
    </div>
  </div>


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="{{asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>

<script>
  $("document").ready(function(){
    setTimeout(function(){
      $("#messageModal").remove();
    }, 3000 );
  });
</script>


@endsection