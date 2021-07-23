
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
<h1 class="mb-2 mt-5 px-5 "><b>VETERINARIAN / CLINIC </b></h1>
<br>

        <!-- <h5 class="mb-2">VIEW A VETERINARIAN OR CLINIC</h5> -->
        <div class="row" >
        <div class="col-lg-3 col-6 px-5 " >
            <div class="card card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">VETERINARIANS </h3>
          
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <br>
              <!-- /.card-header -->
              <div class="card-body">
              <a class ="btn btn-danger" href="viewvet" role="button">View A Veterinarian </a>
              
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
           <!-- /.col -->
           <div class="col-lg-3 col-6 px-3">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Assign a Veterinary to your Pet</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <br>
              <!-- /.card-header -->
              <div class="card-body">
              <a class ="btn btn-warning" href="assignvet" role="button">Assign a Veterinarian</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-lg-3 col-6 px-5">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">CLINIC </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <br>
              <!-- /.card-header -->
              <div class="card-body">
              <a class ="btn btn-success" href="viewvetclinic" role="button">View Clinic </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
</div>
        <!-- /.row -->
        <BR>
        <h3 class="mb-2 mt-5 px-5"><b>WE PROVIDE THE BEST SERVICES  </b></h3>
        <div class="card card-success">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/vet1.jpg') }}" alt="User Avatar" class="img-size-60 img-square mr-3">
                  
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/vet2.jpg') }}" alt="User Avatar" class="img-size-60 img-square mr-3">
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/vet4.jpg') }}"alt="User Avatar" class="img-size-60 img-square mr-3">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><


 
           
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