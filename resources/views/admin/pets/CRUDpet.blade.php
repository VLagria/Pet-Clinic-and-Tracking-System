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
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Pets</h3>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
        <tr>
  
          <th>ID</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Birthdate</th>
          <th>Pet Notes</th>
          <th>Blood Type</th>
          <th>Pet Profile</th>
          <th>Date of Registration </th>
          <th>Pet Type</th>
          <th>Pet Breed</th>
          <th>Customer ID </th>
          <th>Clinic ID</th>
          <th>Status</th>            
        <th style="width: 14%" class="text-center">
                  Action
                </th>
          
        </tr>
        </thead>
        <tbody>
          @foreach ($Pet as $pet)
        <tr>
          <td> {{ $pet->pet_id}}</td>
          <td> {{ $pet->pet_name}}</td>
          <td> {{ $pet->pet_gender}}</td>
          <td> {{ $pet->pet_birthday}}</td>
          <td> {{ $pet->pet_notes}}</td>
          <td> {{ $pet->pet_bloodType}}</td>
          <td> {{ $pet->pet_DP}}</td>
          <td> {{ $pet->pet_registeredDate}}</td>
          <td> {{ $pet->pet_type_id}}</td>
          <td> {{ $pet->pet_breed_id}}</td>
          <td> {{ $pet->customer_id}}</td>
          <td> {{ $pet->clinic_id}}</td>
          <td> {{ $pet->pet_isActive}}</td>
          <td class="project-actions text-right">
              <a href="/admin/pets/CRUDeditpet/{{$pet->pet_id}}" class="btn btn-info btn-sm">
                <i class="fas fa-pencil-alt"></i> Edit </a>
              <a class="btn btn-danger btn-sm" href="/admin/pets/delete-pets/{{$pet->pet_id}}">
                <i class="fas fa-trash"></i> Delete </a>
              </td>
            </tr>
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

@endsection
