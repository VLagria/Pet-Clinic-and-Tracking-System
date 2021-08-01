@extends('layoutsadmin.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> @section('content') @csrf <div class="content-wrapper">
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
  {{-- <a class="btn btn-success btn-sm " data-toggle="modal" data-target="#addModal" style="margin-left: 10px">
    <i class="fas fa-save"></i> Add Customer </a>
    <br> --}}
    <br>
    
   <form action="{{ route('vet.custsearch') }}" method="get">
  <div class="input-group" style="width: 400px; margin-left: 500px" >
    <input type="search" class="form-control rounded" placeholder="Search...." aria-label="Search"
  name="custsearch" style="width: 200px;"/> 
  <button type="submit" class="btn btn-outline-primary">search</button><br>
  </div>
</form>
<a class="btn btn-success btn-sm" style="margin-left: 20px" href="/admin/pets/CRUDaddtype">
  <i class="fas fa-user"></i> Add Pet Type</a>
  <br>
  <br>

<!-- Default box -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Pets</h3>
  
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-striped table-valign-middle">
        <thead>
        <tr>
  
          <th>ID</th>
          <th>Name</th>
         
            
        <th style="width: 12%" class="text-center">
                  Action
                </th>
          
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>ID</td>

          <td>
            
            Vincent
       
            <td class="project-actions">
              <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <a class="btn btn-danger btn-sm" >
                  <i class="fas fa-trash">
                  </i>
                  Delete
              </a>
          </td> 
        
        </tbody>
  
        
      </table>
      
    </div>
  </div>
  <!-- /.card -->
  


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection