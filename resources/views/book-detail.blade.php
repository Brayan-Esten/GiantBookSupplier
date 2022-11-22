@extends('layouts.template')
@section('content')

    <div class="w-100 p-5">

        <div class="section-header p-3 mb-3">
            <h4 class="ms-2">
                Book Detail
            </h4>
        </div>

        <div class="mt-2 mb-4 d-flex justify-content-center">
            <img src="{{ '/img/books/' . $book->image }}" alt="" style="height: 400px">
        </div>

        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>
                        Title
                    </th>
                    <td>
                        {{ $book->title }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Author
                    </th>
                    <td>
                        {{ $book->author }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Publisher
                    </th>
                    <td>
                        {{ $book->publisher->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Year
                    </th>
                    <td>
                        {{ $book->year }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Category
                    </th>
                    <td>
                        @foreach($book->categories as $category)
                            @if(!$loop->last)
                                {{ $category->name . ', ' }}
                            @else
                                {{ $category->name }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>
                        Synopsis
                    </th>
                    <td>
                        {{ $book->synopsis }}
                    </td>
                </tr>
            </tbody>
        </table>

    </div>


@endsection