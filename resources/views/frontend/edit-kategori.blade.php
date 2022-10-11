@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<main>
    <article>

        <section class="tv-series">
            <div class="container">

                <h2 class="h2 section-title text-white">Halaman Kategori</h2>
                <form action="{{route('home.kategori.update')}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card">
                        <input type="hidden" name="id" value="{{$kategoris->id}}">
                        <input type="text" value="{{$kategoris->name}}" name="name" class="form-control">
                        <button type="submit" class="btn btn-primary btn-block">Edit Data</button>
                    </div>
                </form>
               

            </div>
        </section>

    </article>
</main>

@endsection