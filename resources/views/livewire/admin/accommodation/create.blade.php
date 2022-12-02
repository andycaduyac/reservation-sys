<div>
    {{-- <div class="card">
        <div class="card-body">
                <form wire:submit.prevent="submit">
                    @csrf
                    <div class="row">
                        <div class="col col-md-6 mb-3">
                            <label for="">Title</label>
                            <input class="form-control" type="text" wire:model="title" required>
                        </div>

                        <div class="col col-md-6 mb-3">
                            <label for="">Price</label>
                            <input class="form-control" type="number" wire:model="price" required>
                        </div>
                        <div class="col col-md-6 mb-3">
                            <label for="">Details</label>
                            <input class="form-control" type="text" wire:model="details">
                        </div>
                        <div class="col col-md-12">
                            <button class="btn btn-primary btn-md float-right" type="submit">Add Accommodation</button>
                        </div>


                    </div>

                </form>

        </div>
    </div> --}}
    <div wire:ignore.self class="modal fade" id="addAccommodationModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Accommodation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="submit">
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
                        {{-- <div class="form-group mb-3">
                            <label for="image">Select Image</label>
                            <input class="form-control" type="file" wire:model.defer="image" style="padding: 3px 5px;">
                            @error('image') <small class="text-danger">{{ $message }}</small> @enderror

                            <div wire:loading wire:target="image" wire:key="image">
                                <i class="fas fa-spinner mt-2 ms-2"></i>
                                Uploading
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" alt="" width="100" class="mt-2">
                                @endif
                            </div>
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
