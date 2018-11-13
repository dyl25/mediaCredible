@extends('admin.layouts.app')

@section('title')
Modificiation d'un contenu
@endsection

@section('content')
<div class="card bg-light p-3 mt-3">
    <h2>Modificiation d'un contenu</h2>

    @if($errors->any())
        @include('admin.layouts.errors')
    @endif

    <form action="{{ route('admin.contents.update', $content->id) }}" method="POST">
        @method('PATCH')
        @csrf

        <!-- Nom -->
        <div class="form-group">
            <label for="media">Média associé</label>
            <select class="form-control col-md-2" name="media" id="media">
                <option value="">Choisir un média</option>
                @foreach($medias as $key => $media)
                <option value="{{ $media->id }}" {{ $content->media->id ==  $media->id ? "selected" : "" }} >{{ $media->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Titre -->
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" value="{{ $content->title }}">
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
                <input type="text" class="form-control" name="contentUrl" id="contentUrl" value="{{ $content->url }}">
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
                <input type="text" class="form-control" name="imageUrl" id="imageUrl" value="{{ $content->url_image }}">
            </div>
        </div>

        <!-- Envoi -->
        <button type="submit" class="btn btn-success" name="btSendContent">Modifier</button>
    </form>
</div>
@endsection