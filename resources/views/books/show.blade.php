@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <h3>{{ $book->author }}</h3>
    </div>
@endsection