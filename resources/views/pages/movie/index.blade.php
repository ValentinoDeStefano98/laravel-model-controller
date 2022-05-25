@extends('layout.layout');

@section('title', 'Home');

@section('content')
    <div class="row">
        @forelse ($movies as $key => $movie)
            <div class="col-4 card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text">{{ $movie->date }}</p>
                    <p class="card-text">{{ $movie->vote }}</p>
                </div>

            </div>
        @empty
            <p>Non ci sono film nella lista</p>
        @endforelse
    </div>
@endsection