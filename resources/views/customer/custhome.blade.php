@extends('layoutscustomer.app')

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    
<div class="card card-success">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card mb-2 bg-gradient-dark">
          <img class="card-img-top" src="{{asset('vendors/dist/img/cust1.jpg') }}" alt="Dist Photo 1">
          <div class="card-img-overlay d-flex flex-column justify-content-end">
            <p class="card-text text-grey pb-2 pt-1">Until one has loved an animal, a part of one's soul remains unawakened.</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card mb-2">
          <img class="card-img-top" src="{{asset('vendors/dist/img/cust2.jpg') }}" alt="Dist Photo 2">
          <div class="card-img-overlay d-flex flex-column justify-content-center">

      
          
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card mb-2">
          <img class="card-img-top" src="{{asset('vendors/dist/img/cust3.jpg') }}" alt="Dist Photo 3">
          <div class="card-img-overlay">
            <p class="card-text pb-1 pt-1 text-white">
            The animals of the world exist for their own reasons. <br>
            They were not made for humans any more than black people were made for white, or <br>
            women created for men. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
            <div class="card-header">
      <h3 class="header">Customer Dashboard</h3>


            
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>0</h3>
  
                  <p>Pets</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="custPet" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>0<sup style="font-size: 20px"></sup></h3>
  
                  <p>Veterinarians</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="custVet" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <!-- <div class="col-lg-3 col-6"> -->
              <!-- small box -->
              <!-- <div class="small-box bg-warning">
                <div class="inner">
                  <h3>0</h3> -->
  
                  <!-- <p>Customers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div> -->
            <!-- ./col -->
            <!-- <div class="col-lg-3 col-6"> -->
              <!-- small box -->
              <!-- <div class="small-box bg-danger">
                <div class="inner">
                  <h3>0</h3> -->
  
                  <!-- <p>Clinic</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="custVet" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div> -->

            <!-- ./col -->
          </div>
          <!-- /.row -->


        </div>
    </div>
</div>
</div>
</div>

<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Do you want to view your pet record?</h5>

                <!-- <p class="card-text">
                  Proceeds to the veterinary . . .
                </p> -->
                <br>
                <a href="custPet" class="card-link">View Pet Record </a>
                <!-- <a href="viewvetpatient" class="card-link">View  Health Condition of Pet</a> -->
              </div>
            </div>
</div>
</div>
</div>
<!-- /.card -->

<div class="col-md-6">
  <!-- USERS LIST -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Latest Veterinarians</h3>

      <div class="card-tools">
        <span class="badge badge-danger">4 New Members</span>
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <ul class="users-list clearfix">
        <li>
          <img src="{{asset('vendors/dist/img/soy.jpg') }}" alt="User Image">
          <a class="users-list-name" href="#">Vincent Lagria</a>
          <span class="users-list-date">Today</span>
        </li>
        <li>
          <img src="{{asset('vendors/dist/img/rus.jpg') }}" alt="User Image">
          <a class="users-list-name" href="#">Russel Viernes</a>
          <span class="users-list-date">Yesterday</span>
        </li>
        <li>
          <img src="{{asset('vendors/dist/img/kang.jpg') }}" alt="User Image">
          <a class="users-list-name" href="#">Ericka Esleta</a>
          <span class="users-list-date">12 Jan</span>
        </li>
        <li>
          <img src="{{asset('vendors/dist/img/shayn.jpg') }}" alt="User Image">
          <a class="users-list-name" href="#">Shayna Goles</a>
          <span class="users-list-date">12 Jan</span>
        </li>
        
      </ul>
      <!-- /.users-list -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
      <a href="custVet">View All Veterinaries</a>
    </div>
    <!-- /.card-footer -->
  </div>
  <!--/.card -->
</div>
<!-- /.col -->


</section>
<!-- /.content -->


</div>
<!-- /.col -->


</div><!-- /.container-fluid -->


</div> 

{{-- end whole --}}
@endsection