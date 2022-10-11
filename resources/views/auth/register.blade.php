@extends('frontend.layouts.loginapp')

@section('content')
<main>
    <article>
        <section class="service">
            <div class="container">

                <div class="service-banner">
                    <figure>
                        <img src="{{asset('tampilanfilm/assets/images/service-banner.jpg')}}" alt="HD 4k resolution! only $3.99">
                    </figure>


                </div>

                <div class="service-content">

                    <p class="service-subtitle">Halaman</p>

                    <h2 class="h2 service-title">Register</h2>

                    <p class="service-text">
                        Silahkan Memasukan Username dan Password Anda
                    </p>
              
                        <ul class="service-list">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <li>
                                <div class="service-card">
                                    <div class="card-content">
                                        <h3 class="h3 card-title">Nama</h3>
                                        <input id="name" type="text" class="email-field" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="service-card">
                                    <div class="card-content">
                                        <h3 class="h3 card-title">Email</h3>
                                        <input type="email" name="email" required placeholder="Enter your email" class="email-field">

                                    </div>
                                </div>
                                <div class="service-card">
                                    <div class="card-content">
                                        <h3 class="h3 card-title">Password</h3>
                                        <input id="password" type="password" class="email-field" name="password" required autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="service-card">
                                    <div class="card-content">
                                        <h3 class="h3 card-title">Konfirmasi Password</h3>
                                            <input id="password-confirm" type="password" class="email-field" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="service-card">
                                    <div class="card-content">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </form>
                        </ul>
                </div>

            </div>
        </section>
    </article>
</main>

@endsection