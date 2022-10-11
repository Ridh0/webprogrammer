@extends('frontend.layouts.app')

@section('content')
<main>
    <article>
    
        <section class="top-rated">
            <div class="container">

                <p class="section-subtitle">Kategori</p>
                @php
                $string = str_replace('_', ' ', request()->segment(3))
                @endphp
                <h2 class="h2 section-title">{{strtoupper($string)}}</h2>
                <ul class="movies-list">
                    @foreach($area['results'] as $key => $value)
                    <li>
                        <div class="movie-card">

                            <a href="{{asset('tampilanfilmmovie-details.html')}}">
                                <figure class="card-banner">
                                    <img src="http://image.tmdb.org/t/p/w500{{$value['backdrop_path']}}" alt="Sonic the Hedgehog 2 movie poster">
                                </figure>
                            </a>

                            <div class="title-wrapper">
                                <a href="{{asset('tampilanfilmmovie-details.html')}}">
                                    <h3 class="card-title">{{$value['original_title']}}</h3>
                                </a>

                                <time datetime="2022">{{$value['release_date']}}</time>
                            </div>

                            <div class="card-meta">
                              

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>

                                    <data>{{$value['vote_average']}}</data>
                                </div>
                            </div>

                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </section>

        <section class="cta">
            <div class="container">

             
            </div>
        </section>

    </article>
</main>

@endsection