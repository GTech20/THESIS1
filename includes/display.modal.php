<!-- purchaseModal -->
<div class="modal fade" id="displayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Display Item</h5>
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
                            <label for="client" class="col-sm-3 control-label">Item Name</label>
                            </br>
                            <div class="col-12">
                                <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Enter Name..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-3 control-label">Item Type</label>
                            </br>
                            <div class="col-12">
                                <select class="form-control col-sm-5" style="color: black;" id="client_payment" name="payment" required>
                                    <option>Trophies</option>
                                    <option>Giveaways</option>
                                    <option>Keychains</option>
                                    <option>Birthday giveaways</option>
                                    <option>Masks keychain</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-3 control-label">Quantity</label>
                            </br>
                            <div class="col-12">
                                <input type="text" class="form-control" style="color: black;" id="client_name" name="client" placeholder="Enter Name..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-3 control-label">Status</label>
                            </br>
                            <div class="col-12">
                                <select class="form-control col-sm-5" style="color: black;" id="client_payment" name="payment" required>
                                    <option>Instock</option>
                                    <option>Out of Stock</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="index.php">
                        <i class="fas  fa-save"></i>
                        Save</a>
                </div>
            </div>
        </div>
    </div>
