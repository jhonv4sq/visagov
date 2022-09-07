@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-capitalize">

                    <div class="card-header text-center fs-4 fw-bold">
                        {{ __('edit book') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('books.update', $book->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="mb-2 fw-bold">{{ __('title') }}</label>
                                <div>
                                    <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $book->title }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="author" class="mb-2 fw-bold">{{ __("author's name") }}</label>
                                <div>
                                    <input id="author" name="author" type="text" class="form-control @error('author') is-invalid @enderror" value="{{ old('author') ?? $book->author }}">
                                    @error('author')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mx-1">
                                <button class="btn btn-primary text-capitalize">
                                    {{ __('update') }}
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection