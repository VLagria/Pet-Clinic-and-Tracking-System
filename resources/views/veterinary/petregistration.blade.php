

    <!-- Main content -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register Pet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

    <form action="" method="POST">
    <div class="col-12">
    <div class="modal-body">
       
    <div class="form-group">
    <label for="inputpetname" class="form-label">Pet Name</label>
    <input type="name" required placeholder="Enter Name" class="form-control" id="inputpetname">
  </div>
  <br>
  <br>
  <div class="col-md-3">
    <label for="inputgender"  class="form-label">Pet Gender</label>
    <br>
    <select id="inputgender" class="form-select">
      <option selected>Choose...</option>
      <option>Male</option>
      <option>FeMale</option>
      
    </select>
  </div>
</div>
  <div class="col-12">
    <br>
   
  <div class="col-12">
    <label for="inputpetnotes"  class="form-label">Pet Notes</label>
    <br>
    <textarea placeholder="Enter Description and Health Conditions" id="inputpetnotes"  name="petnotes" rows="4" cols="50">

    </textarea>
  </div>
  
 
  <div class="col-md-2">
    <label for="inputBloodtype" class="form-label">Pet BloodType</label>
    <input type="text" placeholder="Optional" class="form-control" id="inputBloodtype">
  
    <label for="inputpetrf" required class="form-label">Pet Registered Date</label>
    <input type="date" id="date" name="date">
  </div>

  <div class="col-md-1">
    <label for="inputpettypeid" required class="form-label ">Pet Type </label>
    <input type="text" class="form-control" id="inputpettypeid" hidden>
    <select id="inputpettypeid" class="form-select">
      <option selected>Choose Pet Type </option>
      <option></option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputpettypeid" required  class="form-label ">Pet Breed</label>
    <input type="text" class="form-control" id="inputpettypeid" hidden>
    <select id="inputpetbreed" class="form-select">
      <option selected>Choose Pet Breed </option>
      <option></option>
    </select>
  </div>
  <div class="col-md-1">
    <label for="inputpettypeid" required class="form-label ">Customer </label>
    <input type="text" class="form-control" id="inputpettypeid" hidden>
    <select id="inputpetcustomer" class="form-select">
      <option selected>Choose Customer </option>
      <option></option>
    </select>
  </div>
  <div class="col-md-1">
    <label for="inputpettypeid" required class="form-label "> Clinic </label>
    <input type="text" class="form-control" id="inputpettypeid" hidden>
    <select id="inputpetclinic" class="form-select">
      <option selected>Choose Clinic </option>
      <option></option>
    </select>
  </div>
  <div class="col-md-1">
    <label for="inputpettypeid" required class="form-label ">Status </label>
    <select id="inputState" class="form-select">
      <option selected>is Pet Active?</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>
 
  <div class="col-md-2">
    <label for="inputdp" required class="form-label">Pet Profile Picture</label>
    <form action="/action_page.php">
  <input type="file" id="myFile" name="filename">

</form>
  </div>
  <br>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input"  type="checkbox" id="gridCheck" required/>
      <label class="form-check-label" style="font-family:cursive;  " for="gridCheck">
        Remember me
      </label>
    </div>
  </div>
  <br>
  <div class="col-12">
    <button type="submit" class="btn btn-success">Register Pet</button>
  
    <button type="submit" class="btn btn-danger">Cancel</button>
  </div> </div>
  <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

</form>
           

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Some things just fill your heart without  trying
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="http://mediaoneph.com">MediaOne.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
    <script src="{{ asset('vendors/dist/js/adminlte.min.js') "></script>
</body>
</html>
