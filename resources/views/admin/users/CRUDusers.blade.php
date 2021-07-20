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
            
        <th style="width: 25%" class="text-left">Action</th>
          
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
              <button type="button" class="btn btn-primary btn-sm view-btn" id="view" data-toggle="modal" data-target="#viewModal{{ $userAccounts->user_id }}">View</button>
              
              <button type="button" class="btn btn-info btn-sm editbtn" id="edit" data-toggle="modal" data-target="#editModal{{ $userAccounts->user_id }}"><i class="fas fa-pencil-alt">
                  </i>Edit</button>
              
              <a href="" data-target="#deleteFunc" class="btn btn-danger btn-sm" >
                  <i class="fas fa-trash">
                  </i>
                  Delete
              </a>
          </td> 
          </tr>   
<!------------------------------------------------------------- {{-- View  modal  --}} -------------------------------------------------------------------------------->

  <!-- Modal for Advance Filter -->
  <div id="viewModal{{ $userAccounts->user_id }}" class="modal fade" role="dialog" style="display:none">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="display: inline-block;">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Advance Filter</h4>
    </div>
    <form action="" method="get">
      <div class="modal-body">
        <h5>User ID: {{ $userAccounts->user_id }}</h5>
        <h5>Username: {{ $userAccounts->user_name }}</h5>
        <h5>Password: {{ $userAccounts->user_password }}</h5>
        <h5>Mobile No.: {{ $userAccounts->user_mobile }}</h5>
        <h5>Email: {{ $userAccounts->user_email }}</h5>
        <h5>User Type: {{ $userAccounts->userType_name }}</h5>
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

            <form action="/admin/clinic/CRUDclinic/update/{{$userAccounts->user_id}}" method="POST">

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
  



  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


  <!-- <script>
    jQuery('#viewModal').modal('hide');

    $('.view-btn').on('click',function(){ 
       alert('i was clicked'); 
      const id = $(this).attr('data-id');
      console.log(id);
      $.ajax({
        url:"/user_details/"+id,
        type:'GET',
        data: {
          "id":id
        },
        success:function(data){
          console.log(data);
        }
      });
    });
  </script> -->


  <!-- -------------------------------------------------------------------------------{{-- start add modal  --}} --------------------------------------------------------------------------------->

  <div class = "float-right">
    
    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addModal">
    <i class="fas fa-save"> Create </i>
      </button>
      </div>  

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">User Accounts</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
  
          <form action="{{ route('post.addadminsubmit') }}" method="POST">  
            
          @csrf
          <div class="modal-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user_name" class="form-control" placeholder="Enter Username">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="user_password" class="form-control" placeholder="Enter Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="text" name="user_mobile" class="form-control"  placeholder="Enter Mobile No">
                    
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="user_email" class="form-control" placeholder="Enter Email">
                  </div>
  
            <div class="form-group">
              <label for="inputStatus">Usertype</label>
              <select name="userType_id" class="form-control custom-select">
                  @foreach ($userOptions as $user_types)
                    <option value="{{$user_types->userType_id}}"  > {{$user_types->userType_name}}</option>
                  @endforeach
              </select>
            </div>
          </div>
    

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" value ="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </div>
      </form>
      </div>
    </div>
  <!-- {{-- end add modal  --}} -->
      
<!-- START DELETE -->




<!-- END DELETE -->


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection