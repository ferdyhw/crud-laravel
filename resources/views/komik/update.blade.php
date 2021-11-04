@extends('layouts/template')
@section('content')
<h1>Ubah Data Komik</h1>
<div class="row">
    <div class="col-6">
        <form action="/komik/prosesUbah/{{ $komik->slug }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-control p-3">
                <h5 class="mb-3">Masukan Data Komik</h5>
                <input type="hidden" name="slug" value="{{ $komik->slug }}">
                <input type="hidden" name="genre_id" value="{{ $komik->genre_id }}">
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $komik->judul }}">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $komik->penulis }}">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $komik->penerbit }}">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="genre_id" id="genre_id" aria-label="Default select example">
                            <option selected value="<?= null ?>">--Pilih--</option>
                            <option value="1" {{ ($komik->genre_id == '1') ? 'selected' : '' }}>Comedy</option>
                            <option value="2" {{ ($komik->genre_id == '2') ? 'selected' : '' }}>Drama</option>
                            <option value="3" {{ ($komik->genre_id == '3') ? 'selected' : '' }}>Horror</option>
                          </select>
                          <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Cover</label>
                    <div class="col-sm-2">
                        <img src="{{ asset('assets/img/'.$komik->sampul) }}" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" value="{{ $komik->sampul }}" name="sampul" id="sampul" disabled onchange="previewImg()">
                            <div class="invalid-feedback">

                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
                <a href="/komik/detail/{{ $komik->slug }}" style="float: right;">
                    <- Kembali ke detail komik</a>
            </div>
        </form>
    </div>
</div>
@endsection()