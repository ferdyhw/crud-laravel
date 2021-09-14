@extends('layouts/template')
@section('content')
<a href="komik/tambah" class="btn btn-primary mb-3 mt-3">Tambah Data Komik</a>
<h1>Daftar Komik</h1>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cover</th>
            <th scope="col">Judul</th>
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
                <td><a href="/komik/{{ $k->slug }}" class="btn btn-success">Detail</a></td>
            </tr>
        </tbody>
    <?php endforeach; ?>
</table>
@endsection()