@extends('frontend.layouts.app')

@section('content')
<main>
    <article>

        <!-- 
        - #MOVIE DETAIL
      -->
        <style>

        </style>
        <section class="movie-detail" style="background:linear-gradient(0deg, rgba(5, 5, 5, 0.800), rgba(5, 5, 5, 0.800)),  url('http://image.tmdb.org/t/p/w500<?php echo $area['backdrop_path'] ?>') no-repeat;
            background-size: cover;
            background-size: cover;

            background-position: center;
            padding-top: 160px;
            padding-bottom: var(--section-padding);">
            <div class="container">

                <figure class="movie-detail-banner">

                    <img src="http://image.tmdb.org/t/p/w500{{$area['poster_path']}}" alt="Free guy movie poster">

                    <button class="play-btn">
                        <ion-icon name="play-circle-outline"></ion-icon>
                    </button>

                </figure>

                <div class="movie-detail-content">


                    <h1 class="h1 detail-title">
                        {{$area['original_title']}}
                    </h1>

                    <div class="meta-wrapper">

                        <div class="badge-wrapper">
                            <div class="badge badge-fill">PG {{($area['adult']=="false")? "13" : "18+"}}</div>

                            <div class="badge badge-outline">HD</div>
                        </div>

                        <div class="ganre-wrapper">
                            @foreach($area['genres'] as $key => $value)
                            <a href="#">{{$value['name']}}</a>
                            @endforeach
                        </div>

                        <div class="date-time">

                            <div>
                                <ion-icon name="calendar-outline"></ion-icon>

                                <time datetime="2021">{{$area['release_date']}}</time>
                            </div>

                            <div>
                                <ion-icon name="time-outline"></ion-icon>

                                <time datetime="PT115M">{{$area['runtime']}} min</time>
                            </div>

                        </div>

                    </div>

                    <p class="storyline">
                        {{$area['overview']}}
                    </p>


                </div>

            </div>
        </section>

    </article>
</main>

@endsection