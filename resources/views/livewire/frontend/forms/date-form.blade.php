<div>
    @include('livewire.frontend.forms.customer-form')

    <div class="container mt-5" style="width: 35rem;">

        <div class="card">
                <div class="card-body">
                <h5 class="card-title mb-3">Reservation Dates</h5>
                <div class="mb-3">
                    <input type="text" id="picker" class="form-control" placeholder="Select Date" required>
                    @if (session('message'))
                    <p class="text-danger pt-2">{{session('message')}}</p>
                    @endif
                </div>
                    <button wire:click="available" class="btn btn-primary float-right my-2">Check Availables</button>
                </div>
        </div>
    </div>

    <div class="container-fluid">
            @if (isset($accommodation))
                @foreach ($accommodation as $c)
                        <div class="row">
                            <div class="col">
                                <div class="card my-3 mx-3">

                                    <div class="card-body">
                                        <h5>{{ $c->title }}</h5>
                                        <p class="card-subtitle">{{ $c->details }}</p>
                                        <p>Rate: {{ $c->price }}</p>
                                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#customerModalCenter" wire:click="openModal({{$c->id}})">
                                            Book Now
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            @endif

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

<script>
    window.addEventListener('close-modal', event => {
        $('#customerFormModal').modal('hide');
    });
</script>
@endpush
