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
                        <h1 class="h3 mb-0 text-gray-800">Sales Invoice</h1>
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#purchaseModal">
                            <i class="fas fa-download"></i>
                            Generate Reports
                        </a>

                        <!-- /.container-fluid -->
                    </div>
                    <div class="form-group">
                        <label for="client" class="col-sm-3 control-label">Client's Name</label>
                        </br>
                        <div class="col-5">
                            <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Enter Name..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="client" class="col-sm-3 control-label">Product Name</label>
                        </br>
                        <div class="col-5">
                            <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Enter Product..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="client" class="col-sm-3 control-label">Purchase Order #</label>
                        </br>
                        <div class="col-5">
                            <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Enter PO#..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="client" class="col-sm-3 control-label">Mode of Payment</label>
                        </br>
                        <div class="col-5">
                            <select class="form-control">
                                <option>Cash</option>
                                <option>Credit</option>
                            </select>
                        </div>
                    </div>
    
    <div class="modal-footer">
                        <a class="btn btn-success" href="#">
                            <i class="fas  fa-save"></i>
                            Save</a>
                    </div>
    
    <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>ID</th>
                                                            <th>Client's Name</th>
                                                            <th>Product Name</th>
                                                            <th>Purchase Order #</th>
                                                            <th>Mode of Payment</th>
                                                            <th><center>Action</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>adawda</td>
                                                            <td>Masks</td>
                                                            <td>024</td>
                                                            <td>Cash</td>
                                                            <td>
                                                                <center>
                                                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#updatePurchase">
                                                                        <i class="fas fa-info-circle"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#deleteModal">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>adawda</td>
                                                            <td>Masks</td>
                                                            <td>024</td>
                                                            <td>Credit</td>
                                                            <td>
                                                                <center>
                                                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#updatePurchase">
                                                                        <i class="fas fa-info-circle"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#deleteModal">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>adawda</td>
                                                            <td>Masks</td>
                                                            <td>024</td>
                                                            <td>Cash</td>
                                                            <td>
                                                                <center>
                                                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#updatePurchase">
                                                                        <i class="fas fa-info-circle"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#deleteModal">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Main Content -->

            <?php require 'includes/delete.modal.php';?>
            <?php require 'includes/purchase.modal.php';?>

        </div>
        <!-- End of Content Wrapper -->


        <?php require 'includes/update.purchase.php';?>

    </div>
    <!-- End of Page Wrapper -->

    <?php require 'includes/footer.php';?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require 'includes/logout.modal.php';?>

</body>
<?php require 'includes/scripts.php';?>

</html>
