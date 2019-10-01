<!-- walkinsModal -->
<div class="modal fade" id="walkinsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Walk-Ins</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form class="form-horizontal" method="POST" action="purchase_add.php">
                        <div class="form-group">
                            <label for="datepicker_add" class="control-label">Date</label>
                            <label style="display: inline-block;">
                                <div class="block">
                                    <input type="text" class="form-control datepicker" id="datepicker_add" name="date" required>
                                </div>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-3 control-label">Client's Name</label>
                            </br>
                            <div class="col-12">
                                <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Enter Name..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-3 control-label">Client's Address</label>
                            </br>
                            <div class="col-12">
                                <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Enter Address..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-3 control-label">Product</label>
                            </br>
                            <div class="col-12">
                                <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Product Name..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-3 control-label">Quantity</label>
                            </br>
                            <div class="col-12">
                                <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Number of Items..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-3 control-label">Unit Price</label>
                            </br>
                            <div class="col-12">
                                <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Price..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-3 control-label">Total Amount</label>
                            </br>
                            <div class="col-12">
                                <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Total..." required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="index.php">Save
                        <i class="fas  fa-save"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
