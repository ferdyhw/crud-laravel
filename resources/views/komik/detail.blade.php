@extends('layouts/template')
@section('content')

@if ($pesan = Session::get('status'))
<div class="alert alert-success" role="alert">
    {{ $pesan }}
  </div>
    
@endif

<h1>Detail Komik</h1>
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        
                        <img src="/assets/img/{{ $komik->sampul }}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">Judul : {{ $komik->judul }} </h6>
                            <p class="card-text">Penulis : {{ $komik->penulis }} </p>
                            <p class="card-text">Penerbit : {{ $komik->penerbit }} </p>
                            <p class="card-text">Genre : <small class="badge bg-primary">{{ $komik->genre->nama }}</small></p>
                            <a href="/komik/ubah/{{ $komik->slug }}" class="btn btn-warning">Edit</a>
                            <form action="/komik/hapus/{{ $komik->id }}" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" onclick="return confirm('Apakah yakin akan menghapus komik ?');">Delete</button>
                            </form>
                            
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