@extends('layouts.app')

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
                <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
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




<!-- Default box -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Pets</h3>
  
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      #
                  </th>
                  <th style="width: 3%">
                      Name
                  </th>
                  <th style="width: 3%">
                   Gender
                </th>
                <th style="width: 6%">
                  Pet Type
              </th>

                <th style="width: 7%">
                  Pet Breed
              </th>
                  <th style="width: 5%">
                    Birthdate
                  </th>
                  <th style="width: 10%">
                      Blood Type
                  </th>
                  <th style="width: 10%" >
                      Profile Image
                </th>
                  <th style="width: 10%" >
                    Regisration Date
                  </th>
                  <th style="width: 10%">
                    Customer ID
                  </th>
                  
                  <th style="width: 5%">
                    Clinic ID
                  </th>
                  <th style="width: 5%" class="text-center">
                    isActive
                   </th>
                </th>
                <th style="width: 15%" class="text-center">
                  Action
                </th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>
                      #
                  </td>
                  <td>
                      <a>
                         Mingmingming
                      </a>
                      <br/>
                      <small>
          
                      </small>
                  </td>
                    
                  <td>
                      <a>
                        Female
                      </a>
                  </td>
                  <td>
                    <a>
                      Persian
                    </a>
                </td>
                  <td>
                      <a>
                   Persian
                      </a>
                  </td>
  
                  <td>
                    <a>
                12/2/20014
                    </a>
                </td>
                <td>
                  <a>
                  AAAAA
                  </a>
              </td>

            </td>

            <td>
              <a>
           (Image Here)
              </a>

              
            </td>
              
              <td>
                <a>
                  07/02/2021
                </a>

              </td>

              <td>
                <a>
                 12323
                </a>

              </td>
              <td>
                <a>
                2423
                </a>
            </td>
                


           
                  <td class="project-state">
                      <span class="badge badge-success">Yes</span>
                  </td> 
                
  
                              <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>
                      <a class="btn btn-info btn-sm" href="#">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td> 
              </tr>
              <tr>
              </tr>
  
            
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

        







@endsection