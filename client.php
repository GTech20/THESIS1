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
                        <h1 class="h3 mb-0 text-gray-800">Client</h1>
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#clientModal">
                            <i class="fas fa-plus"></i>
                            Add Clients
                        </a>

                    </div>

                    <div class="container-fluid">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">List of Clients</h6>
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
                                                            <th>ID</th>
                                                            <th>Date</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Address</th>
                                                            <th>Email</th>
                                                            <th>Contact No.</th>
                                                            <th>
                                                                <center>Action</center>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>1/1/0000</td>
                                                            <td>Tiger</td>
                                                            <td>Nixon</td>
                                                            <td>adadwaawfwfwadawdasdwadad</td>
                                                            <td>adwodn@gmail.com</td>
                                                            <td>+1039135081375</td>
                                                            <td>
                                                                <center>
                                                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#updateClient">
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
                                                            <td>1/1/0000</td>
                                                            <td>Tiger</td>
                                                            <td>Nixon</td>
                                                            <td>adadwaawfwfwadawdasdwadad</td>
                                                            <td>adwodn@gmail.com</td>
                                                            <td>+1039135081375</td>
                                                            <td>
                                                                <center>
                                                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#updateClient">
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
                                                            <td>1/1/0000</td>
                                                            <td>Tiger</td>
                                                            <td>Nixon</td>
                                                            <td>adadwaawfwfwadawdasdwadad</td>
                                                            <td>adwodn@gmail.com</td>
                                                            <td>+1039135081375</td>
                                                            <td>
                                                                <center>
                                                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#updateClient">
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
                                                            <td>1/1/0000</td>
                                                            <td>Tiger</td>
                                                            <td>Nixon</td>
                                                            <td>adadwaawfwfwadawdasdwadad</td>
                                                            <td>adwodn@gmail.com</td>
                                                            <td>+1039135081375</td>
                                                            <td>
                                                                <center>
                                                                    <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#updateClient">
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

            <?php require 'includes/delete.modal.php';?>
            <?php require 'includes/client.modal.php';?>

        </div>
        <!-- End of Content Wrapper -->

        <?php require 'includes/update.client.php';?>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require 'includes/logout.modal.php';?>

    <?php require 'includes/footer.php';?>

</body>
<?php require 'includes/scripts.php';?>

</html>
