{{-- <div class="container mt-5" style="width: 35rem;">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-3">Reservation Dates</h5>
            <div class="mb-3">
                <input type="date" name="book_date" id="picker" class="form-control" placeholder="Select Date" required>
            </div>
            <a href="/available-accommodations" class="btn btn-primary btn-md float-end">Check Availability</a>

        </div>
    </div>
</div>

@push('script')


    <script type="text/javascript">
        $(document).ready(function(){
            $("#picker").on('blur', function(){
                var _book_date=$(this).val();
                console.log(_book_date);

            });
        });

    </script>
@endpush --}}
@extends('frontend.base')

@section('content')
    <div class="container-fluid">
        <livewire:frontend.forms.date-form />
    </div>
@endsection
