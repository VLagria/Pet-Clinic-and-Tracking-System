<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/index/home" class="brand-link">
      <img src="{{asset('vendors/dist/img/MediaoneLogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PET CLINIC ADMIN

      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('vendors/dist/img/rouen.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
          
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

       <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="/admin/index/home" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                   Dashboard
                  </p>
                </a>
              </li>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="/admin/vet/CRUDvet/home" class="nav-link">
                  <i class="nav-icon fas fa-ambulance"></i>
                  <p>
                   Veterinarians
                  </p>
                </a>
              </li>
              

              <li class="nav-item">
                <a href="/admin/pets/CRUDpet" class="nav-link">
                  <i class="nav-icon fas fa-paw"></i>
                  <p>
                   Pets
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/pets/CRUDpettype/home" class="nav-link">
                  <i class="nav-icon fas fa-paw"></i>
                  <p>
                   Pet Type
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/pets/CRUDpetbreed" class="nav-link">
                  <i class="nav-icon fas fa-paw"></i>
                  <p>
                   Pet Breed
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/customer/CRUDcustomers" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                   Customers
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/clinic/CRUDclinic/home" class="nav-link">
                  <i class="nav-icon fas fa-clinic-medical"></i>
                  <p>
                   Clinic
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/users/CRUDusers" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                   Users
                  </p>
                </a>

              </li>
             
  
              <li class="nav-item">
                <a href="{{ route('auth.logout') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt "></i>
                  <p>
                   Logout
                  </p>
                </a>
              </li>    
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>