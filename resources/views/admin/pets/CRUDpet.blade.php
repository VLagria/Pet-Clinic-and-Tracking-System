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