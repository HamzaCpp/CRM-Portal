<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="<?php echo e(asset('frontend/css/style.min.css')); ?>" rel="stylesheet">
    <title>Client</title>
</head>
<body>
      <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
      data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
          <nav class="navbar top-navbar navbar-expand-md navbar-dark">
              <div class="navbar-header" data-logobg="skin6">
                  <!-- ============================================================== -->
                  <!-- Logo -->
                  <!-- ============================================================== -->
                  <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">
                      <!-- Logo icon -->
                      <b class="logo-icon">
                          <!-- Dark Logo icon -->
                          <img src="<?php echo e(asset('frontend/plugins/images/logo-icon.png')); ?>" alt="homepage" />
                      </b>
                      <!--End Logo icon -->
                      <!-- Logo text -->
                      <span class="logo-text">
                          <!-- dark Logo text -->
                          <img src="<?php echo e(asset('frontend/plugins/images/logo-text.png')); ?>" alt="homepage" />
                      </span>
                  </a>
                  <!-- ============================================================== -->
                  <!-- End Logo -->
                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- toggle and nav items -->
                  <!-- ============================================================== -->
                  <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                      href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
              </div>
              <!-- ============================================================== -->
              <!-- End Logo -->
              <!-- ============================================================== -->
              <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                  <ul class="navbar-nav d-none d-md-block d-lg-none">
                      <li class="nav-item">
                          <a class="nav-toggler nav-link waves-effect waves-light text-white"
                              href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                      </li>
                  </ul>
                  <!-- ============================================================== -->
                  <!-- Right side toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav ms-auto d-flex align-items-center">
                      <li>
                          <a class="profile-pic" href="#">
                              <img src="<?php echo e(asset('frontend/plugins/images/users/varun.jpg')); ?>" alt="user-img" width="36"
                                  class="img-circle"><span class="text-white font-medium">Steave</span></a>
                      </li>
                      <!-- ============================================================== -->
                      <!-- User profile and search -->
                      <!-- ============================================================== -->
                  </ul>
              </div>
          </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
          <!-- Sidebar scroll-->
          <div class="scroll-sidebar">
              <!-- Sidebar navigation-->
              <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                      <!-- User Profile-->
                      <li class="sidebar-item pt-2">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('dashboard')); ?>"
                              aria-expanded="false">
                              <i class="far fa-clock" aria-hidden="true"></i>
                              <span class="hide-menu">Dashboard</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('client')); ?>"
                              aria-expanded="false">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="hide-menu">Clients</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('project')); ?>"
                            aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Projects</span>
                        </a>
                    </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('profile')); ?>"
                              aria-expanded="false">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="hide-menu">Profile</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('font')); ?>"
                              aria-expanded="false">
                              <i class="fa fa-font" aria-hidden="true"></i>
                              <span class="hide-menu">Icon</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('map')); ?>"
                              aria-expanded="false">
                              <i class="fa fa-globe" aria-hidden="true"></i>
                              <span class="hide-menu">Google Map</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('blank')); ?>"
                              aria-expanded="false">
                              <i class="fa fa-columns" aria-hidden="true"></i>
                              <span class="hide-menu">Blank Page</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html"
                              aria-expanded="false">
                              <i class="fa fa-info-circle" aria-hidden="true"></i>
                              <span class="hide-menu">Error 404</span>
                          </a>
                      </li>
                      <li class="text-center p-20 upgrade-btn">
                          <a href="https://www.wrappixel.com/templates/ampleadmin/"
                              class="btn d-grid btn-danger text-white" target="_blank">
                              Upgrade to Pro</a>
                      </li>
                  </ul>

              </nav>
              <!-- End Sidebar navigation -->
          </div>
          <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
          <!-- ============================================================== -->
          <!-- Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          <div class="page-breadcrumb bg-white">
              <div class="row align-items-center">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  
                    <a class="nav-link active btn btn-primary ms-10" aria-current="page" href="<?php echo e(route('create')); ?>">Create</a>
                  </div>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- ============================================================== -->
          <!-- End Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Container fluid  -->
          <!-- ============================================================== -->
          <div class="container-fluid">
              <!-- ============================================================== -->
              <!-- Start Page Content -->
              <!-- ============================================================== -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
    </nav>

            <div class='col-sm-6'>
                <table class="table table-hover">
                    <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Company</th>
                          <th scope="col">VAT</th>
                          <th scope="col">Address</th>
                          <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($client->id); ?></th>
                            <td><?php echo e($client->company); ?></td>
                            <td><?php echo e($client->VAT); ?></td>
                            <td><?php echo e($client->address); ?></td>
                            <td><a href=<?php echo e(url('edit',$client->id)); ?> class='btn btn-info'>Edit</a></td>
                            <td><a href=<?php echo e(url('delete',$client->id)); ?> class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<script src="<?php echo e(asset('frontend/bootstrap/dist/js/bootstrap.min.js')); ?>" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\crm\resources\views/frontend/client/client.blade.php ENDPATH**/ ?>