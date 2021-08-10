@extends('layoutsadmin.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        
  <div class="float-left">
      <a class="btn btn-success btn-lg" style="margin-right: 50px;" href="/admin/users/registerUser">
                <i class="fas fa-user"></i> Create User </a>
    </div>
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
  @if(Session::has('user_deleted')) 
    <div class="alert alert-danger" id="messageModal" data-toggle="modal" role="alert">
      {{ Session::get('user_deleted') }}
    </div> 
  @endif

  @if(Session::has('deleteFail')) 
    <div class="alert alert-danger" id="messageModal" data-toggle="modal" role="alert">
      {{ Session::get('deleteFail') }}
    </div> 
  @endif

  @if(Session::has('user_updated')) 
    <div class="alert alert-success" id="messageModal" role="alert">
      {{ Session::get('user_updated') }}
    </div> 
    @endif
    
@if(Session::has('user_created')) 
      <div class="alert alert-success" id="messageModal" role="alert">
          {{ Session::get('user_created') }}
      </div> 
    @endif 


<div class="card">
    <div class="card-header">
      <h3 class="card-title">User Accounts</h3>
  
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
        <tr>
  
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>User Type</th>
            
        <th>Action</th>
          
        </tr>
        </thead>
        <tbody>
          @foreach ($userTypes_name as $userAccounts)
        <tr>
           <td>{{ $userAccounts->user_id }}</td>
           <td>{{ $userAccounts->user_name }}</td>
           <td>{{ $userAccounts->user_email }}</td>
           <td>{{ $userAccounts->userType_name }}</td>
          
            <td class="project-actions">

                <a class="btn btn-primary btn-sm editbt" data-toggle="modal" data-target="#viewModal{{$userAccounts->user_id}}"> <i class="fas fa-folder"></i>
                View </a>

                <a class="btn btn-info btn-sm editbt" href="/admin/users/editUser/{{ $userAccounts->user_id }}"><i class="fas fa-pencil-alt"></i>
                   Edit User </a>
              
              <button class="btn btn-danger btn-sm" id="delete" data-toggle="modal"  data-target="#deleteModal{{ $userAccounts->user_id }}">
                  <i class="fas fa-trash"></i>
                  Delete
                  </button>
          </td> 
          </tr>   
<!---------------------------- delete modal -------------------------------->
  <div class="modal fade" id="deleteModal{{ $userAccounts->user_id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <h3>Confirm deletion of user?</h3>
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

<!------------------------------------------------------------- {{-- View  modal  --}} -------------------------------------------------------------------------------->

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
        <h3 style="font-weight: bold;">User ID: {{ $userAccounts->user_id }}
        <h5>Username: {{ $userAccounts->user_name }} 
        <br>Password: {{ $userAccounts->user_password }}
        <br>Mobile No.: {{ $userAccounts->user_mobile }}
        <br>Email: {{ $userAccounts->user_email }}
        <br>User Type: {{ $userAccounts->userType_name }}</h5>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal" id="CloseBtn">Close</button>
      </div>
    </form>
    </div>
    </div>
    </div>
  <!-- {{--------------------------------------------------------------------------------- end view modal ---------------------------------------------------------------------------------}} -->
   
 <!--------------------------------------------------------------------------------- edit Modal --------------------------------------------------------------------------------->
   <div class="modal fade" id="editModal{{ $userAccounts->user_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form action="/CRUDusers/update/{{ $userAccounts->user_id }}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">

                      <input type="hidden" name="update_id" id="update_id">

                      <div class="form-group">
                        <label>User ID: </label>
                        <input type="text" name="user_id" id="user_id" class="form-control" disabled="" value="{{ $userAccounts->user_id }}">
                      </div>

                      <div class="form-group">
                        <label>Username: </label>
                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Username" value="{{ $userAccounts->user_name }}">
                      </div>
                  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password: </label>
                        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter Password" value="{{ $userAccounts->user_password }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Mobile No: </label>
                        <input type="text" name="user_mobile" id="user_mobile" class="form-control"  placeholder="Enter Mobile No" value="{{ $userAccounts->user_mobile }}">
                        
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email: </label>
                        <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Enter Email" value="{{ $userAccounts->user_email }}">
                      </div>

              <div class="form-group">
                <label for="inputStatus">Usertype</label>
                
                <select name="userType_id" class="form-control custom-select">
                  @foreach ($userOptions as $user_types) 
                    @if($user_types->userType_id == $userAccounts->userType_id)
                      <option value="{{$user_types->userType_id}}" selected>{{$user_types->userType_name}}</option>
                    @else
                      <option value="{{$user_types->userType_id}}" >{{$user_types->userType_name}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div>
        
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form>
          </div>
        </div>
      </div>

  <!-- -------------------------------------------------------------------------------{{-- end edit modal  --}} --------------------------------------------------------------------------------->

          @endforeach

        </tbody>      
      </table>
      
    </div>

  </div>

  <!-- /.card -->
  
      {{ $userTypes_name->links('pagination::bootstrap-4') }}



  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  <script>
    $("document").ready(function(){
      setTimeout(function(){
        $("#messageModal").remove();
      }, 3000 );
    });
  </script>




  </div>
  </section>
  <!-- /.content -->
  <!-- /.content-wrapper -->



@endsection