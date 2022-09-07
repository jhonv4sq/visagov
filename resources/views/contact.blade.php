@extends('layouts.app')

@section('content')

    <div class="container text-capitalize">
        <h1>contacto</h1>
        <form action="">
            <div class="mb-3">
                <label for="" class="form-label">correo</label>
                <input type="text" class="form-control" placeholder="example@mail.com">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">mensaje</label>
                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary text-capitalize">enviar</button>
        </form>
    </div>

@endsection