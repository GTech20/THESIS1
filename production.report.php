<!DOCTYPE html>
<html lang="en">

<?php require 'includes/header.php';?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require 'includes/sidebar.php';?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php require 'includes/topbar.php';?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Production Report</h1>
                    </div>
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#purchaseModal">
                            <i class="fas fa-link"></i>
                            Export to Excel
                        </a>
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#purchaseModal">
                            <i class="fas fa-link"></i>
                            Export to PDF
                        </a>

                    <div class="row">
                        <div class="card-header py-6">
                            <h6 class="m-1 font-weight-bold text-success">List of Items</h6>
                        </div>
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>January</th>
                                        <th>February</th>
                                        <th>March</th>
                                        <th>April</th>
                                        <th>May</th>
                                        <th>June</th>
                                        <th>July</th>
                                        <th>August</th>
                                        <th>September</th>
                                        <th>October</th>
                                        <th>November</th>
                                        <th>December</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>Trophies</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>

                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>Mask Keychain</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>

                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <th>Corporate Giveaways</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>

                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <th>Mask Trophy</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>-</th>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>


                </div>


            </div>
            <?php require 'includes/footer.php';?>
        </div>
        <?php require 'includes/logout.modal.php';?>
        <?php require 'includes/scripts.php';?>


</body>



</html>
