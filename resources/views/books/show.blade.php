@extends('layouts.app')

@section('title', $book['title'])

@section('content')
<main>
    <h1>Books details</h1>
    <section class="container d-flex align-content-center justify-content-center">
        <div class="row gy-4">
            <div class="col-12">
                <div class="card mydetail">
                    <img src="{{$book['cover_image']}}" alt="{{$book['title']}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$book['title']}}</h5>
                        <p class="card-text">{!! $book['plot'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
