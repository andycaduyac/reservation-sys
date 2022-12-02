@extends('frontend.base')
@section('content')
<div class="container-fluid d-flex justify-content-center">
    <div class="row mx-5 my-3">
            @foreach ($availables as $item)
                <div class="card mx-3 my-3" style="min-width: 40rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-md-4">
                                <img src="" alt="">
                            </div>
                            <div class="col">
                                <h4 class="card-title">{{$item->title}}</h4>
                                <p class="card-subtitle">{{$item->details}}</p>
                                <hr>
                                <p class="card-subtitle">₱{{$item->price}}</p>
                                <button class="btn btn-primary float-end">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


    </div>

</div>
@endsection
