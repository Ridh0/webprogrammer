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

                    <h2 class="h2 service-title">Login</h2>

                    <p class="service-text">
                        Silahkan Memasukan Username dan Password Anda 
                    </p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <ul class="service-list">

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="people-circle-outline"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Email</h3>
                                        <input type="email" name="email" required placeholder="Enter your email" class="email-field">
                                        <p class="card-text">
                                            Email : admin@gmail.com
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="lock-closed-outline"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Password</h3>
                                        <input id="password" type="password" class="email-field" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <p class="card-text">
                                            Password : admin1234
                                        </p>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="service-card">

                                    <div class="card-content">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </form>
                </div>

            </div>
        </section>
    </article>
</main>

@endsection