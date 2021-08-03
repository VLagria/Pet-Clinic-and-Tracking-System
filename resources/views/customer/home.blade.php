<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pet Clinic</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{asset('vendors/dist/css/styles.css') }}">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Media One Pet Clinic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Media One Pet Clinic</h1>
                <p class="lead">Your Pet , Our Care </p>
                <a class="btn btn-lg btn-light" href="#">Set Appointment</a>
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                    <p class="fs-2"><b> About This Page</b> </p>
                    </div>
                    <div class="col-lg-8">
                         <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-6">
    <p><i>Providing our patients with the most complete range of services and the highest quality in veterinary care has always been our top priority at MediaOne Clinic</i> </p>
        <br>
        <p class="fs-2"><b> Our Staffs:</b> </p>
        <div class="card card-success">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-6 col-xl-4">

                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/soy.jpg') }}" alt="Dist Photo 1">
                </div>

              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/shayn.jpg') }}" alt="Dist Photo 2">
                 
                </div>

              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">

                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/kang.jpg') }}" alt="Dist Photo 3">
                </div>
                
              </div>
                <div class="col-md-12 col-lg-6 col-xl-4">

                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/rus.jpg') }}" alt="Dist Photo 3">
                </div>
                
              </div>
                <div class="col-md-12 col-lg-6 col-xl-4">

                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/han.jpg') }}" alt="Dist Photo 3">
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
  </aside>
  <!-- /.control-sidebar -->
</div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                    <p class="fs-2"><b> Services we Offer</b> </p>
                      
                    </div>
                </div>
                <div class="card card-success">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-6 col-xl-4">

                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/vet1.jpg') }}" alt="Dist Photo 1">
                </div>

              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/vet2.jpg') }}" alt="Dist Photo 2">
                 
                </div>

              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">

                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('vendors/dist/img/vet4.jpg') }}" alt="Dist Photo 3">
                </div>
                
              </div>
               
                
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                    <p class="fs-2"><b> Contact Us</b> </p>
                    </div>
                </div>
                <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>MediaOne<strong>Pet Clinic</strong></h2>
              <p class="lead mb-5">NHA Bangkal, Ground Floor Cordillera, corner Waling-Waling, Davao City, 8000<br>
                Phone: (082) 315-1908
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
              <label for="inputMessage">Purpose</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send message">
            </div>
          </div>
        </div>
      </div>
            </div>
        </section>
        
  


        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white"><strong>Copyright &copy; 2021-2022 <a href="http://mediaoneph.com">MediaOne.io</a>.</strong> All rights reserved.</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="dist/js/scripts.js"></script>
        <script src="{{asset('vendors/src/js/script.js') }}"></script>

    </body>
</html>


