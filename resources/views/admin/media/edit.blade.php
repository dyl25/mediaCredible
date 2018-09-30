@extends('admin.layouts.app')

@section('title')
Modification d'un média
@endsection

@section('content')
<div class="card bg-light p-3 mt-3">
    <h2>Modification d'un média</h2>

    @if($errors->any())
        @include('admin.layouts.errors')
    @endif

    <form action="{{ route('admin.medias.update', $media->id) }}" method="POST" enctype="multipart/form-data">
        <fieldset>
            @method('PATCH')
            @csrf

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="mediaName" id="mediaName" aria-describedby="emailHelp" value="{{ $media->name }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="url">Url du site du médias</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="mediaUrl" id="mediaUrl" value="{{ $media->website }}">
                </div>
            </div>

            <div class="form-group">
                <img src="{{ asset('img/medias/'.$media->logo) }}" alt="Image du média">
            </div>

            <div class="form-group">
                <label for="image">Changer d'image</label>
                <input type="file" accept="image/*" class="form-control-file" name="logo" id="logo">
            </div>

            <button type="submit" class="btn btn-success">Modifier</button>
            </fieldset>
    </form>
</div>
@endsection