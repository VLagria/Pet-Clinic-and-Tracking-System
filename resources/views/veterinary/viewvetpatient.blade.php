@extends('layoutsvet.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
  <!-- Content Wrapper. Contains page content -->

  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        
          </div><!-- /.col -->
          <div class="col-sm-lg">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<!-- Default box -->
@if(Session::has('patients_deleted'))
             <div class="alert alert-danger" role="alert">
              {{ Session::get('patients_deleted') }}
              </div>
        @endif
<div class="card">
  @if(Session::has('newPatients'))
             <div class="alert alert-danger" role="alert">
              {{ Session::get('newPatients') }}
              </div>
        @endif
<div class="card">
  @csrf
    <div class="card-header">
      <h3 class="card-title">Patients</h3>
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
      
  <table style="table-layout: fixed; width: 100%;" class="table table-striped projects">
  <thead>
    <tr>
      <th style="width:15%;" scope="col">ID</th>
      <th style="width:15%;"scope="col"> Name</th>
      <th style="width:15%;"scope="col"> Gender</th>
      <th style="width: 20%;"scope="col">Birthday</th>
      <th style="width: 18%;"scope="col"> Notes</th>
      <th style="width: 20%;"scope="col"> Blood Type</th>
      <!-- <th style="width:95px;"scope="col"> Profile</th> -->
      <th style="width: 25%;"scope="col"> Registered Date</th>
      <th style="width: 15%;"scope="col"> Type </th>
      <th style="width: 18%;"scope="col"> Breed </th>
      <th style="width: 20%;"scope="col">Customer </th>
      <th style="width: 15%;"scope="col">Clinic </th>
      <th style="width:15%;"scope="col">Status</th>
      <th style="width:250px;"scope="col">Action</th> 


     
    </tr>
  </thead>
  <tbody>
    @foreach ($petInfoDatas as $info)
    <tr>
        <td>{{ $info->pet_id }}</td>
        <td>{{ $info->pet_name }}</td>
        <td>{{ $info->pet_gender }}</td>
        <td>{{ $info->pet_birthday }}</td>
        <td>{{ $info->pet_notes }}</td>
        <td style="text-align: center">{{ $info->pet_bloodType }}</td>
        <td>{{ $info->pet_registeredDate }}</td>
        <td>{{ $info->type_name }}</td>
        <td>{{ $info->breed_name }}</td>
        <td>{{ $info->customer_name}}</td>
        <td>{{ $info->clinic_name}}</td>
        @if ($info->pet_isActive==1)
        <td><span class="badge badge-success">Yes</span></td>
        @else
        <td><span class="badge badge-success">No</span></td>
        @endif
        

        
        
    
    <td class="project-actions text-right">
                      <a href="" class="btn btn-primary btn-sm" data-id="{{ $info->pet_id }}" data-toggle="modal" data-target="#viewModal{{ $info->pet_id }}">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>  
                      <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal{{ $info->pet_id }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" href="/veterinary/delete-viewvetpatient/{{ $info->pet_id }}">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td> 
                </tr>
 
 


  <!-- /.card -->

  <!-- {{-- View  modal  --}} -->

<div class="modal" id="viewModal{{ $info->pet_id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title">View Patients</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          
          <h5 id="pet_name"> Name: <strong>{{ $info->pet_name }} </strong></h5>
          <h5 id="pet_gender" >Gender: <strong>{{ $info->pet_gender }}</strong></h5>
          <h5>Birthday:  <strong>{{ $info->pet_birthday }}</strong></h5>
          <h5>Type:  <strong>{{ $info->type_name }}</strong></h5>
          <h5>Breed:  <strong>{{ $info->breed_name }}</strong></h5>
          <h5>Registered Date:  <strong>{{ $info->pet_registeredDate }}</strong></h5>
          <h5>Owner:  <strong>{{ $info->customer_name}}</strong></h5>
          <h5>Address:  <strong>{{ $info->customer_address}}</strong></h5>

          
          
           <h5 style="text-align: center">
          {!! QrCode::size(150)->eyeColor(0, 255, 255, 255, 0, 0, 0)->generate('name: '.$info->pet_name.
            ' Gender: '.$info->pet_gender.
            ' Type: '.$info->type_name.
            ' Breed: '.$info->breed_name.
            ' Registered Date: '.$info->pet_registeredDate.
            ' Owner: '.$info->customer_name.
            ' Address: '.$info->customer_address); !!}
            <br><strong>Scan Me</strong>
          </h5> 
        </div>
        
        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


 

  <!-- {{-- end view modal --}} -->
   
    <!-- edit Modal -->
  <div class="modal fade" id="editModal{{ $info->pet_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Patients</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="" method="POST">
          @csrf
        <div class="modal-body">

      
                <div class="form-group">
                  <label for="exampleInputEmail1">Pet Name</label>
                  <input type="email" class="form-control" name="pet_name" aria-describedby="emailHelp" value="{{ $info->pet_name }}">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gender</label>
                  <select id="inputStatus" class="form-control custom-select" name="pet_gender">
                  
                  @if ($info->pet_gender == "Male")
                  <option value="Female">Female</option>
                  <option value="Male" selected>Male</option>
                  
                  @else
                  <option value="Female" selected>Female</option>
                  <option value="Male">Male</option>
                  @endif
                  
                  
                </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Birthday</label>
                  <input type="date" class="form-control" value = "{{ $info->pet_birthday }}"id="date" name="pet_birthday">
             
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Notes</label>
                  <textarea placeholder="Enter Description and Health Conditions" class="form-control" id="inputnotes"  name="pet_notes" >{{ $info->pet_notes }}</textarea>
                </div>
              
                 
                <div class="form-group">
                  <label for="exampleInputEmail1">Bloodtype</label>
                  <input type="email" class="form-control" value="{{ $info->pet_bloodType }}" name ="pet_bloodType" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Optional">
                  
                </div>
    
             
              <div class="form-group">
                <label for="exampleInputEmail1">Registered Date</label>
                <input type="date" class="form-control" value="{{ $info->pet_registeredDate }}" id="date" name="pet_registeredDate">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <select id="inputStatus" class="form-control custom-select" name="pet_type_id">
                  @foreach ($pet_types as $type)
                  @if ($type->type_id == $info->pet_type_id)
                  <option value="{{ $type->type_id }}" selected>{{ $type->type_name }}</option>
                  @else
                  <option value="{{ $type->type_id }}">{{ $type->type_name }}</option>
                  @endif
                  @endforeach
 
                </select>
                
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Breed</label>
                <select id="inputStatus" class="form-control custom-select" name="pet_breeds">
                  @foreach ($pet_breeds as $breed)
                  @if ($breed->breed_id == $info->pet_breed_id)
                  <option value="{{ $breed->breed_id }}">{{ $breed->breed_name }}</option>
                  @else
                  <option value="{{ $breed->breed_id }}">{{ $breed->breed_name }}</option>
                  @endif
                    
                  @endforeach
             
                  
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Customer</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Choose...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Clinic</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Choose...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>is Pet Active?</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                
              </div>

              <div class="form-group">
                <label for="inputStatus">Pet Profile Picture</label>
                <br>
                <form action="/action_page.php">
               <input type="file" id="myFile" name="filename">
              </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach
</tbody> 
</table> 
</div>
<!-- /.card-body -->
</div>

  {{-- end edit modal  --}}
  
  
 <!-- Button add modal -->
 <!-- <div class = " float-right">
    
      

  <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addModal">
  <i class="fas fa-save">  Register </i>
    </button>
    </div> -->


  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register Pet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('vet.addpatient') }}" method="POST" id="add_form">
        @CSRF
        <div class="modal-body">
        @CSRF
                <div class="form-group">
                  <label for="inputname" class="form-label"> Name</label>
                  <input type="name" class="form-control" name="pet_name" value="{{ old('pet_name')}}" aria-describedby="nameHelp" placeholder="Enter Pet Name">
                  <span class="text-danger error-text pet_name_error"></span>
                </div>

                <div class="form-group">
                  <label for="inputGender">Gender</label>
                    <select id="inputStatus" class="form-control custom-select" name="pet_gender">
                      <option selected disabled>Choose...</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                    <span class="text-danger error-text pet_gender_error"></span>
                </div>

                <div class="form-group">
                  <label for="inputnotes"  class="form-label"> Notes</label>
                    <textarea placeholder="Enter Description and Health Conditions" class="form-control"aria-describedby="namelHelp"id="inputnotes"  name="pet_notes" >
                  </textarea>
                  <span class="text-danger error-text pet_notes_error"></span>
                </div>

                <div class="form-group">
                  <label for="inputBloodtype" class="form-label"> BloodType</label>
                  <input type="bloodtype" class="form-control" name="pet_bloodType" id="exampleInputBloodtype" aria-describedby="emailHelp" placeholder="Optional">
                  <span class="text-danger error-text pet_bloodType_error"></span>
                  <br>

                  <div class="form-group">
                    <label for="date" required class="form-label"> Birthday</label>
                    <br>
                      <div class="col-sm-12">
                        <input type="date" class="form-control" id="date" name="pet_birthday" >
                        <span class="text-danger error-text pet_bloodType_error"></span>
                      </div>
                  </div>

                <div class="form-group">
                  <label for="date" required class="form-label"> Registered Date</label>
                  <br>
                    <div class="col-sm-12">
                      <input type="date" class="form-control" id="date" name="pet_registeredDate" >
                      <span class="text-danger error-text pet_registeredDate_error"></span>
                    </div>
                </div>

                <div class="form-group">
                  <label for="inputType">Type</label>
                    <select id="inputType" class="form-control custom-select" name="pet_type_id">
                      <option selected disabled>Choose pet Type</option>
                      @foreach ($pet_types as $pet_type)
                      <option value="{{ $pet_type->type_id }}">{{  $pet_type->type_name }}</option>
                      @endforeach
                    </select>
                    <span class="text-danger error-text pet_type_id_error"></span>
                </div>

                <div class="form-group">
                      <label for="inputBreed">Breed</label>
                      <select id="inputBreed" class="form-control custom-select" name="pet_breed_id">
                        <option selected disabled>Choose Breed</option>
                        @foreach ($pet_breeds as $pet_breed)
                        <option value="{{ $pet_breed->breed_id }}">{{ $pet_breed->breed_name }}</option>
                      @endforeach
                      </select>
                      <span class="text-danger error-text pet_breed_id_error"></span>
                </div>

                <div class="form-group">
                  <label for="inputCustomer">Customer</label>
                    <select id="inputCustomer" class="form-control custom-select" name="customer_id">
                      <option selected disabled>Choose Customer</option>
                      @foreach ($pet_customers as $owner)
                      <option value="{{ $owner->customer_id }}">{{ $owner->customer_name }}</option>
                      @endforeach
                    </select>
                    <span class="text-danger error-text customer_id_error"></span>
                </div>

                <div class="form-group">
                  <label for="inputClinic">Clinic</label>
                    <select id="inputClinic" class="form-control custom-select" name="clinic_id">
                      <option selected disabled>Choose Clinic</option>
                      @foreach ($pet_clinics as $clinic)
                      <option value="{{ $clinic->clinic_id }}">{{ $clinic->clinic_name }}</option>
                    @endforeach
                    </select>
                    <span class="text-danger error-text clinic_id_error"></span>
                </div>

              <div class="form-group">
                  <label for="inputStatus">Status</label>
                    <select id="inputStatus" class="form-control custom-select" name="pet_isActive">
                      <option selected disabled>is Pet Active?</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                    <span class="text-danger error-text pet_isActive_error"></span>
              </div>

              <div class="form-group">
                <label for="inputdp" > Profile Picture</label>
                <br>
                <input type="file" id="myFile" name="pet_DP">
                <span class="text-danger error-text pet_isActive_error"></span>
              </div>
         </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" value ="submit" class="btn btn-primary">Save Changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
{{-- end add modal  --}}

  {{-- </section> --}}
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>

 
<!-- jQuery -->
<script src="{{asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<!-- <script>

  $('#viewModal').modal('hide');

  $(document).ready(function() {
    $('.btn-sm').click(function(){
      const pet_id = $(this).attr('data-id');
      
      $.ajax({
        url: 'patients_detail/'+pet_id,
        type: 'get',
        data:{
          'pet_id': pet_id
        },
        success:function(data){
          console.log(data);
          $('#pet_name').html(data.pet_name);
        }
      });

    });
  });
</script> -->

  @endsection