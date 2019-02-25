@extends('layouts.app')

@section('title', 'Update book')

@section('content')
<h1>Edit Book</h1>
<form id="botonSubmit" action="/books/{{ $book->id }}" method="post" novalidate>

    @csrf
    @method('patch')

    @include('public.books.partials.form')

    <button id="botonSubmit" type="submit" class="btn btn-primary">Update Book</button>
</form>
@endsection

@push('scripts')
    <script src="{{ mix('/js/edit/edit.js') }}" defer ></script>
@endpush