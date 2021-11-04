<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'App Laravel | Register'
        ];

        return view('register.index', $data);
    }
}
