@extends('layoutsvet.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')

@csrf
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
    @csrf
      <div class="card-header">
        <h3 class="header">Customer</h3>
        <br>

    <!-- Main content -->

        <table class="table  table-striped table-hover">
          <thead>
            <tr>
              <th scope="col" style="width:5%">#</th>
              <th scope="col"style="width:8%"> Name</th>
    
              <th scope="col"style="width:5%">Mobile</th>
              <th scope="col"style="width:5%">Telephone</th>
              <th scope="col"style="width:10%">Gender</th>
              <th scope="col"style="width:5%">Birthday</th>
              {{-- <th scope="col"style="width:10%">Customer Profile</th> --}}
              <th scope="col"style="width:15%">Address</th>
              <th scope="col"style="width:5%">User ID</th>
              <th scope="col"style="width:10%">Status</th>
              <!-- <th scope="col"style="width:65%">Action</th> -->
            </tr>
  </thead>
  <tbody>
    @foreach ($customers as $customer)
    <tr>
      <td>{{ $customer->customer_id}}</td>
      <td>{{ $customer->customer_name}}</td>
      <td>{{ $customer->customer_mobile}}</td>
      <td>{{ $customer->customer_tel}}</td>
      <td>{{ $customer->customer_gender}}</td>
      <td>{{ $customer->customer_birthday}}</td>
      <td>{{ $customer->customer_address}}</td>
      <td>{{ $customer->user_id}}</td>
      <td>{{ $customer->customer_isActive}}</td> 
        
    @endforeach
    </tr>
 </tbody>
</table>
{{ $customers->links() }}
      </div>
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
@endsection