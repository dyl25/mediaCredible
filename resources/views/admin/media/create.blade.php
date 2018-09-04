@extends('admin.layouts.app')

@section('title')
Ajout d'un média
@endsection

@section('content')
<div class="card bg-light p-3 mt-3">
    <h2>Ajout d'un média</h2>
    <form>
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
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
                <input type="text" class="form-control" id="url">
            </div>
        </div>

        <div class="form-group">
            <label for="image">Example file input</label>
            <input type="file" class="form-control-file" id="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection