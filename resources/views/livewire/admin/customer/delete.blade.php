<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Delete Customer</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form wire:submit.prevent="destroy">
                <div class="modal-body">
                    <h4>Are you sure you want to delete this data?</h4>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Yes. Delete</button>
                </div>
            </form>

          </div>
        </div>
    </div>
</div>
