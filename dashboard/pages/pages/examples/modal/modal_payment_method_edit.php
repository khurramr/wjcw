<!-- Modal -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_editTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Payment Method</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                <label for="seriveProvidertype" style="float:left">Service Provider Type</label>
                <input type="hidden" class="form-control" id="row_id">
                <input type="text" class="form-control" id="spt_update">
    <!--            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
              </div>

              <div class="form-group">
                <label for="seriveProvider" style="float:left">Service Provider Name</label>
                <input type="text" class="form-control" id="spn_update">
              </div>

              <div class="form-group">
                <label for="accountno" style="float:left">Account #</label>
                <input type="text" class="form-control" id="acc_update">
              </div>
              <div class="form-group">
                <label for="accountno" style="float:left">Remarks</label>
                  <textarea type="text" class="form-control" id="remark_update"></textarea>
              </div>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save_edit" data-dismiss="modal">Save changes</button>
      </div>
      <div class="modal-footer">
        <small id="saved" class="form-text text-success" style="display:none">Edited and Saved Successfully</small>
      </div>
    </div>
  </div>
</div>