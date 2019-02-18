@auth
@can('wank', $book)
<a href="/books/{{ $book->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a>
@endcan
<form data-accion='deletus' id="deletus" action="/books/{{ $book->id }}" method="post" class="mr-2 float-right">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger btn-sm">Delete Book</button>
</form>
@endauth
 <!-- data-accion='delete' -->
