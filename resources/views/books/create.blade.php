@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-capitalize">

                    <div class="card-header text-center fs-4 fw-bold">
                        {{ __('add book') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('books.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="mb-2 fw-bold">{{ __('title') }}</label>
                                <div>
                                    <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" autofocus>
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
                                    <input id="author" name="author" type="text" class="form-control @error('author') is-invalid @enderror" value="{{ old('author') }}">
                                    @error('author')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mx-1">
                                <button class="btn btn-primary text-capitalize">
                                    {{ __('add') }}
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection