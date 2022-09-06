@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <h3>{{ $book->author }}</h3>
@endsection