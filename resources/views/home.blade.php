@extends('layouts.app')

@section('title')
Accueil MediCredible
@endsection

@section('content')
<section class="container">
    <div class="row py-4">
        <h2>Medias les plus fiable</h2>

        @foreach($bestMedias as $media)
        <section class="row border-top border-bottom">
            <div class="col-md-4 my-auto">
                <img class="img-fluid" src="{{ asset('./img/medias/'.$media->logo) }}" alt="rtbf">
            </div>
            <div class="col-md-4 my-auto">Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</div>
            <div class="col-md-4 my-auto">
                <div class="progress">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </section>
        @endforeach
    </div>
</section>

<section class="container-fluid p-5">
    <h2>Derniers contenus</h2>
    <div class="row ">
        @foreach($contents as $content)
        <div class="col-md-3 my-4">
            <article class="card">
                <img class="card-img-top" src="{{ $content->url_image }}" alt="Card image cap">
                <div class="card-body">
                    <header class="card-title">
                        <h5>{{ $content->title }}</h5>
                        <p class="text-muted">{{ $content->media->name }} - {{ $content->created_at->diffForHumans() }}</p>
                    </header>
                   <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </article>
        </div>
        @endforeach  
    </div>
</section>
@endsection
