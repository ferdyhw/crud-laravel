@extends('layouts/template')
@section('content')

<h1>Detail Komik</h1>
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <?php foreach ($komik as $k) : ?>
                        <img src="/assets/img/{{ $k->sampul }}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">Judul : {{ $k->judul }} </h6>
                            <p class="card-text">Penulis : {{ $k->penulis }} </p>
                            <p class="card-text"><small class="text-muted">Penerbit : {{ $k->penerbit }} </small></p>
                            <a href="/komik/ubah/{{ $k->slug }}" class="btn btn-warning">Edit</a>
                            <form action="/komik/hapus/{{ $k->id }}" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" onclick="return confirm('Apakah yakin akan menghapus komik ?');">Delete</button>
                            </form>
                            <?php endforeach; ?>
                            <br><br>
                            <a href="/komik">
                                <- Kembali ke daftar komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()