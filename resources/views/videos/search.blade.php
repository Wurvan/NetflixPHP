@extends('layouts.app')
@section('content')
    {{-- <div>{{ $seInp ?? ''}}</div>
    <!-- content --> --}}
    <br>
    <div class="container">
        @error('userSearch')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form action="{{ route('search.post') }}" method="POST">
            <div class="row">

                @csrf
                <div class="col-2">
                    <select id="typeVideo" class="form-select text-light" name="typeVideo">
                        <option value=""> Select type search: </option>
                        <option value="serie">Series</option>
                        <option value="movie">Films</option>
                    </select>
                </div>
                <div class="col-6">
                    <input id="input" type="text" class="form-control" name="userSearch">
                </div>
                <div class="col-sm">
                    <input type="submit" class="btn btn-primary" value="Search">
                </div>
            </div>

            @if (isset($video))
                @forelse ($video as $item)
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
                        <!--movie-content-->
                    </div>
                    <!--movie-card-->
                @empty
                    <br>
                    <h3 class="text-light">No results</h3>
                @endforelse 
            @endif
        </form>
    </div>


@endsection
