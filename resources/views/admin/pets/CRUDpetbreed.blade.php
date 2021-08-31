@extends('layoutsadmin.app')

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
    
    <form action="{{ route('pet.breedSearch') }}" method="get">
      <div class="input-group" style="width: 400px; margin-left: 500px" >
        <input type="search" class="form-control rounded" placeholder="Search by Breed" name="breedSearch" id="breedSearch" style="width: 200px;"/> 
        <button type="submit" class="btn btn-outline-primary">search</button><br>
      </div>
    </form>

<a class="btn btn-success btn-lg" style="margin-left: 20px" href="/admin/pets/CRUDaddbreed">
  <i class="fas fa-user"></i> Add Pet Breed</a>
  <br>
  <br>

<!-- Default box -->
@if(Session::has('breed_deleted'))
<div class="alert alert-danger"role="alert"id="messageModal">
  {{ Session::get('breed_deleted') }}
</div>
@endif
@if(Session::has('newPetbreed'))
<div class="alert alert-success" role="alert"id="messageModal">
  {{ Session::get('newPetbreed')}}
</div>
@endif
@if(Session::has('cantDelete'))
<div class="alert alert-warning" role="alert"id="messageModal">
  {{ Session::get('cantDelete')}}
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
  
        <th scope="col" style="width:20%">ID</th>
        <th scope="col" style="width:65%">Pet Breed</th>
        <th scope="col" style="width:45%">Action</th>
          
          
        </tr>
        </thead>
        <tbody> @foreach ($typeBreed as $petbreed) <tr>
          <td> {{ $petbreed->breed_id}}</td>
          <td> {{ $petbreed->breed_name}} </td>

          <td>
              <a href="/admin/pets/CRUDeditbreed/{{$petbreed->breed_id}}" class="btn btn-info btn-lg">
                <i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger btn-lg" href="/admin/pets/delete-breed/{{$petbreed->breed_id}}">
                <i class="fas fa-trash"></i></a>
              </td>
            </tr>
            @endforeach 
        </tbody>
      </table>
      {{-- {{ $pet_breeds->links('pagination::bootstrap-4') }} --}}
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
      <!-- Latest compiled and minified JavaScript -->
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