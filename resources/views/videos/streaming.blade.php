@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col ">
            @forelse ($video as $item)
                <video height="90%" width="100%" controls="true">
                    <source src="{{ URL::asset($item->file) }}" type="video/mp4">
                </video>
            @empty
                <p>This video does not exist</p>
            @endforelse

        </div>
        <br>
    </div>

@endsection
