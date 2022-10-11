@extends('frontend.layouts.app')

@section('content')
<main>
    <article>

        <!-- 
        - #HERO
      -->

        <section class="hero">
            <div class="container">

                <div class="hero-content">

                    <p class="hero-subtitle">Web Ridho </p>

                    <h1 class="h1 hero-title">
                        Unlimited <strong>Movie</strong>, TVs Shows, & More.
                    </h1>

                    <div class="meta-wrapper">

                        <div class="badge-wrapper">
                            <div class="badge badge-fill">PG 18</div>

                            <div class="badge badge-outline">HD</div>
                        </div>


                    </div>

                    <button class="btn btn-primary">
                        <ion-icon name="play"></ion-icon>

                        <span>Watch now</span>
                    </button>

                </div>

            </div>
        </section>





        <!-- 
        - #UPCOMING
      -->

        <section class="upcoming">
            <div class="container">

                <div class="flex-wrapper">

                <div class="title-wrapper">
              <p class="section-subtitle">Kategori</p>

              <h2 class="h2 section-title">Popular Movie</h2>
            </div>

                </div>

                <ul class="movies-list  has-scrollbar">
                    @foreach($area['results'] as $key => $value)
                    <li>
                        <div class="movie-card">

                            <a href="{{route('home.detail',$value['id'])}}">
                                <figure class="card-banner">
                                    <img src="http://image.tmdb.org/t/p/w500{{$value['backdrop_path']}}" alt="The Northman movie poster">
                                </figure>
                            </a>

                            <div class="title-wrapper">
                                <a href="{{route('home.detail',$value['id'])}}">
                                    <h3 class="card-title">{{$value['original_title']}}</h3>
                                </a>

                                <time datetime="2022">{{$value['release_date']}}</time>
                            </div>

                            <div class="card-meta">
                                <div class="badge badge-outline">HD</div>



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


    </article>
</main>

@endsection