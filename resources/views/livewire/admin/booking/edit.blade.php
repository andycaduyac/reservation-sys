<div>
    <div wire:ignore.self class="modal fade" id="editBookingModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" wire:click='closeModal' aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="update">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="">Type</label>
                            {{-- <input class="form-control" type="text" wire:model.defer="title"> --}}
                            <select name="type" wire:model.defer="title" class="form-control">
                                <option hidden="true">--- Select Type ---</option>
                                <option selected disabled>Select Type</option>
                                <option value="Cottage">Cottage</option>
                                <option value="Table">Table</option>
                                <option value="Room">Room</option>
                                <option value="Function Hall">Function Hall</option>
                            </select>
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Price</label>
                            <input class="form-control" type="number" wire:model.defer="price">
                            @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Details</label>
                            <input class="form-control" type="text" wire:model.defer="details">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
