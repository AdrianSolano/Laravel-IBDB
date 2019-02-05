@extends('layouts.app')

@section('title', 'Amijos IBDB')

@section('content')
    <h1>Perfil pero no</h1>

    <ul class="nav nav-pills" id="myTabPill" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="myProfile-pill" data-toggle="pill" href="#myProfilePill" role="tab" aria-controls="profile" aria-selected="true">Mis datos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="myBooks-pill" data-toggle="pill" href="#myBooksPill" role="tab" aria-controls="myBooks" aria-selected="false">Mis libros</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="friends-pill" data-toggle="pill" href="#friendsPill" role="tab" aria-controls="friends" aria-selected="false">Mis amigos</a>
    </li>
</ul>
 <div class="tab-content" id="myTabContentPill"><!-- Include  -->
    <div class="tab-pane fade show active" id="myProfilePill" role="tabpanel" aria-labelledby="myProfile-tab">@include('public.profile.myProfile')</div>
    <div class="tab-pane fade" id="myBooksPill" role="tabpanel" aria-labelledby="myBooks-tab">@include('public.profile.myBooks')</div>
    <div class="tab-pane fade" id="friendsPill" role="tabpanel" aria-labelledby="friends-tab">@include('public.profile.friends')</div>
</div>

@endsection

@push('scripts')
    <script src="{{ mix('/js/profile/profileJS.js') }}" defer ></script>
@endpush
