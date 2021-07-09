
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
      <h3 class="header">Clinic</h3>
      <br>
      
  

    <!-- Main content -->
  
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"> Veterinarian or Clinic</h5>

                <p class="card-text">
                  View a veterinarian and Clinic that is available
                </p>

                <a href="viewvet" class="card-link">View A Veterinarian </a>
                <a href="viewvetclinic" class="card-link">View Clinic</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">ASSIGNING YOUR PET </h5>

                <p class="card-text">
                  Assigning your pet to a veterinarian and a clinic for vet operations.
                </p>
                <a href="assignvet" class="card-link">Assign Pet</a>
                
              </div>
            </div><!-- /.card -->
            <!-- <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Featured Clinic</h6> -->

                <!-- <p class="card-text">Our Lovely Veterinary Clinic</p>
                <div class="media">
              <img src="{{ asset('vendors/dist/img/vetclinic1.jpg') }}" alt="User Avatar" class="img-size-60 img-square mr-3">
              </div>
              </div>
            </div>
          </div> -->
          <!-- /.col-md-6 -->
          <!-- <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured </h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Featured Clinic</h6>

                <p class="card-text">Another Nice Clinic </p>
                <div class="media">
              <img src="{{ asset('vendors/dist/img/vetclinic2.jpg') }}" alt="User Avatar" class="img-size-100 img-square mr-3">
              </div>
              
              </div>
            </div> -->

           
          </div>
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
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