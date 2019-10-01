<!-- profileModal -->
  <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                  <form class="form-horizontal" method="POST" action="purchase_add.php">
                      <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-12"> 
                        <input type="text" class="form-control datepicker" id="datepicker_add" name="date" required>
                      
                    </div>
                </div>
          		  <div class="form-group">
                  	<label for="client" class="col-sm-3 control-label">Client's Name</label>
                      </br>
                  	<div class="col-12">
                    	<input type="text" class="form-control" id="client_name" name="client" placeholder="Enter Name..." required>
                  	</div>
                </div>
                </form>
          </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Save</a>
        </div>
      </div>
    </div>
  </div>