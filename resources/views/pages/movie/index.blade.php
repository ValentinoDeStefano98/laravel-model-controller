@extends('layout.layout')

@section('title', 'Home')

@section('content')
    <div class="row">
        @forelse ($movies as $key => $movie)
            <div class="col-4 card text-center">
                <div class="card-body">
                    <h3 class="card-title">{{ $movie->title }}</h3>
                    <p class="card-text"><span class="text-danger">Language:</span>  {{ $movie->nationality }}</p>
                    <p class="card-text"><span class="text-danger">Release:</span> {{ $movie->date }}</p>
                    <p class="card-text"><span class="text-danger">Score:</span> {{ $movie->vote }}</p>
                </div>

            </div>
        @empty
            <p>Non ci sono film nella lista</p>
        @endforelse
    </div>
@endsection