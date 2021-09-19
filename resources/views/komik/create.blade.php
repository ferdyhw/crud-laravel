@extends('layouts/template')
@section('content')
<h1>Tambah Data Komik</h1>
<div class="row">
    <div class="col-6">
        <form action="/komik/prosesTambah" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-control p-3">
                <h5 class="mb-3">Masukan Data Komik</h5>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Cover</label>
                    <div class="col-sm-2">
                        <img src="{{ asset('assets/img/default.png') }}" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="sampul" id="sampul" onchange="previewImg()">
                            <div class="invalid-feedback">

                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/komik" style="float: right;">
                    <- Kembali ke daftar komik</a>
            </div>
        </form>
    </div>
</div>
@endsection()