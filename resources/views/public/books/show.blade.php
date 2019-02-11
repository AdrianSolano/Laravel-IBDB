@extends('layouts.app')

@section('title', 'Book Info')

@section('content')
    @include('public.books.partials.showAjax')
    @include('public.books.partials.buttons')

@endsection
