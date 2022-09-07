@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-capitalize">{{ __('books') }}</h1>

        <a href="{{ route('books.create') }}" class="btn btn-primary my-3 text-capitalize">{{ __('create') }}</a>

        <table class="table">
            <thead class="text-capitalize">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('title') }}</th>
                    <th scope="col">{{ __('author') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td><a href="{{ route('books.show', $book->id) }}" class="nav-link">{{ $book->title }}</a></td>
                    <td><a href="{{ route('books.show', $book->id) }}" class="nav-link">{{ $book->author }}</a></td>
                    <td class="d-flex text-capitalize">
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary me-1" role="button">{{ __('edit') }}</a>
                        <form method="POST" action="{{ route('books.destroy', $book->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-capitalize">
                                {{ __('delete') }}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection