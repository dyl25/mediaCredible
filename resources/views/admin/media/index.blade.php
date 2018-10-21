@extends('admin.layouts.app')

@section('title')
Gestion des médias
@endsection

@section('content')
<section class="card bg-light p-3 mt-3">
    <h2>Médias</h2>
    @if(session('notification')) 
        @include('admin.layouts.notification')
    @endif
    <a class="btn btn-success" href="{{ route('admin.medias.create') }}" ><i class="fas fa-plus fa-lg"></i> Ajouter un média</a>
    <manage-medias></manage-medias>
</section>
@endsection