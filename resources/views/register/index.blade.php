@extends('layouts.template-auth')
@section('content')
<div class="container mt-4">
    <h1 class="mt-3 mb-3">Form Registrasi</h1>
    <div class="row">
        <div class="col-6">
            <form action="/auth/login" method="post">
                <?= csrf_field(); ?>
                <div class="form-control p-3">
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" autofocus>
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="password" name="password">
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <div style="float: right; margin-top: 10px">
                        <small>Sudah punya akun? <a href="/login">Login</a></small>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection