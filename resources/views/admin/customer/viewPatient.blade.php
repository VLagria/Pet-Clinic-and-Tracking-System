@extends('layoutsadmin.app')

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
        <div class="col-sm-lg">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
    
  <!-- Default box -->
  <div class="card"> 
    @csrf
    <div class="card-header">
      <a class="btn btn-error btn-sm" href="/admin/customer/CRUDcustomers">
        <i class="fas fa-arrow-left"></i> Return </a>
      <h3 class="header">Pets</h3>
      <br>

      @if(Session::has('success')) 
      <div class="alert alert-success" role="alert" id="messageModal">
      {{ Session::get('success') }}
      </div>
       @endif
       @if(Session::has('warning')) 
      <div class="alert alert-warning" role="alert" id="messageModal">
      {{ Session::get('warning') }}
      </div>
       @endif

      <!-- Main content -->
      <table class="table  table-striped table-hover">
        <thead>
          <tr>
            <th style="width:5%;" scope="col">ID</th>
            <th style="width:5%;"scope="col"> Name</th>
            <th style="width:5%;"scope="col"> Gender</th>
            <th style="width: 10%;"scope="col">Birthday</th>
            <th style="width: 10%;"scope="col"> Notes</th>
            <th style="width: 10%;"scope="col"> Blood Type</th>
            <th style="width: 10%;"scope="col"> Registered Date</th>
            <th style="width: 5%;"scope="col"> Type </th>
            <th style="width: 10%;"scope="col"> Breed </th>
            <th style="width: 10%;"scope="col">Clinic </th>
            <th style="width:5%;"scope="col">Status</th>
            <th style="width:500px;"scope="col">Action</th>
          </tr>
        </thead>
        <tbody> 
          <tr>
            @foreach ($PatientOwner as $owner)
            <td>{{ $owner->pet_id }}</td>
            <td>{{ $owner->pet_name }}</td>
            <td>{{ $owner->pet_gender }}</td>
            <td>{{ $owner->pet_birthday }}</td>
            <td>{{ $owner->pet_notes }}</td>
            <td>{{ $owner->pet_bloodType }}</td>
            <td>{{ $owner->pet_registeredDate }}</td>
            <td>{{ $owner->type_name }}</td>
            <td>{{ $owner->breed_name }}</td>
            <td>{{ $owner->clinic_name }}</td>
            @if ($owner->pet_isActive == 1)
              <td><span class="badge badge-success">Yes</span></td>
            @else
              <td><span class="badge badge-danger">No</span></td>
            @endif
            <td class="project-actions">
              <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal{{ $owner->pet_id }}">
                <i class="fas fa-folder"></i>  </a>
              <a href="/admin/vet/adminEditPatient/{{ $owner->pet_id }}" class="btn btn-info btn-sm">
                <i class="fas fa-pencil-alt"></i>  </a>
              <a class="btn btn-danger btn-sm" href="/admin/vet/adminEditPatient/{{ $owner->pet_id }} ">
                <i class="fas fa-trash"></i>  </a>
            </td>
          </tr>
<!-- VIEW MODAL -->
  <div class="modal" id="viewModal{{ $owner->pet_id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Patients</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <h5>Pet name: <strong> {{ $owner->pet_name }} </strong></h5>
          <h5>Type: <strong> {{ $owner->type_name }} </strong></h5>
          <h5>Breed: <strong>{{ $owner->breed_name }}</strong> </h5>
          <h5>Gender: <strong> {{ $owner->pet_gender }} </strong></h5>
          <h5>Registered date: <strong> {{ $owner->pet_registeredDate }} </strong></h5>
          <h5>Address: <strong> {{ $owner->customer_address }} </strong> </h5>
          <h5>Owner: <strong> {{ $owner->customer_name }} </strong></h5>
          @if ($owner->pet_isActive == "1")
          <h5>Status : <strong> YES </strong></h5>
          @else
          <h5>Status : <strong> NO </strong></h5>
          @endif
          

          <h5 style="text-align: center">
            {!! QrCode::size(150)->eyeColor(0, 255, 255, 255, 0, 0, 0)->generate('name: '.$owner->pet_name.
              ' Gender: '.$owner->pet_gender.
              ' Type: '.$owner->type_name.
              ' Breed: '.$owner->breed_name.
              ' Registered Date: '. $owner->pet_registeredDate.
              ' Owner: '.$owner->clinic_name .
              ' Address: '.$owner->customer_address); !!}
              <br><strong>Scan Me</strong>
            </h5> 

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- END VIEW MODAL -->
          </div>
        @endforeach    
        </tbody>
      </table>
    </div>
  </div>
</div>
{{-- end edit modal  --}}

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script> 
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
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
@endsection