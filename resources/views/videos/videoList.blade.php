@extends('layouts.app')
@section('content')

    <!-- LIST -->
    @error('error')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div id="gmContainer">
        @forelse ($videos as $video)

            <div class="movie-card">
                <div class="movie-header manOfSteel">
                    <a href="{{ Route('playVid',['id' => $video->idVideo ])}} ">
                        <img class="img-card" src="{{ $video->imageFilm }}" alt="1">
                    </a>
                </div>
                <!--movie-header-->
                <div class="movie-content text-center item-center">
                    <div class="movie-content-header">

                        <a>
                            <h3 class="movie-title">{{ $video->title }}</h3>
                        </a>
                    </div>
                    <div class="container">
                        <div class="row">
                            <form action="{{ Route('addFav') }}" method="POST">
                                @csrf
                                <input type="hidden" name="idVideo" value="{{ $video->idVideo }}">
                                <button type="submit" class="btn btn-outline-primary" name="star">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                    
                        </div>

                    </div>

                </div>
                <!--movie-content-->
            </div>
            <!--movie-card-->
        @empty
            <p>No Videos</p>
        @endforelse
    </div>
    <!--container-->
@endsection
