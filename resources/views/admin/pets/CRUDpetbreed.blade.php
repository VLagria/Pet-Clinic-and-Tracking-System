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
    <form action="{{ route('vet.custsearch') }}" method="get">
  <div class="input-group" style="width: 400px; margin-left: 500px" >
    <input type="search" class="form-control rounded" placeholder="Search...." aria-label="Search"
  name="custsearch" style="width: 200px;"/> 
  <button type="submit" class="btn btn-outline-primary">search</button><br>
  </div>
</form>
<a class="btn btn-success btn-sm" style="margin-left: 20px" href="/admin/pets/CRUDaddbreed">
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

          <td class="project-actions text-right">
              <a href="/admin/pets/CRUDeditbreed/{{$petbreed->breed_id}}" class="btn btn-info btn-sm">
                <i class="fas fa-pencil-alt"></i> Edit </a>
              <a class="btn btn-danger btn-sm" href="/admin/pets/delete-breed/{{$petbreed->breed_id}}">
                <i class="fas fa-trash"></i> Delete </a>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
  $("document").ready(function() {
    setTimeout(function() {
      $("#messageModal").remove();
    }, 2000);
  });
</script> 
<script>
  jQuery(document).ready(function(){
     jQuery('#addSubmit').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           }
       });
        jQuery.ajax({
           url: "{{ url('/admin/pets/CRUDpetbreed') }}",
           method: 'post',
           data: {
           type_name: jQuery('#breed_name').val(),

           },
           success: function(result){
             if(result.errors)
             {
               jQuery('.alert-danger').html('');

               jQuery.each(result.errors, function(key, value){
                 jQuery('.alert-danger').show();
                 jQuery('.alert-danger').append('<li>'+value+'</li>');
               });
             }
             else
             {
               jQuery('.alert-danger').hide();
               $('#open').hide();
               $('#myModal').modal('hide');
             }
           }});
        });
     });
</script>


@endsection