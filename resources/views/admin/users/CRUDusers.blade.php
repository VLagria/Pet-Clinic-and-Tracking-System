@extends('layoutsadmin.app') 

@section('content')

@include('sweet::alert')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="/styles.css">
<div class="content-wrapper">
  <br>
  
<div class="card" style="width: auto; margin-left:20px; margin-right:20px; padding: 20px;">
  <div class="card-header">
      <h3 class="card-title" id="pet_name_id">User Accounts</h3>
    <form action="{{ route('user.userSearch') }}" method="get">
        <div class="float-right">
          <input type="search" class="form-control rounded" name="userSearch" id="userSearch" placeholder="Search by Username" aria-label="Search" style="width: 200px;" />
          <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
          <a class="btn btn-success" style="margin-left: 10px;" href="/admin/users/registerUser"><i class="fas fa-user"></i> Create User </a>
        </div>
      </form>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-striped table-valign-middle">
      <br>
      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>User Type</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody> 
        @foreach ($userTypes_name as $userAccounts) 
        <tr>
          <td>{{ $userAccounts->user_name }}</td>
          <td>{{ $userAccounts->user_email }}</td>
          <td>{{ $userAccounts->userType_name }}</td>

          <td class="project-actions">
            <a class="btn btn-primary editbt" data-toggle="modal" data-target="#viewModal{{$userAccounts->user_id}}">
              <i class="fas fa-folder"></i>
            </a>
            <a class="btn btn-info editbt" href="/admin/users/editUser/{{ $userAccounts->user_id }}">
              <i class="fas fa-pencil-alt"></i>
            </a>
            <button class="btn btn-danger" id="delete" data-toggle="modal" data-target="#deleteModal{{ $userAccounts->user_id }}">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>  

<!-- DELETE MODAL -->
        <div class="modal fade" id="deleteModal{{ $userAccounts->user_id }}" tabindex="-1" role="dialog" aria-hidden="true" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action=" /admin/users/CRUDusers/delete/{{$userAccounts->user_id}} " method="GET">
                {{ csrf_field() }}
                <div class="modal-body">
                  <h3>Confirm deletion of {{$userAccounts->userType_name}}: <b>{{$userAccounts->user_name}}</b>?</h3>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">Delete</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
<!-- VIEW MODAL -->
        <div id="viewModal{{ $userAccounts->user_id }}" class="modal fade" role="dialog" style="display:none">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="display: inline-block;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="font-weight: bold;">View User</h4>
              </div>
              <form action="" method="get">
                <div class="modal-body" style="font-weight: bold;">
                  <h3 style="font-weight: bold;">User Details:
                    <h5>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Username: {{ $userAccounts->user_name }}
                      <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Password: {{ $userAccounts->user_password }}
                      <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Mobile No.: {{ $userAccounts->user_mobile }}
                      <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Email: {{ $userAccounts->user_email }}
                      <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;User Type: {{ $userAccounts->userType_name }}
                    </h5>
                  </h3>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal" id="CloseBtn">Close</button>
                </div>
              </form>
          </div>
        </div>
      </div>

      @endforeach

      </tbody>      
    </table>
  </div>
  <br>
  <div style="margin-left: 10px;">{{ $userTypes_name->links('pagination::bootstrap-4') }}</div>
</div>
</div>

<!-- /.card -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<script>
  $("document").ready(function() {
    setTimeout(function() {
      $("#messageModal").remove();
    }, 3000);
  });
</script>

</section>
<!-- /.content -->
<!-- /.content-wrapper -->

@endsection