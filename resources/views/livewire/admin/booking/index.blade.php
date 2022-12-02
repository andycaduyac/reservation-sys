<div>
    @include('livewire.admin.booking.create')
    @include('livewire.admin.accommodation.delete')
    @include('livewire.admin.accommodation.edit')

    <div class="container">
        <div class="col col-md-12">
            @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header py-3">
            <h5>Bookings
                <a href="" class="btn btn-success btn-md float-right" data-toggle="modal" data-target="#addBookingModal">Add New</a>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Booked ID</th>
                            <th>Type</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        {{-- <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Details</th>

                                <th>Action</th>
                            </tr>
                        </tfoot> --}}

                    <tbody>
                        @foreach ($bookings as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->book_date}}</td>
                                <td>{{$book->accommodation_id}}</td>
                                <td>{{$book->accommodation->title}}</td>
                                <td>{{$book->accommodation->details}}</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editAccommodationModal" wire:click="edit({{$book->id}})">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteAccommodationModal" wire:click="deleteBooking({{$book->id}})"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
