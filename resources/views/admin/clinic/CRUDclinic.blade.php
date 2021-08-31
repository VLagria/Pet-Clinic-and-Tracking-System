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
    
    <!-- /.content-header -->



<!-- Default box -->

  @if(Session::has('clinic_updated')) 
    <div class="alert alert-success" id="messageModal" data-toggle="modal" role="alert">
      {{ Session::get('clinic_updated') }}
    </div> 
  @endif

  @if(Session::has('newVeterinary')) 
    <div class="alert alert-success" id="messageModal" data-toggle="modal" role="alert">
      {{ Session::get('newVeterinary') }}
    </div> 
  @endif

  @if(Session::has('clinic_deleted')) 
    <div class="alert alert-danger" id="messageModal" data-toggle="modal" role="alert">
      {{ Session::get('clinic_deleted') }}
    </div> 
  @endif

  @if(Session::has('clinicDeleteFail')) 
    <div class="alert alert-danger" id="messageModal" data-toggle="modal" role="alert">
      {{ Session::get('clinicDeleteFail') }}
    </div> 
  @endif
    <div>
      <form action="{{ route('clinic.clinicsearch') }}" method="GET">
            <div class="input-group" style="width: 400px; margin-left: 400px">
            <button type="submit" class="btn btn-info" style="margin-right: 3%;">search</button>
              <input type="search" class="form-control rounded" placeholder="Search by Type Name" name="clinicSearch" id="clinicSearch">
            </div>
        </form>
    </div>
    <div class="">
        <a class="btn btn-success btn-lg" href="/admin/clinic/registerClinic" style="margin-left: 1%;">
          <i class="fas fa-clinic-medical"></i> Create
        </a>
      </div>
      <br>
    <div class="card">
    <div class="card-header">
      <h3 class="card-title">Clinic</h3>
    </div>
    <div class="card-body table-responsive p-0" id="CRUDclinic">
      <table class="table table-striped table-valign-middle" id="CRUDclinic">
     

        

        <thead id="CRUDclinic">
        <tr>
  
          <th style="width: 14%">Clinic Name</th>
          <th style="width: 15%">Owner Name</th>
          <th style="width: 7%">Mobile No</th>
          <th style="width: 7%">Telephone</th>
          <th>Email</th>       
          <th style="width: 25%">Address</th>
          <th>Status</th>
            
        <th style="width: 50%;" class="text-center">
                  Action
                </th>
          
        </tr>
        </thead>
        <tbody>
          @foreach($getClinicInfo as $cAccounts)
        <tr>
           <td>{{ $cAccounts->clinic_name }}</td>
           <td>{{ $cAccounts->owner_name }}</td>
           <td>{{ $cAccounts->clinic_mobile }}</td>
           <td>{{ $cAccounts->clinic_tel }}</td>
           <td>{{ $cAccounts->clinic_email }}</td>
           <td>{{ $cAccounts->clinic_blk }} / {{ $cAccounts->clinic_street }} / {{ $cAccounts->clinic_barangay }} / {{ $cAccounts->clinic_city }} / {{ $cAccounts->clinic_zip }}</td>

            @if ($cAccounts->clinic_isActive == 1)
            <td><h6><span class="badge badge-success lg" >Active</span></h4></td>
            @else
            <td><h6><span class="badge badge-warning lg">Inactive</span></td>
            @endif
          
            <td class="project-actions" style="margin-left: 30px;">

              <h4><a class="btn btn-primary view-btn btn-sm" style="margin-left: 35%;" href="/admin/vet/viewVetDetails/{{ $cAccounts->clinic_id }}">
                <i class="fas fa-folder"></i>
              </a>

              <a href="/admin/clinic/editClinic/{{ $cAccounts->clinic_id }}" class="btn btn-info btn-sm" >
                  <i class="fas fa-pencil-alt"></i>
              </a>
              <a class="btn btn-danger btn-sm" data-toggle="modal"  data-target="#deleteModal{{ $cAccounts->clinic_id }}" >
                  <i class="fas fa-trash"></i>
                  </a>

                  <a class="btn btn-success btn-sm" href="/admin/vet/registerVet/{{ $cAccounts->clinic_id }}"><i class="fas fa-user-md"></i> 
            </a>
          </td> 
<!-- DELETE MODAL -->
  <div class="modal fade" id="deleteModal{{ $cAccounts->clinic_id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Clinic</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/clinic/CRUDclinic/delete/{{ $cAccounts->clinic_id }}" method="GET">
                {{ csrf_field() }}
                <div class="modal-body">
                    <h3>Confirm deletion of {{ $cAccounts->clinic_name }}?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">Delete</button>
                </div>
            </form>
        </div>
    </div>
  </div>
<!---------------------------- end delete modal -------------------------------->
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card -->

  
  



  
   
    

  




      


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

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="../../plugins/jquery/jquery.min.js"></script>

  <script>
    $("document").ready(function(){
      setTimeout(function(){
        $("#messageModal").remove();
      }, 3000 );
    });
  </script>

  

@endsection