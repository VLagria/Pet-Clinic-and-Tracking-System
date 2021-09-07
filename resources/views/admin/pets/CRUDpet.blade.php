@extends('layoutsadmin.app')

@section('content')
<link rel="stylesheet" href="/styles.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-fluid">
  </div>
    
  <br>
<!-- Default box -->
@if(Session::has('pets_deleted'))
<div class="alert alert-danger"role="alert"id="messageModal">
  {{ Session::get('pets_deleted') }}
</div>
@endif
@if(Session::has('newPet'))
<div class="alert alert-success" role="alert"id="messageModal">
  {{ Session::get('newPet')}}
</div>
@endif
@if(Session::has('pet_updated'))
  <div class="alert alert-success" id="messageModal">
    {{ Session::get('pet_updated')}}
  </div>
@endif


<div class="card">
  <div class="card-header">
    <h1 class="card-title" id="pet_name_id">Pet List</h1>
    <form action="{{ route('pet.petSearch') }}" method="GET">
      <div class="float-right">
        <input type="search" class="form-control rounded" name="petSearch" id="petSearch" placeholder="Search by Pet Name" style="width: 200px;"/>
        <button type="submit" class="btn btn-outline-primary" id=""><i class="fas fa-search"></i></button><br>
      </div>
    </form>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
        <tr>
          <th>Name</th>
          <th>Gender</th>
          <th>Birthdate</th>
          <th>Pet Notes</th>
          <th>Blood Type</th>
          <th>Date of Registration </th>
          <th>Pet Type</th>
          <th>Pet Breed</th>
          <th>Customer ID </th>
          <th></th>
          <th>Clinic</th>
          <th>Status</th>            
        <th style="width: 14%">
                  Action
                </th>
          
        </tr>
        </thead>
        <tbody>
          @foreach($Pet as $pet)
        <tr>
          <td> {{ $pet->pet_name}}</td>
          <td> {{ $pet->pet_gender}}</td>
          <td> {{ $pet->pet_birthday}}</td>
          <td> {{ $pet->pet_notes}}</td>
          <td> {{ $pet->pet_bloodType}}</td>
          <td> {{ $pet->pet_registeredDate}}</td>
          <td> {{ $pet->type_name }} </td>
          <td> {{ $pet->breed_name}}</td>
          <td> {{ $pet->customer_fname }} {{ $pet->customer_lname }} <td>
          <td> {{ $pet->clinic_name}}</td>

          @if( $pet->pet_isActive == 1 )
            <td><h4><span class="badge badge-success lg">Yes</span></h4></td>
            @else
            <td><h4><span class="badge badge-danger lg">No</span></h4></td>
          @endif
          <td>
            <button href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal{{ $pet->pet_id }}">
                          <i class="fas fa-folder">
                          </i></button>
                          
              <a href="/admin/pets/CRUDeditpet/{{ $pet->pet_id }}" class="btn btn-info btn-sm">
                <i class="fas fa-pencil-alt"></i>  </a>

              <button class="btn btn-danger btn-sm" href="">
                <i class="fas fa-trash"></i>  </button>
              </td>
            </tr>

            {{-- View  modal  --}}
  <div class="modal" id="viewModal{{ $pet->pet_id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Patients</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5>Pet name: <strong> {{ $pet->pet_name }} </strong></h5>
          <h5>Type: <strong> {{ $pet->type_name }} </strong></h5>
          <h5>Breed: <strong>{{ $pet->breed_name }}</strong> </h5>
          <h5>Gender: <strong> {{ $pet->pet_gender }} </strong></h5>
          <h5>Registered date: <strong> {{ $pet->pet_registeredDate }} </strong></h5>
          <h5>Address: <strong> {{ $pet->customer_address }} </strong> </h5>
          <h5>Owner: <strong> {{ $pet->customer_name }} </strong></h5>
          @if ($pet->pet_isActive == "1")
          <h5>Status : <strong> YES </strong></h5>
          @else
          <h5>Status : <strong> NO </strong></h5>
          @endif
          

          <h5 style="text-align: center">
            {!! QrCode::size(150)->generate('name: '.$pet->pet_name.
              ' Gender: '.$pet->pet_gender.
              ' Type: '.$pet->type_name.
              ' Breed: '.$pet->breed_name.
              ' Registered Date: '. $pet->pet_registeredDate.
              ' Owner: '.$pet->clinic_name .
              ' Address: '.$pet->customer_address); !!}
              <br><strong>Scan Me</strong>
            </h5> 

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- end view modal --}}
            @endforeach 
        </tbody>
      </table>
      
    </div>
  </div>
</div>
  
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script>
  $("document").ready(function() {
    setTimeout(function() {
      $("#messageModal").remove();
    }, 3000);
  });
</script>

@endsection
