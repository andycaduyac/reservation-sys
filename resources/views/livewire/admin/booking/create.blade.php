<div>
    <div wire:ignore.self class="modal fade" id="addBookingModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label text-dark" for="date">Date</label>
                            <input type="text" name="book_date" id="picker" class="form-control" placeholder="Select Date" required>
                        </div>


                        <div class="mb-3">
                            <label for="">Availables</label>
                            <select name="type" wire:model.defer="accommodation_id" class="form-control">
                                <option hidden="true">--- Select Type ---</option>
                                <option selected disabled>Select Type</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->details }}</option>
                                @endforeach
                            </select>
                        </div>
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

@push('script')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $('#picker').flatpickr({
            enableTime: false,
            minDate: new Date(),
            dateFormat: 'M-d-Y',
            onChange: function(selectedDates, dateStr, instance){
                    @this.selected(selectedDates)
            }
        })
    </script>
@endpush
