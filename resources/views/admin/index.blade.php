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

    {{-- Main content  --}}
<div class= "content">
<div class= "containter-fluid">
    <div class="row">
        <div class="col-sm-12">
            <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
  
                  <p>Veterinarians</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="vethome" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px"></sup></h3>
  
                  <p>Pets</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>
  
                  <p>Customers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
  
                  <p>Clinic</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <!-- ./col -->
          </div>
          <!-- /.row -->


        </div>
    </div>
</div>
</div>
</div>

<div class="card">
  <div class="card-header border-0">
    <h3 class="card-title">New Patients</h3>
    <div class="card-tools">
      <a href="#" class="btn btn-tool btn-sm">
        <i class="fas fa-download"></i>
      </a>
      <a href="#" class="btn btn-tool btn-sm">
        <i class="fas fa-bars"></i>
      </a>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-striped table-valign-middle">
      <thead>
      <tr>


        <th>Name</th>
        <th>Gender</th>
        <th>Pet Type</th>
        <th>Status</th>
        <th>More</th>
        
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          <img src="dist/img/askal.jpg" class="img-circle img-size-32 mr-2">
          Vincent
          <span class="badge bg-danger">NEW</span>
        </td>
        <td>Male</td>
        <td>
          <small class="text-success mr-1">
            
          </small>
          Askal
        </td>

        <td class="project-state">
          <span class="badge badge-success">Yes</span>
      </td> 
        
        <td>
          <a href="#" class="text-muted">
            <i class="fas fa-search"></i>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <img src="dist/img/default-150x150.png" class="img-circle img-size-32 mr-2">
          Shayna
          <span class="badge bg-danger">NEW</span>
        </td>
        <td>Male</td>
        <td>
          <small class="text-success mr-1">
          </small>
         Chiwawa
        </td>

        <td class="project-state">
          <span class="badge badge-success">Yes</span>
      </td> 
        
        <td>
          <a href="#" class="text-muted">
            <i class="fas fa-search"></i>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <img src="dist/img/default-150x150.png" class="img-circle img-size-32 mr-2">
          Vincent
          <span class="badge bg-danger">NEW</span>
        </td>
        <td>Male</td>
        <td>
          <small class="text-success mr-1">
            
          </small>
          Askal
        </td>

        <td class="project-state">
          <span class="badge badge-success">Yes</span>
      </td> 
        
     
        
        <td>
          <a href="#" class="text-muted">
            <i class="fas fa-search"></i>
          </a>
        </td>
      </tr>
      </tbody>

      
    </table>
    
  </div>
</div>
<!-- /.card -->

 <!-- /.col-md-6 -->
 <div class="col-lg-6">
  <div class="card">
    <div class="card-header border-0">
      <div class="d-flex justify-content-between">
        <h3 class="card-title">Sales</h3>
        <a href="javascript:void(0);">View Report</a>
      </div>
    </div>
    <div class="card bg-gradient-success">
      <div class="card-header border-0">
        <h3 class="card-title">
          <i class="far fa-calendar-alt"></i>
          Calendar
        </h3>

         <!-- tools card -->
         <div class="card-tools">
          <!-- button with a dropdown -->
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
              <i class="fas fa-bars"></i>
            </button>
            <div class="dropdown-menu" role="menu">
              <a href="#" class="dropdown-item">Add new event</a>
              <a href="#" class="dropdown-item">Clear events</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">View calendar</a>
            </div>
          </div>
          <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <!-- /. tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body pt-0">
      <!--The calendar -->
      <div id="calendar" style="width: 100%"></div>
    </div>
     <!-- /.card-body -->
  </div>
  <!-- /.card -->
  




</div> 

{{-- end whole --}}
@endsection