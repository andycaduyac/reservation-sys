<div>
    @include('livewire.admin.accommodation.create')
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
            <h5>Accommodations
                <a href="" class="btn btn-success btn-md float-right" data-toggle="modal" data-target="#addAccommodationModal">Add New</a>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Price</th>
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
                        @foreach ($accommodations as $type)
                            <tr>
                                <td>{{$type->id}}</td>
                                <td>{{$type->title}}</td>
                                <td>{{$type->price}}</td>
                                <td>{{$type->details}}</td>
                                <td>
                                    {{-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> --}}
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editAccommodationModal" wire:click="edit({{$type->id}})">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteAccommodationModal" wire:click="deleteAccommodation({{$type->id}})"><i class="fa fa-trash"></i></button>
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
            $('#addAccommodationModal').modal('hide');
            $('#editAccommodationModal').modal('hide');
            $('#deleteAccommodationModal').modal('hide');
        });
    </script>
@endpush
