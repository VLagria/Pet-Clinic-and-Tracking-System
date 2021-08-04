@extends('layoutscustomer.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')

<div class="content-wrapper">

<!-- Main content -->
<section class="content">
 <h4> PETS </h4>
  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row">


        @foreach ($widgetPets as $Pets)
		
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-grey">
              <h3 class="widget-user-username">{{ $Pets->pet_name }}</h3>
              
            </div>
  
            
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link">
                    Gender: <span class="float-right">{{ $Pets->pet_gender }}</span>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link">
                    Birthday:<span class="float-right ">{{ $Pets->pet_birthday }}</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">
                    Blood Type: <span class="float-right ">{{ $Pets->pet_bloodType }}</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link">
                    Date Registered: <span class="float-right">{{ $Pets->pet_registeredDate }}</span>
                  </a>
                </li>
  
                <li class="nav-item">
                  <a class="nav-link">
                    Notes: <span class="float-right ">{{ $Pets->pet_notes }}</span>
                  </a>
                </li>

                
                <li class="nav-item">
                  <a class="nav-link">
                    Status: <span class="float-right ">{{ $Pets->pet_isActive }}</span>
                  </a>
                </li>
          
              </div>
              
          </div>
          <!-- /.widget-user -->
          
        </div>
        @endforeach
        <!-- /.col -->
        
      </div>
      <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
  
          </ul>
        </nav>
      </div>
      <!-- /.card-footer -->
      <!-- /.row -->




@endsection


 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>