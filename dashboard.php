<!DOCTYPE html>
<html lang="en">
    
    <?php require 'includes/header.php';?>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require 'includes/sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require 'includes/topbar.php';?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Pending Orders</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                         <a href="purchase.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exclamation-triangle fa-4x text-red-300" style="color: #FF0000;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Finished Orders</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        <a href="production.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clock fa-4x text-red-300"  style="color: #f6c23e;">
                        </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Employees</div>
                      <div class="row no-gutters align-items-center">
                        
                        <div class="col">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                            <a href="production.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas  fa-user fa-4x text-red-300" style="color: #1C46C6;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
        <?php require 'includes/footer.php';?>

  <?php require 'includes/logout.modal.php';?>
        <?php require 'includes/profile.modal.php';?>

<!-- Bootstrap core JavaScript-->
  <script src="required/jquery/jquery.min.js"></script>
  <script src="required/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="required/jquery-easing/jquery.easing.min.js"></script>


  <!-- Page level plugins -->
  <script src="required/chart.js/Chart.min.js"></script>

        
        
        

</body>

</html>