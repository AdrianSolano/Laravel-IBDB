@extends('layouts.app')

@section('title', 'New book')

@section('content')
<h1>Add New Book</h1>
<form action="/books" method="post" novalidate>

    @csrf

    @include('public.books.partials.form')

    <button type="submit" class="btn btn-primary">Save Book</button>
</form>
@endsection
@push('estilos')
    <link href="{{ mix('css/formularios/formularioLibro.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ mix('/js/validaciones/validacionLibro.js') }}" defer ></script>
@endpush
