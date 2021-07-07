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
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Customers</h3>
  
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
                  <th style="width: 10%">
                      Name
                  </th>
                  <th style="width: 5%">
                    Birthdate
                </th>

                <th style="width: 5%">
                  Gender
              </th>
                  <th style="width: 5%">
                      Mobile
                  </th>
                  <th style="width: 10%">
                      Email
                  </th>
                  <th style="width: 10%" >
                      Telephone
                </th>
                  <th style="width: 8%" >
                    Profile Image
                  </th>
                  <th style="width: 10%">
                    Address
                  </th>
                  <th style="width: 10%" class="text-center">
                   isActive
                  </th>
                  <th style="width: 10%">
                    User ID
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
                         Hannah Ramirez
                      </a>
                      <br/>
                      <small>
          
                      </small>
                  </td>
                  
                  <td>
                      <a>
                        11/15/1999
                      </a>
                  </td>
                  <td>
                    <a>
                 Female
                    </a>
                </td>
                  <td>
                      <a>
                   0921387435
                      </a>
                  </td>
  
                  <td>
                    <a>
                 Clinicepet@gmail.com
                    </a>
                </td>
                <td>
                  <a>
              08123672
                  </a>
              </td>

            </td>

            <td>
              <a>
           (Image Here))
              </a>

              
            </td>
              
              <td>
                <a>
             Purok 25 b3 Maa Peoples Village
                </a>


           
                  <td class="project-state">
                      <span class="badge badge-success">Yes</span>
                  </td> 
                <td>
                  <a>
                  2423
                  </a>
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