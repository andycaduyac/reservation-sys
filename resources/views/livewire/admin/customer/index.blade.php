<div>
    @include('livewire.admin.customer.create')
    @include('livewire.admin.customer.delete')
    @include('livewire.admin.customer.edit')

    <div class="container">
        <div class="col col-md-12">
            @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header py-3">
            <h5>Customers
                <a href="" class="btn btn-success btn-md float-right" data-toggle="modal" data-target="#addCustomerModal">Add New</a>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            {{-- <th>Booked ID</th> --}}
                            <th>Date</th>
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
                        @foreach ($customers as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->first_name}} {{$c->last_name}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->phone}}</td>
                                {{-- <td>{{$c->booking_id}}</td> --}}
                                <td>{{$c->bookings->book_date}}</td>
                                <td>{{$c->bookings->accommodation->title}}</td>
                                <td>{{$c->bookings->accommodation->details}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editCustomerModal" wire:click="edit({{$c->id}})">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCustomerModal" wire:click="deleteCustomer({{$c->id}})"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addCustomerModal').modal('hide');
            $('#editCustomerModal').modal('hide');
            $('#deleteCustomerModal').modal('hide');
        });
    </script>
@endpush
{{-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> --}}
