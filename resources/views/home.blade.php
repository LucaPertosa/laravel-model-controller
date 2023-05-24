@extends('layouts.app')

@section('content')
    <h2 class="text-center fs-1">Home</h2>
    <div class="container">
        <ul class="list-unstyled row row-cols-5 g-3">
            @foreach ($movies as $movie)
                <li class="col">
                    <div class="card">
                        <img class="img-card-top" src="{{ $movie->image }}" alt="">
                        <p class="card-body">
                            {{ $movie->title }}
                        </p>
                    </div>
                </li>    
            @endforeach
        </ul>
    </div>
@endsection