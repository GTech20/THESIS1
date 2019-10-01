<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jojo Vito Designs Gallery</title>

    <!-- Custom fonts for this template-->
    <link href="required/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">

    <!-- Custom styles for this template-->
    <link href="css/admin.min.css" rel="stylesheet">
    <link href="required/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

</head>

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
                        <h1 class="h3 mb-0 text-gray-800">Walk-Ins</h1>
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#walkinsModal">
                            <i class="fas fa-plus"></i>
                            Add Order
                        </a>

                    </div>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Transactions</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="dataTable_length">
                                                    <label style="display:inline-flex;">Show
                                                        <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>entries
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="dataTable_filter" class="dataTables_filter">
                                                    <label style="display:inline-flex;">Search:
                                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" aria-sort="descending" style="width: 50px;">ID</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">Client Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Address</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 35px;">Product</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 45px;">Qty</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 45px;">U_Price</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 45px;">Total Amt</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 45px;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                            <td>
                                                                <center>
                                                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#purchaseModal">
                                                                        <i class="fas fa-info-circle"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-danger btn-circle">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                                    Showing 1 to 10 of 57 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                        </li>
                                                        <li class="paginate_button page-item active">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                        </li>
                                                        <li class="paginate_button page-item ">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                        </li>
                                                        <li class="paginate_button page-item next" id="dataTable_next">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Main Content -->

            <?php require 'includes/footer.php';?>
            <?php require 'includes/walkins.modal.php';?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require 'includes/logout.modal.php';?>

    <?php require 'includes/scripts.php';?>
    <!-- Core plugin JavaScript-->
    <script src="required/jquery-easing/jquery.easing.min.js"></script>




</body>

</html>
