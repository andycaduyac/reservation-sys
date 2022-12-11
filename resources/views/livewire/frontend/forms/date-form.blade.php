<div>
    @include('livewire.frontend.forms.customer-form')
    <div class="container-fluid">

        <h1 class="mt-5 d-flex justify-content-center text-white" style="font-size: 3rem;">Jyra's Resort</h1>
        <p class="d-flex justify-content-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        </p>
    </div>
    <div class="container mt-5" style="width: 35rem;">
        <div class="card">
                <div class="card-body">
                <h5 class="card-title mb-3">Reservation Dates</h5>
                <div class="mb-3">
                    <input type="text" id="picker" class="form-control" placeholder="Select Date" required>
                    @if (session('message'))
                    <p class="text-danger pt-2" id="msg">{{session('message')}}</p>
                    @endif
                </div>
                    <button wire:click="available" class="btn btn-primary float-right my-2">Check Availables</button>
                </div>
        </div>
        <div class="container bg-success mx-2 my-2">
            @if (session('emailMessage'))
        <p class="text-white pt-2" id="msg">{{session('emailMessage')}}</p>
        @endif
        </div>

    </div>

    <div class="d-flex justify-content-center mt-3">
        <div wire:loading>
            <i class="fas fa-spinner mt-2 ms-2"></i>
            Checking...
        </div>
    </div>
    <div class="container-fluid mt-5">
            @if (isset($accommodation))
                @foreach ($accommodation as $c)
                        <div class="row">
                            <div class="col">
                                    <div class="card my-3 mx-3">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="container    mx-2 my-2">
                                                    <img src="{{asset('storage')}}/{{$c->image}}" width="220px" alt="">

                                                </div>

                                            </div>

                                           <div class="col">
                                                <div class="card-body">
                                                    <h5>{{ $c->title }}</h5>
                                                    <p class="card-subtitle">{{ $c->details }}</p>
                                                    <p>Rate: ₱{{ $c->price }}</p>
                                                    <button type="button" class="btn btn-primary float-right mb-2" data-toggle="modal" data-target="#customerModalCenter" wire:click="openModal({{$c->id}})">
                                                        Book Now
                                                    </button>


                                                </div>
                                           </div>
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
<script>
    setTimeout(function() {
        var ms = document.getElementById("msg");
        ms.parentNode.removeChild(msg);
    }, 1500);
</script>
@endpush
