@extends('layouts.template')
@section('content')

    <div class="w-100 d-flex flex-wrap p-5" >

        <div class="section-header p-3 mb-3">
            <h4 class="ms-2">
                Publisher List
            </h4>
        </div>

        @foreach($publishers as $publisher)
            <div class="card mx-2 my-3">
                <img src="{{ '/img/publishers/' . $publisher->image }}" class="card-img-top img-fluid" alt="..." style="height: 200px">
                <div class="card-body" style="height: 30vh">
                    <h5 class="card-title text-truncate" data-toggle="tooltip" data-placement="top" title="{{ $publisher->name }}">
                        {{ $publisher->name }}
                    </h5>
                    <p class="card-text text-truncate" style="font-size: 1.1rem" data-toggle="tooltip" data-placement="top" 
                    title="{{ $publisher->address }}">
                        {{ $publisher->address }}
                    </p>
                    <a href="/publishers/{{ $publisher->id }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection