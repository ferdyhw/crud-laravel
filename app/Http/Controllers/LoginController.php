<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'App Laravel | Login'
        ];
        
        return view('login.index', $data);
    }
}
