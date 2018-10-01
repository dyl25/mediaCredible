@extends('admin.layouts.app')

@section('title')
Gestion des médias
@endsection

@section('content')
<div class="card bg-light p-3 mt-3">
    <h2>Médias</h2>
    @if(session('notification')) 
        @include('admin.layouts.notification')
    @endif
    <a class="btn btn-success" href="{{ route('admin.medias.create') }}" ><i class="fas fa-plus fa-lg"></i> Ajouter un média</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Site</th>
                    <th><i class="fas fa-arrow-up text-success"></i> Upvotes</th>
                    <th><i class="fas fa-arrow-down text-danger"></i> Downvotes</th>
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
                        <span class="text-success">{{ $media->up_votes }}</span>
                    </td>
                    <td>
                        <span class="text-danger">{{ $media->down_votes }}</span>
                    </td>
                    <td>{{ $media->created_at->format('j/n/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.medias.edit', $media->id) }}" data-toggle="tooltip" data-placement="top" title="Editer">
                            <i class="fas fa-pen fa-lg text-success"></i>
                        </a>
                        <form class="d-inline" action="{{ route('admin.medias.destroy', $media->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-link" type="submit" data-toggle="tooltip" data-placement="bottom" title="Supprimer">
                                <i class="fas fa-trash fa-lg text-danger"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection