@extends('admin.layouts.app')

@section('title')
Création d'un contenu
@endsection

@section('content')
<div class="card bg-light p-3 mt-3">
    <h2>Ajout d'un contenu</h2>

    @if($errors->any())
        @include('admin.layouts.errors')
    @endif

    <form action="{{ route('admin.contents.store') }}" method="POST">

        @csrf

        <!-- Nom -->
        <div class="form-group">
            <label for="media">Média associé</label>
            <select class="form-control col-md-2" name="media" id="media">
                <option value="" disabled>Choisir un média</option>
                @foreach($medias as $media)
                <option value="{{ $media->id }}">{{ $media->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Titre -->
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" value="{{ old('title') }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <!-- Url contenu -->
        <div class="form-group">
            <label for="contentUrl">Url vers le contenu</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-link"></i>
                    </div>
                </div>
                <input type="text" class="form-control" name="contentUrl" id="contentUrl" value="{{ old('contentUrl') }}">
            </div>
        </div>

        <!-- Url Image -->
        <div class="form-group">
            <label for="imageUrl">Url vers l'image principal du contenu</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-link"></i>
                    </div>
                </div>
                <input type="text" class="form-control" name="imageUrl" id="imageUrl" value="{{ old('imageUrl') }}">
            </div>
        </div>

        <!-- Envoi -->
        <button type="submit" class="btn btn-success" name="btSendContent">Ajouter</button>
    </form>
</div>
@endsection