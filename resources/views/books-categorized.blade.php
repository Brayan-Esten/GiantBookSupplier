@extends('layouts.template')
@section('content')


<div class="w-100 d-flex flex-wrap p-5" >

        <div class="section-header p-3 mb-3">
            <h4 class="ms-2">
                Book List - {{ $category->name }}
            </h4>
        </div>

        @foreach($data as $d)
            <div class="card mx-2 my-3">
                <img src="{{ '/img/books/' . $d->book->image }}" class="card-img-top img-fluid" alt="..." style="height: 200px">
                <div class="card-body" style="height: 180px">
                    <h5 class="card-title text-truncate" data-toggle="tooltip" data-placement="top" title="{{ $d->book->title }}">
                        {{ $d->book->title }}
                    </h5>
                    <small style="font-size: .8rem">by</small>
                    <p class="card-text text-truncate" style="font-size: 1.1rem">{{ $d->book->author }}</p>
                    <a href="/books/{{ $d->book->id }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        @endforeach
    </div>


@endsection