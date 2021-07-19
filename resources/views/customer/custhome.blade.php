@extends('layoutscustomer.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



@section('content')



<div class="content-wrapper">


    
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{asset('vendors/dist/img/cust1.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <p class="card-text text-grey pb-2 pt-1">Never believe that animals suffer less than humans. Pain is the same for them that it is for us. Even worse, because they cannot help themselves.</p>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2">
            <img class="card-img-top" src="{{asset('vendors/dist/img/cust2.jpg') }}" alt="Dist Photo 2">
            <div class="card-img-overlay d-flex flex-column justify-content-center">
  
        
            
          </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2">
            <img class="card-img-top" src="{{asset('vendors/dist/img/cust3.jpg') }}" alt="Dist Photo 3">
            <div class="card-img-overlay">
              <p class="card-text pb-1 pt-1 text-white">
                If having a soul means being able to <br>
                feel love and loyalty and gratitude, then <br>
                animals are better off than a lot of humans. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <img src="{{asset('vendors/dist/img/icondoctor.png') }}">

            <div class="info-box-content">
              <span class="info-box-number">Emergency Services</span>
              <span class="info-box-text">We are fully prepared for</span>
              <span class="info-box-text">any medical emergency </span>
              <span class="info-box-text">your pet may encounter</span>
            </div>
            <!-- /.info-box-content -->
          </div>

          
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="info-box">
           
            <img src="{{asset('vendors/dist/img/petpet.png') }}">
            <div class="info-box-content">
              <span class="info-box-number">Pet wellness</span>
              <span class="info-box-text">Regular wellness exams  </span>
              <span class="info-box-text">keep your pet healthy and  </span>
              <span class="info-box-text">prevent future illness</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
           
            <img src="{{asset('vendors/dist/img/vaccinations.png') }}">
            <div class="info-box-content">
              <span class="info-box-number">Vaccination</span>
              <span class="info-box-text">Vaccines help prevent </span>
              <span class="info-box-text">pet diseases.</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">  
          <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-dog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Pet Grooming</b></span>
              <span class="info-box-text">Grooming packages for dogs</span>
              <span class="info-box-text">and cats,and in-house pet</span>
              <span class="info-box-text">store for all your pet care needs.</span>
              
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->




@endsection


 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>