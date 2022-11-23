@extends('layouts.template')
@section('content')
    
    <div class="w-100 p-5">

        <div class="section-header p-3 mb-3">
            <h4 class="ms-2">
                Publisher Detail
            </h4>
        </div>

        <div class="mt-2 mb-4 d-flex justify-content-center">
            <img src="{{ '/img/publishers/' . $publisher->image }}" alt="" style="height: 400px">
        </div>

        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>
                        Name
                    </th>
                    <td>
                        {{ $publisher->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Address
                    </th>
                    <td>
                        {{ $publisher->address }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Phone
                    </th>
                    <td>
                        {{ $publisher->phone }}
                    </td>
                </tr>
                <tr>
                    <th>
                        E-Mail
                    </th>
                    <td>
                        {{ $publisher->email }}
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    <div class="w-100 d-flex flex-wrap p-5 mt-4" >

        <div class="section-header p-3 mb-3">
            <h4 class="ms-2">
                Books Published by {{ $publisher->name }}
            </h4>
        </div>

        @foreach($publisher->books as $book)
            <div class="card mx-2 my-3">
                <img src="{{ '/img/books/' . $book->image }}" class="card-img-top img-fluid" alt="..." style="height: 200px">
                <div class="card-body" style="height: 180px">
                    <h5 class="card-title text-truncate" data-toggle="tooltip" data-placement="top" title="{{ $book->title }}">
                        {{ $book->title }}
                    </h5>
                    <small style="font-size: .8rem">by</small>
                    <p class="card-text text-truncate" style="font-size: 1.1rem">{{ $book->author }}</p>
                    <a href="/books/{{ $book->id }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        @endforeach

    </div>

@endsection