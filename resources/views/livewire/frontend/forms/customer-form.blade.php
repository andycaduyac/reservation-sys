<div>
    <div wire:ignore.self class="modal fade" id="customerModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Customer Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">First Name</label>
                    <input class="form-control" type="text" wire:model.defer="first_name">
                    @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label for="">Last Name</label>
                    <input class="form-control" type="text" wire:model.defer="last_name">
                    @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input class="form-control" type="email" wire:model.defer="email">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <input class="form-control" type="number" wire:model.defer="phone">
                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button wire:click="createBooking" type="button" class="btn btn-primary">Book Now</button>
            </div>
          </div>
        </div>
      </div>
</div>
