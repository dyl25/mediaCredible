@extends('admin.layouts.app')

@section('title')
Présentation des contenus
@endsection

@section('content')
<section class="card bg-light p-3 mt-3">
    <h2>Contenus</h2>
    @if(session('notification')) 
        @include('admin.layouts.notification')
    @endif
    <a class="btn btn-success" href="{{ route('admin.contents.create') }}" ><i class="fas fa-plus fa-lg"></i> Ajouter un contenu</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Média associé</th>
                    <th>Titre du contenu</th>
                    <th>Url</th>
                    <th>Url de l'image principal</th>
                    <th><i class="fas fa-arrow-up text-success"></i> Upvotes</th>
                    <th><i class="fas fa-arrow-down text-danger"></i> Downvotes</th>
                    <th>Date d'ajout</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $content)
                <tr>
                    <td>{{ $content->id }}</td>
                    <td><img class="img-fluid" src="{{ asset('img/medias/'.$content->media->logo) }}" alt="">{{ $content->media->name }}</td>
                    <td>{{ $content->title }}</td>
                    <td>
                        <a href="{{ $content->url }}">{{ str_limit($content->url, 20) }}</a>
                    </td>
                    <td>
                        <a href="{{ $content->url_image }}">{{ str_limit($content->url_image, 30) }}</a>
                    </td>
                    <td>
                        <span class="text-success">{{ $content->up_votes }}</span>
                    </td>
                    <td>
                        <span class="text-danger">{{ $content->down_votes }}</span>
                    </td>
                    <td>{{ $content->created_at->format('j/n/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.contents.edit', $content->id) }}" data-toggle="tooltip" data-placement="top" title="Editer">
                            <i class="fas fa-pen fa-lg text-success"></i>
                        </a>
                        <form class="d-inline" action="{{ route('admin.contents.destroy', $content->id) }}" method="POST">
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
</section>
@endsection