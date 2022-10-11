@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<main>
    <article>

        <section class="tv-series">
            <div class="container">

                <h2 class="h2 section-title text-white">Halaman Kategori</h2>
                <form action="{{route('home.kategori.store')}}" method="post">
                    @csrf
                    <div class="card">
                        <input type="text" name="name" class="form-control">
                        <button type="submit" class="btn btn-primary btn-block">Tambah Data</button>
                    </div>
                </form>
                <div class="card mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$row->name}}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{route('home.kategori.edit',$row)}}">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="{{route('home.kategori.delete',$row)}}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

    </article>
</main>

@endsection