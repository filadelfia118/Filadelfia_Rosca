@extends('layouts.guest')

@section('content')
<!-- Header -->
<header id="home">
    <div class="container-fluid imgcontainer d-flex align-items-center justify-content-center  combined-background">
        <div class="  text-center col-lg-6">
            <h1 class="  mb-5 header-title">
            refresh space <br>
            </h1>
            <button class="circle-button">Catalog</button>
            <p>BE BEAUTIFUL WITH US</p>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
<!-- Blog -->
<section id="blog" class="my-lg-2">
    <div class="container txtcontainer mtitle d-flex flex-column justify-content-center align-items-center flex-lg-row my-5 mb-0">
        <p>FII FRESH CU REFRESH SPACE</p>
        <h2 class="">Sfaturi pentru frumusețea ta </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card d-flex flex-row">
                    <img src="assets/images/articles/photo-article1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Produse Cosmetice Vegane
Și Fără Cruzime</h5>
                        <p class="card-text">oferă o alternativă pentru îngrijirea personală, fiind create fără ingrediente de origine animală și fără testare pe animale.</p>
                        <a href="#" class=" btn-primary">Vezi mai mult</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card d-flex flex-row">
                    <img src="assets/images/articles/photo-article4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">De Ce Este Benefic 
Machiajul Mineral?</h5>
                        <p class="card-text">minimizează riscul de iritații și acneei, oferind în același timp o acoperire ușoară datorită compoziției sale naturale.</p>
                        <a href="#" class=" btn-primary">Vezi mai mult</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card d-flex flex-row">
                    <img src="assets/images/articles/photo-article2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Este Mai Bine Să Aplici
crema cu mâinile?</h5>
                        <p class="card-text">poate fi mai eficientă, deoarece căldura de la degete ajută crema să se absoarbă mai bine în piele.</p>
                        <a href="#" class=" btn-primary">Vezi mai mult</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card d-flex flex-row">
                    <img src="assets/images/articles/photo-article5.png"class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Antioxidanți In Produsele
Cosmetice Pentru Frumusețe</h5>
                        <p class="card-text">aceștia ajută la combaterea stresului oxidativ și protejează pielea împotriva deteriorării cauzate de radicalii liberi.</p>
                        <a href="#" class=" btn-primary">Vezi mai mult</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="container txtcontainer mtitle d-flex flex-column justify-content-center align-items-center flex-lg-row my-5 mb-0">
            <a href="#" class=" btnvezi radius btn btn-primary btn-bg-light px-4 py-2 me-3">
                <i class=""></i>
                VEZI MAI MULTE
            </a>
        </div>
    </div>
</section>

<!-- End blog -->
<!--  Recenzii -->
<div class="container title d-flex flex-column justify-content-center align-items-center flex-lg-row my-5">
    <h2 class="  text-center text-lg-center">Recenzii</h2>
</div>
<section id="recenzii" class=" articles my-5 py-5">
<div class="container">
    
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="row">
                        @foreach($articles as $article)
                        <div class="col-md-4">
                            <div class="card bg-card radius">
                                <div class="card-body    ">
                                    <div class="d-flex  images">
                                        @foreach($article->images()->limit(4)->get() as $image)
                                            <img src="{{ asset(env('UPLOADS_IMAGE'). "/" . $image->name) }}" class="rounded-circle radius w-50" alt="Metaverse">
                                        @endforeach
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <div class="d-flex author flex-row align-items-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h5 class="mb-0">{{ $article->name }}</h5>
                                                <p>{{$article->info}}</p>
                                                <!-- <p class="text-secondary mb-0">Created by <span class=" ">{{ $article->user()->get()->first()->name }}</span></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</section>
<!-- End  recenzii -->

@endsection