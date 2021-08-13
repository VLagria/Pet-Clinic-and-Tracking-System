@extends('layoutscustomer.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> @section('content') <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <h4> PETS </h4>
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                @foreach ($petinfo as $info)
                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            
                            <div class="widget-user-header bg-grey">
                                <h1 class="widget-user-username">{{$info->pet_name}}</h1>
                            </div>
                             
                            

                            <div class="card-footer p-0">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"> Name: <span class="float-right">{{$info->pet_name}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"> Birthday: <span class="float-right ">{{$info->pet_birthday}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"> Gender: <span class="float-right ">{{$info->pet_gender }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"> Bloodtype: <span class="float-right ">{{$info->pet_bloodType}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"> Date Registered: <span class="float-right">{{$info->pet_registeredDate}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"> Notes: <span class="float-right ">{{$info->pet_notes}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                    <label for="inputStatus">Status</label>
                                      <select id="pet_isActive" class="form-control custom-select" name="pet_isActive">
                                        @if($info->pet_isActive=="1")
                                        <option value="1"selected>Active</option>
                                        <option value="2">InActive</option>
                                        @elseif ($info->pet_isActive=="2")
                                        <option value="1">Active</option>
                                        <option value="2"selected>InActive</option>
                                        @endif
                                        </select>
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
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- /.card-footer -->
                <!-- /.row --> @endsection
                <!-- jQuery -->
                <script src="../../plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap 4 -->
                <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- AdminLTE App -->
                <script src="../../dist/js/adminlte.min.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="../../dist/js/demo.js"></script>
                </body>
                </html>