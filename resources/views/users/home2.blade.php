@extends('layouts.app')
@section('content')
    <!-- content -->
    @forelse ($arcane as $a)
        <header class="banner" style="background-image: url('{{ $a->imageFilm }}');">
            <div class="banner__contents">
                <h1 class="banner__title"> {{ $a->title }}</h1>
                <h1 class="banner__description">
                    {{ $a->sinopsis }}
                </h1>
                <div class="banner__buttons">
                    
                    
                   
                    <a href="{{ Route('playVid',['id' => $a->idVideo ])}} ">
                        <button class="banner__button">Play</button>
                    </a>
                </div>
            </div>
            <div class="banner--fadeBottom"></div>
        </header>
    @empty
        <p>no movies</p>
    @endforelse

    <div class="title"></div>
    @foreach ($tipos as $tipo)
        <div class="title">
            <h3> {{ $tipo }} </h3>
            <hr />
        </div>
        @forelse($peliculas[$tipo] as $peli)
            <div class="movie-card">
                <div class="movie-header manOfSteel">
                    <a href="{{ Route('playVid',['id' => $peli->idVideo ])}} ">
                        <img class="img-card" src="{{ $peli->imageFilm }}" alt="1">
                    </a>
                </div>
                <!--movie-header-->
                <div class="movie-content text-center item-center">
                    <div class="movie-content-header">

                        <a href=" {{ $peli->file }} ">
                            <h3 class="movie-title">{{ $peli->title }}</h3>
                        </a>
                    </div>
                </div>

                <!--movie-content-->
            </div>

        @empty
            <p>no movies</p>
        @endforelse
    @endforeach

@endsection
