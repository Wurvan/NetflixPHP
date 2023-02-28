@extends('layouts.app')
@section('content')


    <div class="col-sm p-3 min-vh-100">
        <h1 class="text-center display-2 mt-2">Your Favorites</h1>
        @if (app('request')->session()->has('favorites'))
            <div class="align-center p-4">
				<button type="submit" class="btn btn-primary">
                    <a style="color:white" href={{route('removeFav') }}>Borrar Favorites</a></button>
			</div>
        @endif
        @forelse (app('request')->session()->get('favorites',[]) as $video)
            @foreach ($video as $item)
                <div class="movie-card">
                    <div class="movie-header manOfSteel">
                        <a href=" {{ $item->file }} ">
                            <img class="img-card" src="{{ $item->imageFilm }}" alt="1">
                        </a>
                    </div>
                    <!--movie-header-->
                    <div class="movie-content text-center item-center">
                        <div class="movie-content-header">

                            <a href=" {{ $item->file }} ">
                                <h3 class="movie-title">{{ $item->title }}</h3>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @empty
            <li>
                <a class="dropdown-item" href="#">No videos in favorites</a>
            </li>
        @endforelse
    @endsection
