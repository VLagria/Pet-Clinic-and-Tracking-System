@extends('layoutsvet.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
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
    <div class="card-header">
      <h3 class="header">Dashboard</h3>
      <br>
   
    <!-- Main content -->
    <table class="table  table-striped table-hover">
  <thead>
    <tr>
      <th scope="col" style="width:5%">#</th>
      <th scope="col"style="width:5%">Customer Name</th>
      <th scope="col"style="width:5%">Customer Mobile</th>
      <th scope="col"style="width:5%">Customer Telephone</th>
      <th scope="col"style="width:10%">Customer Gender</th>
      <th scope="col"style="width:5%">Customer Birthday</th>
      <th scope="col"style="width:10%">Customer Profile</th>
      <th scope="col"style="width:2%">Customer Address</th>
      <th scope="col"style="width:10%">Customer Zip</th>
      <th scope="col"style="width:5%">User ID</th>
      <th scope="col"style="width:10%">Status</th>
      <!-- <th scope="col"style="width:65%">Action</th> -->
    </tr>
  </thead>
  <tbody>
  <td>
    1
    </td>
    <td>
    Shayna Goles
    </td>
    <td>
    1234567
    </td>
    <td>
    2225584
    </td>
    <td>
    Female
    </td>
    <td>
    05-05-1999
    </td>
    <td>
    profilke
    </td>
    <td>
    Calinan Davao City
    </td>
    <td>
  2000
    </td>
    <td>
   daw
    </td>
    <td>
    active
    </td>
  

    <!-- <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm-1" href="#"style="margin-right:2%"style="width=2%">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm-1" href="#"style="margin-right:2%"style="width=2%">	
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm-1" href="#"style="margin-right:2%"style="width=2%">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td> -->
 </tbody>
 <tbody>
  <td>
    2
    </td>
    <td>
    Shayna Goles
    </td>
    <td>
    1234567
    </td>
    <td>
    2225584
    </td>
    <td>
    Female
    </td>
    <td>
    05-05-1999
    </td>
    <td>
    profilke
    </td>
    <td>
    Calinan Davao City
    </td>
    <td>
  2000
    </td>
    <td>
   daw
    </td>
    <td>
    active
    </td>
  

  
 </tbody>
</table>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
    <script src="{{ asset('vendors/dist/js/adminlte.min.js') "></script>
@endsection