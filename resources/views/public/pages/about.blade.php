@extends('layouts.app')

@section('title', 'About IBDB')

@section('content')
    <h1>Alertas</h1>
    <button id="botonAlerta" type="button" class="btn btn-info">Cerrar alerta</button>
    <div id="alertaEjemplo3" class="alert alert-dark alert-dismissible fade show w-50" role="alert">
    Alertas
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <span id="badge" class="badge badge-info"></span>
</div>

@endsection

@push('scripts')
    <script src="{{ mix('/js/alert/alertas.js') }}" defer ></script>
@endpush
