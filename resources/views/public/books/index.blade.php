@extends('layouts.app')

@section('title', 'About IBDB')

@section('content')
<h1>Book List</h1>

<form id="form" method="post" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" id="inputBusqueda" type="search" placeholder="Search books" aria-label="Search">
    <button id="busqueda" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
                  
<div id="librosMostrar">
    <div class="d-flex justify-content-center">
        {{ $books->links() }}
    </div>
    <div data-lista="libros">
    @forelse($books as $book)
    <div class="card mb-2">
        <div class="card-header">
            {{ $book->title }}
        </div>
        <div class="card-body">
            <h5 class="card-title">User: <a href="{{ route('userbooks.index', $book->user->slug) }}" title="{{ $book->user->name }}'s book list">{{ $book->user->name }}</a></h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ str_plural("Author", $book->authors->count())}}: {{ $book->authors->pluck('name')->implode(', ') }}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Publisher: {{ $book->publisher->name }}</h6>
            <p class="card-text">{{ str_limit($book->description, 300) }}</p>


            @include('public.books.partials.buttons')

            <a href="/books/{{ $book->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
      </div>
    </div>
    @empty
      <p>No hay libros</p>
    @endforelse
    </div>
    <div class="d-flex justify-content-center">
        {{ $books->links() }}
    </div>
</div>    
      @include('public.books.partials.modal')
      
@endsection

@push('scripts')
    <script src="{{ mix('/js/model/model.js') }}" defer ></script>
    <script src="{{ mix('/js/search/search.js') }}" defer ></script>
@endpush
