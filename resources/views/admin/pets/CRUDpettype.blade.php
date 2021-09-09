@extends('layoutsadmin.app')

@section('content') @csrf 
<link rel="stylesheet" href="/styles.css">
<div class="content-wrapper">

<br>
  


<!-- Default box -->
@if(Session::has('typeDeleted')) 
  <div class="alert alert-danger" role="alert" id="messageModal">
  {{ Session::get('typeDeleted') }}
  </div>
@endif 

@if(Session::has('newPettype')) 
  <div class="alert alert-success" role="alert" id="messageModal">
  {{ Session::get('newPettype') }}
  </div>
@endif 

@if(Session::has('cantDelete')) 
  <div class="alert alert-warning" role="alert" id="messageModal">
  {{ Session::get('cantDelete') }}
  </div>
@endif  

@if(Session::has('Success')) 
  <div class="alert alert-success" role="alert" id="messageModal">
  {{ Session::get('Success') }}
  </div>
@endif

 


<div class="card" style="width: 900px; margin: auto;">
    <div class="card-header">
      <h3 class="card-title" id="pet_name_id">Pet Types</h3>
      <form action="{{ route('pet.petTypesearch') }}" method="GET">
        <div class="float-right">
          <input type="search" class="form-control rounded" name="petTypeSearch" id="petTypeSearch" placeholder="Search by Name" style="width: 200px;"/>
          <button type="submit" class="btn btn-outline-primary" id=""><i class="fas fa-search"></i></button>
          
            <a id="add-sign" class="btn btn-success" title="Add Pet Type" style="margin-left: 10px" href="/admin/pets/CRUDaddtype">
            <i class="fas fa-plus" ></i> Add Pet Type</a><br>
        </div>
      </form>
    </div>

    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
        <tr>
            <th scope="col" style="width:20%" hidden>ID</th>
            <th scope="col" style="width: 450px;">Pet Type</th>
            <th scope="col" >Action</th>
        </tr>
        </thead>
        <tbody> @foreach ($typePet as $pettype) 
          <tr >
            <td>{{ $pettype->type_name }}</td>
            <td>
              <a href="/admin/pets/CRUDedittype/{{$pettype->type_id}}" title="Edit Pet Type" class="btn btn-info">
                <i class="fas fa-pencil-alt"></i> </a>
              <a class="btn btn-danger " title="Delete Pet Type" href="/admin/pets/delete/{{ $pettype->type_id }}">
                <i class="fas fa-trash"></i></a>
              </td>
            </tr>
        
            @endforeach
          </tbody>
        </table>
        <!-- {{-- {{ $pet_types->links('pagination::bootstrap-4') }} --}} -->
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