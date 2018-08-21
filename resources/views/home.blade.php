@extends('layouts.app')

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
        <section class="row border-top border-bottom">
            <div class="col-md-4 my-auto">
                <img class="img-fluid" src="./img/rtbf.jpg" alt="rtbf">
            </div>
            <div class="col-md-4 my-auto">Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</div>
            <div class="col-md-4 my-auto">
                <div class="progress">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </section>
        <section class="row border-top border-bottom">
            <div class="col-md-4 my-auto">
                <img class="img-fluid" src="./img/La2.png" alt="la2">
            </div>
            <div class="col-md-4 my-auto">Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</div>
            <div class="col-md-4 my-auto">
                <div class="progress">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </section>
        <section class="row border-top border-bottom">
            <div class="col-md-4 my-auto">
                <img class="img-fluid" src="./img/tf1.jpg" alt="tf1">
            </div>
            <div class="col-md-4 my-auto">Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</div>
            <div class="col-md-4 my-auto">
                <div class="progress">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </section>

    </div>
</section>

<section class="container-fluid p-5">
    <h2>Derniers contenus</h2>
    <div class="row ">

        <div class="col-md-3 my-4">
            <article class="card">
                <img class="card-img-top" src="{{ asset('./img/content/bitcoin.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <header class="card-title">
                        <h5>Card title</h5>
                        <p class="text-muted">RTBF - il y a 1 heure</p>
                    </header>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </article>
        </div>
        <div class="col-md-3 my-4">
            <article class="card">
                <img class="card-img-top" src="./img/content/cycliste.jpg" alt="Card image cap">
                <div class="card-body">
                    <header>
                        <h5 class="card-title">Card title</h5>
                    </header>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </article>
        </div>
        <div class="col-md-3 my-4">
            <article class="card">
                <img class="card-img-top" src="./img/content/doigts.JPG" alt="Card image cap">
                <div class="card-body">
                    <header>
                        <h5 class="card-title">Card title</h5>
                    </header>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </article>
        </div>
        <div class="col-md-3 my-4">
            <article class="card">
                <img class="card-img-top" src="./img/content/gendarme.jpg" alt="Card image cap">
                <div class="card-body">
                    <header>
                        <h5 class="card-title">Card title</h5>
                    </header>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </article>
        </div>

        <div class="col-md-3 my-4">
            <article class="card">
                <img class="card-img-top" src="./img/content/bitcoin.jpg" alt="Card image cap">
                <div class="card-body">
                    <header>
                        <h5 class="card-title">Card title</h5>
                    </header>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </article>
        </div>
        <div class="col-md-3 my-4">
            <article class="card">
                <img class="card-img-top" src="./img/content/cycliste.jpg" alt="Card image cap">
                <div class="card-body">
                    <header>
                        <h5 class="card-title">Card title</h5>
                    </header>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </article>
        </div>
        <div class="col-md-3 my-4">
            <article class="card">
                <img class="card-img-top" src="./img/content/doigts.JPG" alt="Card image cap">
                <div class="card-body">
                    <header>
                        <h5 class="card-title">Card title</h5>
                    </header>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </article>
        </div>
        <div class="col-md-3 my-4">
            <article class="card">
                <img class="card-img-top" src="./img/content/gendarme.jpg" alt="Card image cap">
                <div class="card-body">
                    <header>
                        <h5 class="card-title">Card title</h5>
                    </header>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </article>
        </div>

    </div>
</section>
@endsection
