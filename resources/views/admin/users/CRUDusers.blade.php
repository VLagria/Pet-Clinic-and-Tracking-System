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
              <a href="" class="btn btn-primary btn-sm view-btn" data-toggle="modal" data-target="#viewModal" data-id="{{ $userAccounts->user_id }}">
                  <i class="fas fa-folder">
                  </i>
                  View
              </a>
              <a href="" class="btn btn-info btn-sm editbtn" data-toggle="modal" data-target="#editModal">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <a href="" data-target="#deleteFunc" class="btn btn-danger btn-sm" >
                  <i class="fas fa-trash">
                  </i>
                  Delete
              </a>
          </td> 
          </tr>   
          @endforeach
        </tbody>      
      </table>
      
    </div>
  </div>
  <!-- /.card -->
  



  <!------------------------------------------------------------- {{-- View  modal  --}} -------------------------------------------------------------------------------->

  <div class="modal" id="viewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View User Accounts</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
           <h5>User ID: </h5>
           <h5>Username: </h5>
           <h5>Password: </h5>
           <h5>Mobile No.: </h5>
           <h5>Email: </h5>
           <h5>User Type: </h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- {{--------------------------------------------------------------------------------- end view modal ---------------------------------------------------------------------------------}} -->
   
    <!--------------------------------------------------------------------------------- edit Modal --------------------------------------------------------------------------------->
   
      
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="" method="POST">

        {{ csrf_field() }}
        <div class="modal-body">

                  <input type="hidden" name="update_id" id="update_id">

                  <div class="form-group">
                    <label>User ID: </label>
                    <input type="text" name="user_id" id="user_id" class="form-control" placeholder="">
                  </div>

                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Username">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="text" name="user_mobile" id="user_mobile" class="form-control"  placeholder="Enter Mobile No">
                    
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Enter Email">
                  </div>

          <div class="form-group">
            <label for="inputStatus">Usertype</label>
            <select id="userType_id" class="form-control custom-select">
              <option selected disabled>--</option>
              <option>Admin</option>
              <option>Veterinarian</option>  
              <option>Customer</option> 
            </select>
          </div>
        </div>
  
              
      
    
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- -------------------------------------------------------------------------------{{-- end edit modal  --}} --------------------------------------------------------------------------------->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


  <script>
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
  </script>


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