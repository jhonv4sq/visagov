@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Libros</h1>

        <a href="{{ route('books.create') }}" class="btn btn-primary">Crear</a>

        <table class="table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titulo</th>
                  <th scope="col">Autor</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td class="align-items-center">{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td class="d-flex">
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary me-1" role="button">Editar</a>
                        <form method="POST" action="{{ route('books.destroy', $book->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>

    </div>
@endsection