@extends('layouts.app')

@section('title', 'Book Info')

@section('content')
    <h2>{{ $book->title }}</h2>
    <h4>{{ $book->author->pluck('name')->implode(', ') }}</h4>
    <p>{{ $book->description }}</p>

    @include('public.books.partials.buttons')

@endsection
