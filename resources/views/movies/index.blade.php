@extends('layouts.app')

@section('title', 'Movies')

@section('content')

<main>
    <section class="container">
        <h1>Movies</h1>
        <div class="row gy-4">
          @foreach ($movies as $key => $movie)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="{{$movie['image']}}" alt="{{$movie['title']}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie['title']}}</h5>
                        <p class="card-text">{{$movie['original_title']}}</p>
                        <a href="{{route('movies.show', $key)}}" class="btn btn-primary">Vedi dettagli</a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </section>
</main>

@endsection
