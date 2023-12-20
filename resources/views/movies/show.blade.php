@extends('layouts.app')

@section('title', $movie['title'])

@section('content')
<main>
    <h1>Movies details</h1>
    <section class="container d-flex align-content-center justify-content-center">
        <div class="row gy-4">
            <div class="col-12">
                <div class="card mydetail">
                    <img src="{{$movie['image']}}" alt="{{$movie['title']}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie['title']}}</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum ullam tenetur pariatur mollitia repellat! Amet illum deleniti quod hic a aspernatur dignissimos, deserunt nemo voluptate inventore corporis est. Nisi, voluptas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, alias!</p>
                        <p>
                            Language: {{$movie['language']}} | Vote: {{$movie['vote']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
