@extends('layouts.app')

@section('title', 'Books')

@section('content')

<main>
    <section class="container">
        <h1>Books</h1>
        <div class="row gy-4">
          @foreach ($books as $book)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="{{$book['cover_image']}}" alt="{{$book['title']}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$book['title']}}</h5>
                        <p class="card-text">{!! substr($book['plot'], 0, 100) . '...' !!}</p>
                        <a href="{{route('books.show', $book->id)}}" class="btn btn-primary">Vedi dettagli</a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </section>
</main>

@endsection

