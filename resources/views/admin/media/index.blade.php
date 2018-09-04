@extends('admin.layouts.app')

@section('title')
Gestion des médias
@endsection

@section('content')
<div class="card bg-light p-3 mt-3">
    <h2>Médias</h2>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Site</th>
                    <th>Crédibilité</th>
                    <th>Date d'ajout</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medias as $media)
                <tr>
                    <td>{{ $media->id }}</td>
                    <td>{{ $media->name }}</td>
                    <td>
                        <a href="{{ $media->website }}">{{ $media->website }}</a>
                    </td>
                    <td>
                        <span class="text-success">{{ $media->rate }}</span>
                    </td>
                    <td>{{ $media->created_at->format('j/n/Y') }}</td>
                    <td>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Editer">
                            <i class="fas fa-pen fa-2x text-success"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Supprimer">
                            <i class="fas fa-trash fa-2x text-danger"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection