@extends('layouts/template')
@section('content')
<a href="komik/tambah" class="btn btn-primary mb-3 mt-3">Tambah Data Komik</a>

<div class="row">
    <div class="col-md-6">
        <form action="/komik">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukan keyword..." name="search" id="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($pesan = Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $pesan }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<h1>Daftar Data Komik</h1>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cover</th>
            <th scope="col">Judul</th>
            <th scope="col">Genre</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <?php $i = 1; ?>
    <?php foreach ($komik as $k) : ?>
        <tbody class="">
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><img src="/assets/img/{{ $k->sampul }}" class="cover"></td>
                <td>{{ $k->judul }}</td>
                <td>{{ $k->genre->nama }}</td>
                <td><a href="/komik/detail/{{ $k->slug }}" class="btn btn-success">Detail</a></td>
            </tr>
        </tbody>
    <?php endforeach; ?>
</table>
@endsection()