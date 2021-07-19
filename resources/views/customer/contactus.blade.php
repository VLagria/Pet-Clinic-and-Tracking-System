@extends('layoutscustomer.app')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')

<!-- Main content -->
<section class="content">
    <div class="content-wrapper">
    <!-- Default box -->
    <div class="card">
      <div class="card-body row">
        <div class="col-5 text-center d-flex align-items-center justify-content-center">
          <div class="">

            <img src="{{asset('vendors/dist/img/MediaoneLogo.png') }}">
            <p class="lead mb-5">Door A6, RES Building, Phase 3, corner mt apo st., Central park, NHA Bangkal Main Rd, Davao City, 8000<br>
              Phone: 09123097253
            </p>
          </div>
        </div>
        <div class="col-7">
          <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" id="inputName" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputEmail">E-Mail</label>
            <input type="email" id="inputEmail" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputSubject">Subject</label>
            <input type="text" id="inputSubject" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea id="inputMessage" class="form-control" rows="4"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Send message">
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

  @endsection