@extends('layouts.app')

@section('content')

    <div class="container text-capitalize">
        <h1>contacto</h1>
        <form method="POST" action="{{ route('message.store') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">correo</label>
                <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="example@mail.com">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">mensaje</label>
                <textarea id="text" name="text" id="" cols="30" rows="5" max="10" class="form-control @error('text') is-invalid @enderror">{{ old('text') }}</textarea>
                @error('text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary text-capitalize">enviar</button>
        </form>
    </div>

@endsection