@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card text-capitalize">

                <div class="card-header text-center fs-4 fw-bold">
                    <h1>{{ $book->title }}</h1>
                </div>

                <div class="card-body text-center">
                    <h3>{{ $book->author }}</h3>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection