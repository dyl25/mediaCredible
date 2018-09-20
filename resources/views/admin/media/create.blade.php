@extends('admin.layouts.app')

@section('title')
Ajout d'un média
@endsection

@section('content')
<div class="card bg-light p-3 mt-3">
    <h2>Ajout d'un média</h2>

    @if($errors->any())
        @include('admin.layouts.errors')
    @endif

    <form action="{{ route('admin.medias.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="mediaName" id="mediaName" aria-describedby="emailHelp" value="{{ old('mediaName') }}">
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
                <input type="text" class="form-control" name="mediaUrl" id="mediaUrl" value="{{ old('mediaUrl') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="image">Example file input</label>
            <input type="file" accept="image/*" class="form-control-file" name="logo" id="logo">
        </div>

        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
@endsection