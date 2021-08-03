@extends('layoutsadmin.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

@section('content') 
@csrf 
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"></div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right"></ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Default box --> 
  @if(Session::has('vet_deleted')) 
    <div class="alert alert-danger" role="alert" id="messageModal">
        {{ Session::get('vet_deleted') }}
    </div> 
  @endif 

  @if(Session::has('newCustomer')) 
    <div class="alert alert-success" role="alert" id="messageModal">
        {{ Session::get('newCustomer') }}
    </div> 
  @endif 

  <div class="card"> 
    @csrf 
    <div class="card-header">
      <a class="btn btn-error btn-sm" href="/admin/clinic/CRUDclinic">
        <i class="fas fa-arrow-left"></i> Return </a>
      <h3 class="header">Veterinary Details</h3>
      <br>
      <!-- Main content -->
      <table class="table  table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" style="width:5%">ID #:</th>
            <th scope="col" style="width:10%">Name:</th>
            <th scope="col" style="width:7%">Mobile:</th>
            <th scope="col" style="width:7%">Telephone:</th>
            <th scope="col" style="width:10%">Birthday:</th>
            <!-- <th scope="col"style="width:10%">Customer Profile:</th> -->
            <th scope="col" style="width:20%">Address:</th>
            <th scope="col" style="width:10%">Date Added:</th>
            <th scope="col" style="width:10%">Clinic ID:</th>
            <th scope="col" style="width:10%">User ID:</th>
            <th scope="col" style="width:20%">Status:</th>
            <th scope="col" style="width:20%">Action:</th>
          </tr>
        </thead>
        <tbody> 
          @foreach ($vetDetails as $vdetails) 
          <tr>
              <td>{{ $vdetails->vet_id }}</td>
              <td>{{ $vdetails->vet_lname }}, {{ $vdetails->vet_fname }} {{ $vdetails->vet_mname }}</td>
              <td>{{ $vdetails->vet_mobile}}</td>
              <td>{{ $vdetails->vet_tel}}</td>
              <td>{{ $vdetails->vet_birthday}}</td>
              <td>{{ $vdetails->vet_blk }} / {{ $vdetails->vet_street}} / {{ $vdetails->vet_subdivision}} / {{ $vdetails->vet_barangay}} / {{ $vdetails->vet_city}} / {{ $vdetails->vet_zip}}</td>
              <td>{{ $vdetails->vet_dateAdded }}</td>
              <td>{{ $vdetails->clinic_id  }}</td>
              <td>{{ $vdetails->user_id  }}</td>

              @if ($vdetails->vet_isActive == 1) 
              <td>
                <span class="badge badge-success"> Yes </span>
              </td> 
              @else 
              <td>
                <span class="badge badge-error"> No </span>
              </td> 
              @endif

              <td class="project-actions text-right">
               <h4><a class="btn btn-primary view-btn" style="margin-left: 15px;" href="#">
                <i class="fas fa-folder"></i>
              </a>

              <a class="btn btn-info" href="/admin/vet/editVet/{{ $vdetails->vet_id }}">
                  <i class="fas fa-pencil-alt"></i>
              </a>
              <a class="btn btn-danger" data-toggle="modal"  data-target="#deleteModal{{ $vdetails->vet_id }}">
                  <i class="fas fa-trash"></i>
                  </a>

              </td>
          </tr> 

          <!---------------------------- delete modal -------------------------------->
  <div class="modal fade" id="deleteModal{{ $vdetails->vet_id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Vet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/vet/viewVetDetails/delete/{{ $vdetails->vet_id }}" method="GET">
                @csrf
                <div class="modal-body">
                    <h3>Confirm deletion of Veterinarian?</h3>
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
</div>


  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <script src="{{asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script>
    $("document").ready(function() {
      setTimeout(function() {
        $("#messageModal").remove();
      }, 2000);
    });
  </script> 
@endsection